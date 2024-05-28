<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="WEBSHOP TECHNOLOGY" />
    <link rel="icon" type="image/png" href="images/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') | {{ config('app.name', 'Cruzada Network International') }}</title>
    <meta name="description" content="The Bible is the foundation for Christianity. It contains the answers to all of life’s vital questions and changes the very lens of the worldview through which we view reality.">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'public/assets/css/vendors/swiper-bundle.min.css', 'public/assets/css/vendors/jos.css', 'public/assets/css/vendors/menu.css', 'public/assets/css/custom.css', 'public/assets/css/style.css'])
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}" type="image/x-icon" />
    <link rel="stylesheet" href="{{asset('assets/fonts/webfonts/poppins/stylesheet.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/fonts/webfonts/cabinet-grotesk/stylesheet.css')}}" />
</head>

<body class="page-wrapper relative bg-white">
    @livewire('header.menu')
    <main class="main-wrapper">
        @yield('main')
    @livewire('footer')

    </main>
    <script src="{{ asset('assets/js/vendors/counterup.js') }}" type="module"></script>
    <script src="{{ asset('assets/js/vendors/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/menu.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/fslightbox.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/jos.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/hero-element-move.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
