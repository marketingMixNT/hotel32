<header id="headerSecondary"
    class="fixed left-0 right-0 top-0 hidden xl:flex justify-between items-center px-5  py-3 bg-primary-400 duration-700 -translate-y-[100%]">

    {{-- logo --}}
    <a href="{{route('home')}}" aria-label="strona główna"
        class="absolute xl:relative left-1/2 xl:left-auto top-1/2 xl:top-auto -translate-x-1/2 xl:-translate-x-0 -translate-y-1/2 xl:-translate-y-0">
        <img src="{{asset('assets/logo/logo.png')}}" alt="logo Hotelu 32 w Krakowie" class="w-20">
    </a>

    <div class="hidden xl:flex justify-center items-center gap-16">
        {{-- links --}}
        <x-header.desktop-nav-links />

        <x-link-btn href="/">Zarezerwuj</x-link-btn>
    </div>






</header>