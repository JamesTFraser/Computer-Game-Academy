<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Computer Game Academy</title>
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    </head>
    <body class="text-secondary bg-primary">
        @include('layouts.header')
        @include('layouts.navigation')
        {{ $slot }}
        <div class="container">
            <p class="text-center">&copy; Computer Game Academy {{ now()->year }}. All rights reserved.</p>
        </div>
    </body>
</html>
