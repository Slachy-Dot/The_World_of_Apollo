<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Apollo">
    <meta name="description" content="World of Apollo minecraft">
    <meta name="keywords" content="world of apollo">
    <meta name="robots" content="index, nofollow">
    <meta name="revisit-after" content="60 days">
    <meta name="author" content="Slachy_dot">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script>
      fetch('https://api.mcsrvstat.us/2/Worldofapollo.com')
        .then(response => response.json())
        .then(data => {
          console.log(data.players.list)
          let pList = document.getElementById('list')
          pList.innerText = data.players.list
          //display some data on page
          //using data.players.list

        });
    </script>



  </head>

  <!--Web background-->
  <body style="background-image: url(./storage/images/main/background.jpg);" class="min-h-screen bg-cover lg:">
    <div id="app">
        @include('Includes.navbar')
        <div class="container">
            @include('Includes.messages')
            @yield('content')
        </div>
    </div>

 <div class="mt-20"></div>

        <footer class="bg-transparent">
            <div class="container px-6 py-4 mx-auto">
                <div class="lg:flex">
                    <div class="mt-6 lg:mt-0 lg:flex-1">
                        <div class="grid grid-cols-1 gap-2 sm:grid-cols-1 md:grid-cols-3">

                            <a href="#about" class="px-3 font-serif text-sm font-semibold text-gray-100 place-self-center hover:text-indigo-400"><i class="fab fa-discord"></i> About us</a>

                            <a href="https://www.youtube.com/channel/UC-SYHosAp--xCdRECjG-g7g"
                                class="px-3 font-serif text-sm font-semibold text-gray-100 place-self-center hover:text-indigo-400"><i
                                    class="fab fa-teamspeak"></i> youtube</a>

                            <a href="#"
                                class="px-3 font-serif text-sm font-semibold text-gray-100 place-self-center hover:text-indigo-400"><i
                                    class="fab fa-instagram"></i> Instagram</a>
                        </div>
                    </div>
                </div>

                <hr class="h-px my-6 bg-gray-300 border-none">

                <div>
                    <p class="text-center text-gray-100">© World of Apollo - All rights reserved</p>
                </div>
            </div>
        </footer>

  <script src="https://leonardosnt.github.io/mc-player-counter/dist/mc-player-counter.min.js"></script>
  </body>

</html>
