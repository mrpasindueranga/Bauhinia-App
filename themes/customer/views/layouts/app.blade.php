<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css', 'themes/customer') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/themes/customer/css/slider.css">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js', 'themes/customer') }}" defer></script>
    <script src="/themes/customer/js/slider.js" defer></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
    @livewireStyles
</head>

<body class="font-sans antialiased relative">
    <div class="h-screen">
        <header style="height: 14%">
            @include("layouts.navigation")
        </header>
        <div style="background-color: #BB9449; height: 1%">
        </div>
        <!-- Page Content -->
        <main style="height: 85%">
            @yield('content')
        </main>
    </div>
    @livewireScripts
</body>

</html>
