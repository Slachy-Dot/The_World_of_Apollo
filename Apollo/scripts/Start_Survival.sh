#!/usr/bin/env bash
shopt -s extglob

#ARCH MEANS NAME OF JAR (OPTIONS ARE: paper , spigot)
ARCH=paper

#MINECRAFT VERSION 
VERSION=1.18.1

#min amount of server memory
Xms=10G
#max amount of server memory
Xmx=10G

function confirm () {
    printf "$1 [Y/n]: "
    read -n 1 RES
    if [[ ${RES/Y/y} == "y" ]]; then
        printf "\n"
        return
    else
        printf "\nCancelling...\n"
        exit 2
    fi
}

# Parse options
while [[ "$1" =~ ^- && ! "$1" == "--" ]]; do
    case $1 in
        -R | --reset)
            confirm "Remove all files/folders except .updater/ and run.sh?"
            echo "Removing..."
            shopt -s dotglob
            rm -rf !(run.sh|.updater)
            shopt -u dotglob
            echo "Done."
            exit 2
        ;;
        --reset-hard)
            confirm "Remove all files/folders except run.sh?"
            echo "Removing..."
            shopt -s dotglob
            rm -rf !(run.sh)
            shopt -u dotglob
            echo "Done."
            exit 2
        ;;
        -A | --arch)
            shift
            ARCH=$1
        ;;
        -V | --version)
            shift
            VERSION=$1
        ;;
        --no-start)
            NO_START="true"
        ;;
        -h | --help)
            echo "========================Help Menu========================"
            echo "-R,--reset        Resets the server directory leaving only"
            echo "                  this script and the .updater/ directory"
            echo "--reset-hard      Resets the server directory leaving only"
            echo "                  this script"
            echo "-A,--arch <A>     Sets the server architecture"
            echo "                  currently one of: paper, spigot, craftbukkit, vanilla"
            echo "-V,--version <V>  Sets the server version"
            echo "                  paper, spigot, craftbukkit must have a numerical version number"
            echo "                  vanilla supports snapshot alphanumbers"
            echo "--no-start        Does not start the server once the update check process is complete"
            echo "-h,--help         Displays this menu"
            exit
        ;;
        *)
            echo "$1 is an invalid option!"
            exit
        ;;
    esac
    shift
done

BT_LAST_BUILD="https://hub.spigotmc.org/jenkins/job/BuildTools/lastBuild"
HELPER_API="https://mc-server-versions-api.glitch.me/"

SHOME=$(pwd)
DIR=".updater"
BT_DIR="$DIR/BuildTools"

function check_setup () {
    if [[ ! -e "$DIR" ]]; then
        if [[ -z $ARCH || -z $VERSION ]]; then
            echo "You must specify an architecture and version either as a command-line argument, or in the script itself!"
            exit 2
        fi
        mkdir "$DIR" > /dev/null 2>&1
        echo "$ARCH" > "$DIR/server.arch"
        echo "$VERSION" > "$DIR/server.version"
        echo "Created $DIR directory & files"
        return
    fi
    if [[ ! -e "$DIR/server.arch" ]]; then
        if [[ -z $ARCH ]]; then
            echo "Could not find a $DIR/server.arch file and you did not specify an arch though the command-line"
            exit 2
        fi
        echo "$ARCH" > "$DIR/server.arch"
        echo "Created $DIR/server.arch file"
    else
        ARCH=$(cat "$DIR/server.arch")
    fi
    if [[ ! -e "$DIR/server.version" ]]; then
        if [[ -z $VERSION ]]; then
            echo "Could not find a $DIR/server.version file and you did not specify an version though the command-line"
            exit 2
        fi
        echo "$VERSION" > "$DIR/server.version"
        echo "Created $DIR/server.version file"
    else
        VERSION=$(cat "$DIR/server.version")
    fi
}

function setup_buildtools () {
    if [[ ! -e "$BT_DIR" ]]; then
        mkdir "$BT_DIR" > /dev/null 2>&1
    fi
    # Check for buildtools.build file
    if [[ ! -e "$BT_DIR/buildtools.build" ]]; then
        get_latest_build buildtools > "$BT_DIR/buildtools.build"
    fi
    # Check for BuildTools.jar
    if [[ ! -e "$BT_DIR/BuildTools.jar" ]]; then
        echo "Downloading latest BuildTools.jar..."
        curl -# -o "$BT_DIR/BuildTools.jar" "$BT_LAST_BUILD/artifact/target/BuildTools.jar"
    fi
}

function check_update_buildtools () {
    local LATEST=$(get_latest_build buildtools)
    if [[ $LATEST > $(cat "$BT_DIR/buildtools.build") ]]; then
        echo "You have an outdated BuildTools.jar!"
        download_version buildtools $LATEST
    else
        echo "Your BuildTools.jar is up-to-date!"
    fi
    unset LATEST
}

function version_check () {
    local BUILD=$(get_latest_build $ARCH $VERSION)
    if [[ ! -e "$DIR/server.build" ]]; then
        echo "No server.build file found!"
        download_version $ARCH $VERSION $BUILD
    else
        echo "Found server.build file! Checking for update..."
        # Compare build numbers
        if (( $BUILD > `cat "./$DIR/server.build"` )); then
            echo "Your build is out of date!"
            printf "Download the update? [Y/n]: "
            read -n 1 RES
            printf "\n"
            if [[ ${RES/Y/y} == "y" ]]; then
                echo "Downloading..."
                download_version $ARCH $VERSION $BUILD
            else
                echo "Skipping update..."
            fi
        else
            echo "Your build is up to date!"
        fi
    fi
    unset BUILD
}

