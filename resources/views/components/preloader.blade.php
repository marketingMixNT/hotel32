@props(['home'])

<div id="preloader"
    class="fixed inset-0 flex flex-col justify-center items-center gap-y-1 bg-primary-400 transition-opacity duration-1000 ease-in-out"
    style="z-index: 1000000">

    <img src="{{ asset('storage/'. $home->logo) }}" alt="logo Hotelu Jan w Krakowie" width="96" height="50"
        class="w-[150px]  md:w-[200px]" />


</div>