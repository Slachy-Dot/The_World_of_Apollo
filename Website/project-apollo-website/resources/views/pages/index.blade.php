@extends('layouts.app')

@section('content')

  <!--Online player and server name -->
  <section>
    <div class="mx-auto my-4 text-4xl text-center text-gray-200 md:container mt-28 mt-24:md group hover:text-blue-300 grow">
     The World of Apollo
    </div>
    <hr class="mx-auto" style="width:30%">
    <!--Online player counter-->
    <div class="grid grid-cols-1 p-2">
      <div class="my-4 text-xl text-center group grow place-self-center">
        <div class="p-2 text-indigo-300 bg-gray-500 rounded-lg group-hover:text-red-400">play with
          <span class="px-1 font-bold text-red-400 group-hover:text-blue-300" data-playercounter-ip="worldofapollo.com">0</span> other players on
          <span class="pl-1 font-medium text-red-400 group-hover:text-blue-300 class=" clipboard" data-clipboard-text="worldofapollo.com">worldofapollo.com</span>
        </div>
      </div>
    </div>
  </section>

  <section class="max-w-sm m-auto mt-32 bg-indigo-900 border-2 border-blue-400 border-opacity-75 rounded-lg shadow-2xl carousel md:max-w-xl">
    <div id="slide1" class="relative w-full carousel-item">
      <img loading=lazy src="../Assets/images/gallery/a/Apollo_a1.png" class="w-full">
      <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
        <a href="#slide5" class="btn btn-circle">❮</a>
        <a href="#slide2" class="btn btn-circle">❯</a>
      </div>
    </div>
    <div id="slide2" class="relative w-full carousel-item">
      <img loading=lazy src="./storage/images/gallery/b/Apollo_b2.jpg" class="w-full">
      <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
        <a href="#slide1" class="btn btn-circle">❮</a>
        <a href="#slide3" class="btn btn-circle">❯</a>
      </div>
    </div>
    <div id="slide3" class="relative w-full carousel-item">
      <img loading=lazy src="../Assets/images/gallery/b/Apollo_b3.jpg" class="w-full">
      <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
        <a href="#slide2" class="btn btn-circle">❮</a>
        <a href="#slide4" class="btn btn-circle">❯</a>
      </div>
    </div>
    <div id="slide4" class="relative w-full carousel-item">
      <img loading=lazy src="../Assets/images/gallery/b/Apollo_b4.jpg" class="w-full">
      <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
        <a href="#slide3" class="btn btn-circle">❮</a>
        <a href="#slide5" class="btn btn-circle">❯</a>
      </div>
    <div id="slide5" class="relative w-full carousel-item">
      <img loading=lazy src="../Assets/images/gallery/b/Apollo_b6.jpg" class="w-full">
      <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
        <a href="#slide4" class="btn btn-circle">❮</a>
        <a href="#slide1" class="btn btn-circle">❯</a>
      </div>
    </div>
  </div>
  </section>

  <section>
    <div id="about" class="my-card">
      <div class="px-2 mx-4 text-center">
        <h3 class="my-card-title">About us</h3>
        <hr class="h-px my-6 bg-gray-300 border-none">
        <h2 class="mx-4 ml-10 font-mono text-lg font-medium text-indigo-200">The World of Apollo </h2>
        <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">
          has been a active Minecraft Community for over 8 years! and we are proud to say that we have
          many players who call us home for more then 5 years! Our Community is what keeps Apollo running,
          though voluntary
        <a href="https://worldofapollo.enjin.com/donate" class="font-mono font-medium text-indigo-600 underline text-md">Donations</a>
         and there involvement in the community.</p>

        <p class="mx-4 my-2 ml-10 font-mono text-sm font-medium text-indigo-200">
          All server donations that are made by our community members will be used to pay for the monthly cost of the machine and the purchase of
          new plugins, Apollo won't provide any paid ranks or perks that gain something extra in-game or on our discord,
          we strongly believe that everyone should feel welcome. </p>
        <p class="mx-4 my-2 ml-10 font-mono text-sm font-medium text-indigo-200">
          Apollo has a voluntary staff team and is here to help you in there free time being disrespectful towards them will lead to a
          permanently ban from all Apollo related games and communication with our community members.</p>
      </div>
      <div tabindex="0" class="mx-2 mt-6 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> Server Hardware </div>
          <div class=" collapse-content">
            <h3 class="my-4 ml-10 text-left text-indigo-100">Cpu:</h3>
            <p class="mr-8 font-serif text-sm font-medium text-right text-indigo-200"> Amd Ryzen 3700.</p>
            <h3 class="my-4 ml-10 text-left text-indigo-100">System Memory: </h3>
            <p class="mr-8 font-serif text-sm font-medium text-right text-indigo-200">32gb ddr-4 </p>
            <h3 class="my-4 ml-10 text-left text-indigo-100">Storage: </h3>
            <p class="mr-8 font-serif text-sm font-medium text-right text-indigo-200"> 240gb ssd + 4tb hdd </p>
            <h3 class="my-4 ml-10 text-left text-indigo-100">os: </h3>
            <p class="mb-4 mr-8 font-serif text-sm font-medium text-right text-indigo-200"> Ubuntu 18.04 </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> Guest System </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">
              Come take a peek on our server with the Apollo Guest plugin witch let new members login while not be attacked by mobs or starve to
              death in there first couple moments, have a conversation with our online community & staff and explore there Minecraft builds </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> Guidelines </div>
          <div class="mx-4 font-mono font-medium text-blue-300 text-md collapse-content">
            <p class="my-2 ml-10 text-center list-disc">
            <hr class="h-px my-6 bg-gray-300 border-none">
            <h2 class="mx-4 my-4 font-medium text-center text-indigo-200 text-md font-base ml-15"> Apollo Discord </h2>
            <li>
              Using language or posting content which can be considered as racism, sexism, homophobia,
              transphobia, or any other type of hate speech, You are allowed to use profanity to an extent.
            </li>
            <li>
              Posting pornographic, distasteful, or excessively violent content.
            </li>
            <li>
              Spamming or excessively sending messages, including repeating questions or resending links too
              frequently.
            </li>
            <li>
              Formatting usernames to be difficult to read, to impersonate others, to advertise, or to be
              inappropriate.
            </li>
            <li>
              Anyone under the age of 18 will be banned from this discord server.
            </li>
            <li>
              Ban evading or helping someone to ban evade will result in permanent ban.
            </li>
            <li>
              We are a Gaming community keep Political or Religious discussions to a minimal
            </li>
            <li>
              Conversations should be kept to English
            </li>

            <hr class="h-px my-6 bg-gray-300 border-none">
            <h2 class="mx-4 my-4 font-medium text-center text-indigo-200 text-md font-base ml-15"> Apollo Minecraft </h2>
            <p class="mb-2"> The Discord Guidelines also apply in-game on top of that we have the following Rules.</p>
            <li>
              No Stealing & No Griefing
            </li>
            <li>
              No Anti-AFK Machines
            </li>
            <li>
              Transparent Texture Packs/x-ray are not allowed
            </li>
            <li>
              No mods or clients that give you an unfair advantage
            </li>
            <li>
              Consensual PVP only.
            </li>
            <li>
              Limit entities per chunk cluster to 300
            </li>
            <li>
              Claim and label all of your creations, including nether hub tunnels and shops
            </li>
            <li>
              Make an AWOL post if you expect to be offline for 60+ days
            </li>
            <li>
              Do not build anything inside the spawn chunks unless approved by an admin
            </li>
            <li>
              Refrain from building within clear sight of another project without approval.
            </li>
          </div>
        </div>
      </div>
  </section>

  <section>

    <div class="my-card">
      <h2 class="text-xl font-medium text-center text-white capitalize md:text-2xl grow">Apollo Staff team</h2>
      <hr class="h-px my-6 bg-gray-300 border-none">
      <div class="mt-1 font-medium text-center text-red-600">Administrator
      <hr class="h-px my-6 bg-gray-300 border-none">

    <div class="flex items-center justify-center">
      <div class="grid gap-8 mt-4 sm:grid-cols-1 lg:grid-cols-3 xl:grid-cols-3">
        <div class="text-center ">
          <img loading=lazy class="card-item-staff-img" src="https://minotar.net/avatar/Chipsanderson/100.png" alt="avatar" />
          <div class="mt-2">
            <h3 class="text-lg font-medium text-red-600">Chips</h3>
        </div>
    </div>

    <div class="text-center ">
      <img loading=lazy class="card-item-staff-img" src="https://minotar.net/avatar/Slachy_dot/100.png" alt="avatar" />
      <div class="mt-2">
        <h3 class="text-lg font-medium text-red-600">Slachy</h3>
      </div>
    </div>

    <div class="text-center ">
      <img loading=lazy class="card-item-staff-img" src="https://minotar.net/avatar/Rockzo/100.png" alt="avatar" />
      <div class="mt-2">
        <h3 class="text-lg font-medium text-red-600">Rockzo</h3>
      </div>
    </div>
      </div>
    </div>
    <div>
      <hr class="h-px my-6 bg-gray-300 border-none">
    <div class="mt-1 font-medium text-center text-blue-600">Moderator
      <hr class="h-px my-6 bg-gray-300 border-none">

    <div class="flex items-center justify-center">
      <div class="grid gap-8 mt-4 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2">
      <div class="text-center ">
        <img loading=lazy class="card-item-staff-img" src="https://minotar.net/avatar/stephayy/100.png" alt="avatar" />
        <div class="mt-2">
          <h3 class="text-lg font-medium text-blue-600">stephayy</h3>
        </div>
      </div>
    <div class="text-center ">
      <img loading=lazy class="card-item-staff-img" src="https://minotar.net/avatar/Candleliight/100.png" alt="avatar" />
      <div class="mt-2">
        <h3 class="text-lg font-medium text-blue-600">Candleliight</h3>
      </div>
    </div>
    <div class="text-center ">
      <img loading=lazy class="card-item-staff-img" src="https://minotar.net/avatar/QueenBrit/100.png" alt="avatar" />
      <div class="mt-2">
        <h3 class="text-lg font-medium text-blue-600"> QueenBrit </h3>
      </div>
    </div>
    <div class="text-center ">
      <img loading=lazy class="card-item-staff-img" src="https://minotar.net/avatar/Junedude602/100.png" alt="avatar" />
      <div class="mt-2">
        <h3 class="text-lg font-medium text-blue-600">Junedude</h3>
      </div>
    </div>
  </section>



@endsection


