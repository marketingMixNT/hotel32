<header id="headerSecondary"
    class="fixed left-0 right-0 top-0 hidden xl:flex justify-between items-center px-5  py-3 bg-primary-400 duration-700 -translate-y-[100%] z-50">

    {{-- logo --}}
    <a href="{{route('home')}}" aria-label="strona główna"
        class="absolute xl:relative left-1/2 xl:left-auto top-1/2 xl:top-auto -translate-x-1/2 xl:-translate-x-0 -translate-y-1/2 xl:-translate-y-0">
        <img src="{{asset('storage/' .$home->logo)}}" alt="logo {{$home->title}}" class="w-20">
    </a>

    <div class="hidden xl:flex justify-center items-center gap-16">
        {{-- links --}}
        <x-header.desktop-nav-links :rooms="$rooms"/>

        <x-link-btn href="{{$home->booking_link}}">{{__('global.book')}}</x-link-btn>
    </div>






</header>