@extends(' layouts.Wiki ')
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



  <section class="py-20 "> <!-- Wiki -->

  <div class="container px-4 mx-auto">
    <div class="max-w-lg mx-auto mb-12 text-center"></div>
         <!-- Wiki page center text above all cards-->

    <!-- Start of wiki cards-->
    <div class="flex flex-wrap mb-6 -mx-3">
      <div class="w-full px-3 mb-6 md:w-1/2 lg:w-1/3">
        <div class="p-8 bg-gray-900 bg-opacity-75 border border-opacity-75 rounded-lg shadow sm:px-2 md:max-w-lg">
          <div class="flex items-center mb-4">
            <!--wiki Card cover img-->
            <img class="object-cover w-16 h-16 mx-auto bg-opacity-100 rounded-full" src="./storage/images/misc/svg-alphabet/A.svg" alt="">

            <div class="pl-4">
        </div>
      </div>
      <!--wiki Card items-->
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

            </p>
          </div>
        </div>
      </div>
    </div>

      <!--
        New Wiki card
        -->

    <div class="w-full px-3 mb-6 md:w-1/2 lg:w-1/3">
      <div class="p-8 bg-gray-900 bg-opacity-75 border border-opacity-75 rounded-lg shadow sm:px-2 md:max-w-lg">
        <div class="flex items-center mb-4">
            <!--wiki Card cover img-->
          <img class="object-cover w-16 h-16 mx-auto bg-opacity-0 rounded-full" src="./storage/images/misc/svg-alphabet/B.svg" alt="">
          <div class="pl-4">
        </div>
      </div>
      <!--wiki Card items-->
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
        </div>
      </div>

      <!--
        New Wiki card
        -->

      <div class="w-full px-3 mb-6 md:w-1/2 lg:w-1/3">
        <div class="p-8 bg-gray-900 bg-opacity-75 border border-opacity-75 rounded-lg shadow sm:px-2 md:max-w-lg">
          <div class="flex items-center mb-4">
            <!--wiki Card cover img-->
            <img class="object-cover w-16 h-16 mx-auto bg-opacity-0 rounded-full" src="./storage/images/misc/svg-alphabet/C.svg" alt="">
            <div class="pl-4">
        </div>
      </div>
      <!--wiki Card items-->
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
        </div>
      </div>


            <!--
        New Wiki card
        -->

      <div class="w-full px-3 mb-6 md:w-1/2 lg:w-1/3">
        <div class="p-8 bg-gray-900 bg-opacity-75 border border-opacity-75 rounded-lg shadow sm:px-2 md:max-w-lg">
          <div class="flex items-center mb-4">
            <!--wiki Card cover img-->
            <img class="object-cover w-16 h-16 mx-auto bg-opacity-0 rounded-full" src="./storage/images/misc/svg-alphabet//D.svg" alt="">
            <div class="pl-4">
        </div>
      </div>
      <!--wiki Card items-->
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
        </div>
      </div>


            <!--
        New Wiki card
        -->

      <div class="w-full px-3 mb-6 md:w-1/2 lg:w-1/3">
        <div class="p-8 bg-gray-900 bg-opacity-75 border border-opacity-75 rounded-lg shadow sm:px-2 md:max-w-lg">
          <div class="flex items-center mb-4">
            <!--wiki Card cover img-->
            <img class="object-cover w-16 h-16 mx-auto bg-opacity-0 rounded-full" src="./storage/images/misc/svg-alphabet/E.svg" alt="">
            <div class="pl-4">
        </div>
      </div>
      <!--wiki Card items-->
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
        </div>
      </div>


            <!--
        New Wiki card
        -->

      <div class="w-full px-3 mb-6 md:w-1/2 lg:w-1/3">
        <div class="p-8 bg-gray-900 bg-opacity-75 border border-opacity-75 rounded-lg shadow sm:px-2 md:max-w-lg">
          <div class="flex items-center mb-4">
            <!--wiki Card cover img-->
            <img class="object-cover w-16 h-16 mx-auto bg-opacity-0 rounded-full" src="./storage/images/misc/svg-alphabet/F.svg" alt="">
            <div class="pl-4">
        </div>
      </div>
      <!--wiki Card items-->
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
        </div>
      </div>


            <!--
        New Wiki card
        -->

      <div class="w-full px-3 mb-6 md:w-1/2 lg:w-1/3">
        <div class="p-8 bg-gray-900 bg-opacity-75 border border-opacity-75 rounded-lg shadow sm:px-2 md:max-w-lg">
          <div class="flex items-center mb-4">
            <!--wiki Card cover img-->
            <img class="object-cover w-16 h-16 mx-auto bg-opacity-0 rounded-full" src="./storage/images/misc/svg-alphabet/G.svg" alt="">
            <div class="pl-4">
        </div>
      </div>
      <!--wiki Card items-->
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
        </div>
      </div>


            <!--
        New Wiki card
        -->

      <div class="w-full px-3 mb-6 md:w-1/2 lg:w-1/3">
        <div class="p-8 bg-gray-900 bg-opacity-75 border border-opacity-75 rounded-lg shadow sm:px-2 md:max-w-lg">
          <div class="flex items-center mb-4">
            <!--wiki Card cover img-->
            <img class="object-cover w-16 h-16 mx-auto bg-opacity-0 rounded-full" src="./storage/images/misc/svg-alphabet/H.svg" alt="">
            <div class="pl-4">
        </div>
      </div>
      <!--wiki Card items-->
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
        </div>
      </div>


            <!--
        New Wiki card
        -->

      <div class="w-full px-3 mb-6 md:w-1/2 lg:w-1/3">
        <div class="p-8 bg-gray-900 bg-opacity-75 border border-opacity-75 rounded-lg shadow sm:px-2 md:max-w-lg">
          <div class="flex items-center mb-4">
            <!--wiki Card cover img-->
            <img class="object-cover w-16 h-16 mx-auto bg-opacity-0 rounded-full" src="./storage/images/misc/svg-alphabet/I.svg" alt="">
            <div class="pl-4">
        </div>
      </div>
      <!--wiki Card items-->
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
        </div>
      </div>


            <!--
        New Wiki card
        -->

      <div class="w-full px-3 mb-6 md:w-1/2 lg:w-1/3">
        <div class="p-8 bg-gray-900 bg-opacity-75 border border-opacity-75 rounded-lg shadow sm:px-2 md:max-w-lg">
          <div class="flex items-center mb-4">
            <!--wiki Card cover img-->
            <img class="object-cover w-16 h-16 mx-auto bg-opacity-0 rounded-full" src="./storage/images/misc/svg-alphabet/J.svg" alt="">
            <div class="pl-4">
        </div>
      </div>
      <!--wiki Card items-->
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
        </div>
      </div>


            <!--
        New Wiki card
        -->

      <div class="w-full px-3 mb-6 md:w-1/2 lg:w-1/3">
        <div class="p-8 bg-gray-900 bg-opacity-75 border border-opacity-75 rounded-lg shadow sm:px-2 md:max-w-lg">
          <div class="flex items-center mb-4">
            <!--wiki Card cover img-->
            <img class="object-cover w-16 h-16 mx-auto bg-opacity-0 rounded-full" src="./storage/images/misc/svg-alphabet/K.svg" alt="">
            <div class="pl-4">
        </div>
      </div>
      <!--wiki Card items-->
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
        </div>
      </div>
      <!--
        New Wiki card
        -->

      <div class="w-full px-3 mb-6 md:w-1/2 lg:w-1/3">
        <div class="p-8 bg-gray-900 bg-opacity-75 border border-opacity-75 rounded-lg shadow sm:px-2 md:max-w-lg">
          <div class="flex items-center mb-4">
            <!--wiki Card cover img-->
            <img class="object-cover w-16 h-16 mx-auto bg-opacity-0 rounded-full" src="./storage/images/misc/svg-alphabet/L.svg" alt="">
            <div class="pl-4">
        </div>
      </div>
      <!--wiki Card items-->
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
        </div>
      </div>
      <!--
        New Wiki card
        -->

      <div class="w-full px-3 mb-6 md:w-1/2 lg:w-1/3">
        <div class="p-8 bg-gray-900 bg-opacity-75 border border-opacity-75 rounded-lg shadow sm:px-2 md:max-w-lg">
          <div class="flex items-center mb-4">
            <!--wiki Card cover img-->
            <img class="object-cover w-16 h-16 mx-auto bg-opacity-0 rounded-full" src="./storage/images/misc/svg-alphabet/M.svg" alt="">
            <div class="pl-4">
        </div>
      </div>
      <!--wiki Card items-->
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> Allowed mods </div>
          <div class="text-white collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium list-disc text-md">

              <li>
                Optifine
              </li>
              <li>
                Mini-Hud
              </li>
              <li>
                Mini-Map
              </li>
              <li>
              Fabric Mod-Loader
              </li>
              </ul>

              <!-- Card item -->
            </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
        </div>
      </div>
      <!--
        New Wiki card
        -->

      <div class="w-full px-3 mb-6 md:w-1/2 lg:w-1/3">
        <div class="p-8 bg-gray-900 bg-opacity-75 border border-opacity-75 rounded-lg shadow sm:px-2 md:max-w-lg">
          <div class="flex items-center mb-4">
            <!--wiki Card cover img-->
            <img class="object-cover w-16 h-16 mx-auto bg-opacity-0 rounded-full" src="./storage/images/misc/svg-alphabet/N.svg" alt="">
            <div class="pl-4">
        </div>
      </div>
      <!--wiki Card items-->
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
        </div>
      </div>
      <!--
        New Wiki card
        -->

      <div class="w-full px-3 mb-6 md:w-1/2 lg:w-1/3">
        <div class="p-8 bg-gray-900 bg-opacity-75 border border-opacity-75 rounded-lg shadow sm:px-2 md:max-w-lg">
          <div class="flex items-center mb-4">
            <!--wiki Card cover img-->
            <img class="object-cover w-16 h-16 mx-auto bg-opacity-0 rounded-full" src="./storage/images/misc/svg-alphabet/O.svg" alt="">
            <div class="pl-4">
        </div>
      </div>
      <!--wiki Card items-->
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
        </div>
      </div>

      <!--
        New Wiki card
        -->

      <div class="w-full px-3 mb-6 md:w-1/2 lg:w-1/3">
        <div class="p-8 bg-gray-900 bg-opacity-75 border border-opacity-75 rounded-lg shadow sm:px-2 md:max-w-lg">
          <div class="flex items-center mb-4">
            <!--wiki Card cover img-->
            <img class="object-cover w-16 h-16 mx-auto bg-opacity-0 rounded-full" src="./storage/images/misc/svg-alphabet/P.svg" alt="">
            <div class="pl-4">
        </div>
      </div>
      <!--wiki Card items-->
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
        </div>
      </div>

      <!--
        New Wiki card
        -->

      <div class="w-full px-3 mb-6 md:w-1/2 lg:w-1/3">
        <div class="p-8 bg-gray-900 bg-opacity-75 border border-opacity-75 rounded-lg shadow sm:px-2 md:max-w-lg">
          <div class="flex items-center mb-4">
            <!--wiki Card cover img-->
            <img class="object-cover w-16 h-16 mx-auto bg-opacity-0 rounded-full" src="./storage/images/misc/svg-alphabet/Q.svg" alt="">
            <div class="pl-4">
        </div>
      </div>
      <!--wiki Card items-->
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
        </div>
      </div>

      <!--
        New Wiki card
        -->

      <div class="w-full px-3 mb-6 md:w-1/2 lg:w-1/3">
        <div class="p-8 bg-gray-900 bg-opacity-75 border border-opacity-75 rounded-lg shadow sm:px-2 md:max-w-lg">
          <div class="flex items-center mb-4">
            <!--wiki Card cover img-->
            <img class="object-cover w-16 h-16 mx-auto bg-opacity-0 rounded-full" src="./storage/images/misc/svg-alphabet/R.svg" alt="">
            <div class="pl-4">
        </div>
      </div>
      <!--wiki Card items-->
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
        </div>

      </div>
      <!--
        New Wiki card
        -->

      <div class="w-full px-3 mb-6 md:w-1/2 lg:w-1/3">
        <div class="p-8 bg-gray-900 bg-opacity-75 border border-opacity-75 rounded-lg shadow sm:px-2 md:max-w-lg">
          <div class="flex items-center mb-4">
            <!--wiki Card cover img-->
            <img class="object-cover w-16 h-16 mx-auto bg-opacity-0 rounded-full" src="./storage/images/misc/svg-alphabet/S.svg" alt="">
            <div class="pl-4">
        </div>
      </div>
      <!--wiki Card items-->
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
        </div>
      </div>

      <!--
        New Wiki card
        -->

      <div class="w-full px-3 mb-6 md:w-1/2 lg:w-1/3">
        <div class="p-8 bg-gray-900 bg-opacity-75 border border-opacity-75 rounded-lg shadow sm:px-2 md:max-w-lg">
          <div class="flex items-center mb-4">
            <!--wiki Card cover img-->
            <img class="object-cover w-16 h-16 mx-auto bg-opacity-0 rounded-full" src="./storage/images/misc/svg-alphabet/T.svg" alt="">
            <div class="pl-4">
        </div>
      </div>
      <!--wiki Card items-->
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
        </div>
      </div>
      <!--
        New Wiki card
        -->

      <div class="w-full px-3 mb-6 md:w-1/2 lg:w-1/3">
        <div class="p-8 bg-gray-900 bg-opacity-75 border border-opacity-75 rounded-lg shadow sm:px-2 md:max-w-lg">
          <div class="flex items-center mb-4">
            <!--wiki Card cover img-->
            <img class="object-cover w-16 h-16 mx-auto bg-opacity-0 rounded-full" src="./storage/images/misc/svg-alphabet/U.svg" alt="">
            <div class="pl-4">
        </div>
      </div>
      <!--wiki Card items-->
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
        </div>
      </div>
      <!--
        New Wiki card
        -->

      <div class="w-full px-3 mb-6 md:w-1/2 lg:w-1/3">
        <div class="p-8 bg-gray-900 bg-opacity-75 border border-opacity-75 rounded-lg shadow sm:px-2 md:max-w-lg">
          <div class="flex items-center mb-4">
            <!--wiki Card cover img-->
            <img class="object-cover w-16 h-16 mx-auto bg-opacity-0 rounded-full" src="./storage/images/misc/svg-alphabet/V.svg" alt="">
            <div class="pl-4">
        </div>
      </div>
      <!--wiki Card items-->
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
        </div>
      </div>
            <!--
        New Wiki card
        -->

      <div class="w-full px-3 mb-6 md:w-1/2 lg:w-1/3">
        <div class="p-8 bg-gray-900 bg-opacity-75 border border-opacity-75 rounded-lg shadow sm:px-2 md:max-w-lg">
          <div class="flex items-center mb-4">
            <!--wiki Card cover img-->
            <img class="object-cover w-16 h-16 mx-auto bg-opacity-0 rounded-full" src="./storage/images/misc/svg-alphabet/W.svg" alt="">
            <div class="pl-4">
        </div>
      </div>
      <!--wiki Card items-->
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
        </div>
      </div>
            <!--
        New Wiki card
        -->

      <div class="w-full px-3 mb-6 md:w-1/2 lg:w-1/3">
        <div class="p-8 bg-gray-900 bg-opacity-75 border border-opacity-75 rounded-lg shadow sm:px-2 md:max-w-lg">
          <div class="flex items-center mb-4">
            <!--wiki Card cover img-->
            <img class="object-cover w-16 h-16 mx-auto bg-opacity-0 rounded-full" src="./storage/images/misc/svg-alphabet/X.svg" alt="">
            <div class="pl-4">
        </div>
      </div>
      <!--wiki Card items-->
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
        </div>
      </div>
      <!--
        New Wiki card
        -->

      <div class="w-full px-3 mb-6 md:w-1/2 lg:w-1/3">
        <div class="p-8 bg-gray-900 bg-opacity-75 border border-opacity-75 rounded-lg shadow sm:px-2 md:max-w-lg">
          <div class="flex items-center mb-4">
            <!--wiki Card cover img-->
            <img class="object-cover w-16 h-16 mx-auto bg-opacity-0 rounded-full" src="./storage/images/misc/svg-alphabet/Y.svg" alt="">
            <div class="pl-4">
        </div>
      </div>
      <!--wiki Card items-->
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
        </div>
      </div>
      <!--
        New Wiki card
        -->

      <div class="w-full px-3 mb-6 md:w-1/2 lg:w-1/3">
        <div class="p-8 bg-gray-900 bg-opacity-75 border border-opacity-75 rounded-lg shadow sm:px-2 md:max-w-lg">
          <div class="flex items-center mb-4">
            <!--wiki Card cover img-->
            <img class="object-cover w-16 h-16 mx-auto bg-opacity-0 rounded-full" src="./storage/images/misc/svg-alphabet/Z.svg" alt="">
            <div class="pl-4">
        </div>
      </div>
      <!--wiki Card items-->
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
      <div tabindex="0" class="mx-2 border collapse rounded-box border-base-300 collapse-arrow">
        <div class="text-xl font-extrabold text-center text-blue-300 collapse-title"> new tab </div>
          <div class="collapse-content">
            <p class="mx-4 my-2 ml-10 font-mono font-medium text-indigo-200 text-md">

              <!-- Card item -->

              </p>
          </div>
        </div>
        </div>
      </div>
    </div>
    <div class="text-center"><a class="inline-block px-8 py-4 text-xs font-semibold leading-none text-white bg-blue-600 rounded hover:bg-blue-700" href="#">Show more Testimonials</a></div>
  </div>
</section>




      <footer class="bg-transparent ">
        <div class="container px-6 py-4 mx-auto ">
          <div class=" lg:flex">
            <div class="mt-6 lg:mt-0 lg:flex-1">
              <div class="grid grid-cols-1 gap-2 sm:grid-cols-1 md:grid-cols-3">

                <a href="#" class="px-3 font-serif text-sm font-semibold text-gray-100 place-self-center hover:text-indigo-400"><i
                    class="fab fa-discord"></i> About us</a>

                <a href="https://www.youtube.com/channel/UC-SYHosAp--xCdRECjG-g7g"
                  class="px-3 font-serif text-sm font-semibold text-gray-100 place-self-center hover:text-indigo-400"><i
                    class="fab fa-teamspeak"></i> youtube</a>

                <a href="#" class="px-3 font-serif text-sm font-semibold text-gray-100 place-self-center hover:text-indigo-400"><i
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



      <!--Scripts-->
      <script src="https://leonardosnt.github.io/mc-player-counter/dist/mc-player-counter.min.js"></script>
      </body>

</html>
