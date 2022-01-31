<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

        @livewireStyles
    </head>
    <body>
        <div class="container">
            {{ $slot }}
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
        @livewireScripts
    </body>
</html>
