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
</head>

  <!--Web background-->

  <body style="background-image: url(./storage/images/main/background.jpg);" class="min-h-screen bg-cover lg:">

    <!--Navbar-->
    @include('Includes.Navbar')

  <!-- PLAYER HEADS AND TOOL NEWS -->

  <div class="container max-w-3xl px-4 py-8 mx-auto mt-20">
    <div class="bg-gray-700 border-4 border-blue-400 shadow-2xl">
      <img loading="lazy" alt="./photos/" src="./storage/images/misc/wander.jpg">

      <div
        class="px-5 pt-6 mx-auto mt-2 text-lg font-semibold text-center text-gray-800 bg-gray-300 border-l-2 border-gray-200 border-opacity-60">


        <h1>Obtain player heads from the wandering trader<span class="time">18-feb-2021</h1>
        <br>
        <ul class="font-mono text-base font-semibold">

          <p>You are now able to obtain <em class="italic text-indigo-400 ">Player Heads</em class="not-italic"> by
            trading with a natural spawned Wandering Trader.
            <span>There is a 80% chance that a wandering trader spawns with a <em class="italic text-indigo-400 ">Player
                Head Trade</em> plus there is a 40% chance of having muliple <em class="italic text-indigo-400 ">Player
                Heads Trades</em> in stock.
          </p>
          <br>

          <h1>Players that have not been online for 360 days will be automatically be removed from the wandering trader
            player head list.</h1>

          <br>
          <hr class="h-px my-6 bg-gray-600 border-none">
          <h1 class="text-lg font-semibold">New command to make linking nether portals easy</h1>

          <p class="italic text-indigo-400 ">/pcoords
            <span class="font-mono text-base font-semibold text-gray-800">- Shows the coordinates of the other world
              that a portal should be placed to link up with that location
          </p>

          <br>
          <hr class="h-px my-6 bg-gray-600 border-none">

          <h1 class="text-lg font-semibold">Redstone rotation & glazed terracotta rotation tool</h1>

          <p class="font-mono text-base font-semibold text-gray-800">
            With this brand new tool you are able to rotate redstone components and glazed terracotta this makes
            building farms or decoration even fun in most tricky situations.</p>
          <br>
          <p class="italic font-semibold text-red-500">Players that don't have build trust inside your claims wont be
            able to rotate you redstone components or glazed terracotta.</p>

          <br>

          <p class="italic font-semibold text-red-500">We are not using the included custom texture pack so actually
            this item looks like a carrot on a stick </p>
          <br>
          <p>
            <img class="mx-auto" loading="lazy" alt="./photos/Apollo-full"
              src="https://camo.githubusercontent.com/ab0195406a28a784e045f26ba91f540a2ed1d912db164f2971d20349aff3026f/68747470733a2f2f692e696d6775722e636f6d2f7a526b694a62422e706e67">
          </p>

          <br>
          <hr class="h-px my-6 bg-gray-600 border-none">

          <h1 class="text-lg font-semibold">Updated discord donation tag</h1>

          <p class="font-mono text-base font-semibold text-gray-800">
            All members that have made a previous donation will have a none purple Donator. tag </p>
          <br>
          <p>All members that will make a donation to World of Apollo this year will get a purple Donations_2021. tag
          </p>
          <br>
          <p>Giving a donation will not add any extra perms or higher rank its only a cosmetic tag to show someone
            has/is suporting world of apollo community.</p>
          <br>
          <p>We welcome all members to our server so don't feel bad if you are unable to make a donation we rather have
            you online more then anything else!!</p>
          <hr class="h-px my-6 bg-gray-600 border-none">

          <div class="flex items-center mt-8 mb-4 -ml-3 user">
            <div class="user-logo">
              <img class="object-cover w-10 h-10 mx-4 rounded-full shadow sm:w-12 sm:h-12"
                src="./storage/images/main/Apollo_logo.png" alt="avatar">
            </div>
            <p class="text-xl text-gray-500">@Slachy</p>
          </div>

          <div class="h-px my-0 border-none">
          </div>
      </div>
    </div>
  </div>

  <!-- START A NEW NEWS SECTION-->

  </section><!-- END OF NEWS PAGE-->
</body>
    @include('Includes.Footer')
</html>
