<header id="header"
    class="fixed left-0 right-0 top-0 flex justify-between items-center  min-h-[80px] px-5 xl:px-10 py-4 bg-primary-400 duration-700 z-50">

    {{-- logo --}}
    <a href="{{route('home')}}" aria-label="strona główna"
        class="absolute xl:relative left-1/2 xl:left-auto top-1/2 xl:top-auto -translate-x-1/2 xl:-translate-x-0 -translate-y-1/2 xl:-translate-y-0">
        <img src="{{asset('storage/' .$home->logo)}}" alt="logo {{$home->title}}" class="w-24 xl:w-28">
    </a>

    <div class="hidden xl:flex justify-center items-center gap-16">
        {{-- links --}}
        <x-header.desktop-nav-links :rooms="$rooms"/>

        {{-- language switcher --}}
        <x-header.language-switcher />
    </div>

    {{-- mobile --}}
    <x-header.language-switcher class="xl:hidden" />
    <x-header.hamburger class="xl:hidden" />



</header>