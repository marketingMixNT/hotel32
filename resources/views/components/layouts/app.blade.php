@props(['title', 'description', 'noFollow' => false])

<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth ">

<head>
    @include('partials.meta')
    @include('partials.fonts')
    @include('partials.favicon')

    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>



<body class="font-text bg-bgPrimary text-fontDark overflow-x-hidden">
    @include('partials.gtm')

    <x-preloader />
    <x-header.header />
    <x-header.header-secondary />
    <x-header.mobile-menu />



    {{ $slot }}

    <x-map />
    <x-footer />
    <x-mobile-buttons />

   <x-scroll-to-top />

  @include('partials.scripts')

</body>

</html>