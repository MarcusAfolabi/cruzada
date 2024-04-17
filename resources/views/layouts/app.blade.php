<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Cruzada Network International') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'public/css/plugins.css', 'public/css/style.css'])
    @livewireStyles
</head>

<body>
    <div class="body-inner">
        @livewire('header.menu')
        @yield('main')
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/functions.js"></script>

    @livewireScripts
</body>

</html>
