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
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>


    </head>



    <!--Web background-->

    <body style="background-image: url(/storage/images/main/background.jpg);" class="min-h-screen bg-cover lg:">



        <div id="app">

            <div class="container">

                @yield('content')

            </div>
        </div>


        <div class="mt-20"></div>

    @extends('Includes.Footer')

        <script src="https://leonardosnt.github.io/mc-player-counter/dist/mc-player-counter.min.js"></script>
    </body>
</html>