function download_version () {
    case $1 in
        "paper")
            echo "Downloading Paper v$2 build #$3..."
            curl "https://papermc.io/api/v2/projects/$1/versions/$2/builds/$3/downloads/$1-$2-$3.jar" -# -o "$1-$2.jar"
            echo "Finished downloading $1-$2.jar!"
            set_eula
        ;;
        "spigot" | "craftbukkit")
            setup_buildtools
            check_update_buildtools
            echo "Running BuildTools to get $1-$2.jar (this may take a while the first time)"
            cd "$BT_DIR"
            java -jar BuildTools.jar --rev $2 --compile $1
            cd "$SHOME"
            cp "$BT_DIR/$1-$2.jar" ./$1-$2.jar
            echo "Finished compiling $1-$2.jar!"
            set_eula
        ;;
        "vanilla")
            echo "Downloading Vanilla v$2..."
            curl $(curl -s $HELPER_API/vanilla/dl/$2) -# -o "$1-$2.jar"
            echo "Finished downloading $1-$2.jar!"
            set_eula
        ;;
        "buildtools")
            echo "Downloading latest BuildTools.jar..."
            curl -# -o "$BT_DIR/BuildTools.jar" "$BT_LAST_BUILD/artifact/target/BuildTools.jar"
            echo $2 > "$BT_DIR/buildtools.build"
            return 1
        ;;
    esac
    echo $3 > "$DIR/server.build"
    echo "Set build #$3 as server build in $DIR/server.build"
}

function set_eula () {
    echo "Creating eula.txt... By using this tool, you are indicating your agreement to Mojang's EULA (https://account.mojang.com/documents/minecraft_eula)"
    printf "#By changing the setting below to TRUE you are indicating your agreement to our EULA (https://account.mojang.com/documents/minecraft_eula).\n#Thu Mar 12 03:11:10 PDT 2020\neula=true" > eula.txt
}

function get_latest_build () {
    case $1 in
        "paper" | "waterfall")
            echo $(curl -s https://papermc.io/api/v2/projects/$1/versions/$2 | grep -E -o '[0-9]+' | tail -1)
        ;;
        "spigot" | "craftbukkit")
            echo $(curl -s "$HELPER_API/spigot/versions/$2")
        ;;
        "vanilla")
            echo -1
        ;;
        "buildtools")
            echo $(curl -s "$BT_LAST_BUILD/buildNumber")
        ;;
    esac
}

function trap_ctrlc () {
    printf "\nCancelling...\n"
    exit 2
}

# Catch ctrl+c
trap "trap_ctrlc" 2

check_setup

version_check


if [[ -z $NO_START ]]; then
    while true; do
        echo " _____ _            _    _            _     _          __    ___              _ _        "
        echo "|_   _| |          | |  | |          | |   | |        / _|  / _ \            | | |       "
        echo "  | | | |__   ___  | |  | | ___  _ __| | __| |   ___ | |_  / /_\ \_ __   ___ | | | ___   "
        echo "  | | | '_ \ / _ \ | |/\| |/ _ \| '__| |/ _\` |  / _ \|  _| |  _  | '_ \ / _ \| | |/ _ \ "
        echo "  | | | | | |  __/ \  /\  / (_) | |  | | (_| | | (_) | |   | | | | |_) | (_) | | | (_) | "
        echo "  \_/ |_| |_|\___|  \/  \/ \___/|_|  |_|\__,_|  \___/|_|   \_| |_/ .__/ \___/|_|_|\___/  "
        echo "                                                                 | |                     "
        echo "                                                                 |_|                     "
        echo "                                                                                         "
        echo "                                                                                         "
        echo "                                                                                         "
        echo "        _____                  _            _   _____                                    "
        echo "       /  ___|                (_)          | | /  ___|                                   "
        echo "       \ \`--. _   _ _ ____   _____   ____ _| | \ \`--.  ___ _ ____   _____ _ __         "
        echo "        \`--. \ | | | '__\ \ / / \ \ / / _\` | |  \`--. \/ _ \ '__\ \ / / _ \ '__|       "
        echo "       /\__/ / |_| | |   \ V /| |\ V / (_| | | /\__/ /  __/ |   \ V /  __/ |             "
        echo "       \____/ \__,_|_|    \_/ |_| \_/ \__,_|_| \____/ \___|_|    \_/ \___|_|             "
        echo "                                                                                         "
        echo "                                                                                         "
        echo "                                                                                         "
        echo "                        Setup made with ♥ by Slachy                                      "
        echo " "
        echo " "
        echo "Starting server..."
        java -Xms${Xms} -Xmx${Xmx} -XX:+UseG1GC -XX:+ParallelRefProcEnabled -XX:MaxGCPauseMillis=200 -XX:+UnlockExperimentalVMOptions -XX:+DisableExplicitGC -XX:+AlwaysPreTouch -XX:G1NewSizePercent=30 -XX:G1MaxNewSizePercent=40 -XX:G1HeapRegionSize=8M -XX:G1ReservePercent=20 -XX:G1HeapWastePercent=5 -XX:G1MixedGCCountTarget=4 -XX:InitiatingHeapOccupancyPercent=15 -XX:G1MixedGCLiveThresholdPercent=90 -XX:G1RSetUpdatingPauseTimePercent=5 -XX:SurvivorRatio=32 -XX:+PerfDisableSharedMem -XX:MaxTenuringThreshold=1 -Dusing.aikars.flags=https://mcflags.emc.gs -Daikars.new.flags=true -jar "${ARCH}-${VERSION}.jar" nogui
        read -n 1 -e -r -s -p "Press any key to launch Apollo Survival."
    done
    
fi