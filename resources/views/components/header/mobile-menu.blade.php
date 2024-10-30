<div id="mobileMenu"
    class="fixed top-0 bottom-0 right-0 left-0 sm:left-1/2  flex flex-col justify-between px-7 py-5  bg-bgSecondary-800  opacity-0 duration-300 ease-out z-50 translate-x-[100%]" style="z-index: 10000000000">

    <div class="flex flex-col gap-16">

        {{-- close --}}
        <div class="flex justify-end">
            <button id="closeMenu" class="border border-white p-2 rounded-full cursor-pointer group" aria-label="Zamknij menu">
                <img src="{{asset('assets/icons/close.svg')}}" alt=""
                    class="size-10 group-hover:rotate-90 duration-300">
            </button>
        </div>

        <nav>
            <ul class="flex flex-col justify-start items-start gap-5 pl-6">
                <x-header.nav-item href="{{route('about')}}" activeRoute="about">{{__('global.nav.1')}}</x-header.nav-item>
               

<x-header.dropdown-mobile title="{{__('global.nav.2')}}">
    @foreach ($rooms as $room)
    <x-header.dropdown-mobile-item href="{{route('room.show',$room->slug)}}" activeRoute="">{{$room->title}}</x-header.dropdown-mobile-item>
    @endforeach
  

</x-header.dropdown-mobile>

           
                <x-header.nav-item href="{{route('restaurant')}}" activeRoute='restaurant'>{{__('global.nav.3')}}</x-header.nav-item>
                <x-header.nav-item href="{{route('travels')}}" activeRoute='travels'>{{__('global.nav.4')}}</x-header.nav-item>
                <x-header.nav-item href="{{route('gallery')}}" activeRoute='gallery'>{{__('global.nav.5')}}</x-header.nav-item>
                <x-header.nav-item href="{{route('localization')}}" activeRoute='localization'>{{__('global.nav.6')}}</x-header.nav-item>
                <x-header.nav-item href="{{route('contact')}}" activeRoute='contact'>{{__('global.nav.7')}}</x-header.nav-item>
            </ul>
        </nav>
    </div>
    <div class="flex flex-col justify-end ">
        <hr class="mb-5">
        <x-header.language-switcher class="self-end" />
    </div>

</div>