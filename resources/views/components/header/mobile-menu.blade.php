<div id="mobileMenu"
    class="fixed top-0 bottom-0 right-0 left-0 sm:left-1/2  flex flex-col justify-between px-7 py-5  bg-bgSecondary-800  opacity-0 duration-300 ease-out z-50 translate-x-[100%]">

    <div class="flex flex-col gap-16">

        {{-- close --}}
        <div class="flex justify-end">
            <button id="closeMenu" class="border border-white p-2 rounded-full cursor-pointer group">
                <img src="{{asset('assets/icons/close.svg')}}" alt=""
                    class="size-10 group-hover:rotate-90 duration-300">
            </button>
        </div>

        <nav>
            <ul class="flex flex-col justify-start items-start gap-5 pl-6">
                <x-header.nav-item href="{{route('about')}}" activeRoute="">O nas</x-header.nav-item>
                <x-header.nav-item href="/" activeRoute=''>Pokoje</x-header.nav-item>

<x-header.dropdown-mobile>
    @foreach ($rooms as $room)
    <x-header.dropdown-mobile-item href="{{route('room.show',$room->slug)}}" activeRoute="">{{$room->title}}</x-header.dropdown-mobile-item>
    @endforeach
  

</x-header.dropdown-mobile>

           
                <x-header.nav-item href="{{route('restaurant')}}" activeRoute='restaurant'>Restauracja</x-header.nav-item>
                <x-header.nav-item href="/" activeRoute=''>Transfery i wycieczki</x-header.nav-item>
                <x-header.nav-item href="/" activeRoute=''>Galeria</x-header.nav-item>
                <x-header.nav-item href="/" activeRoute=''>Lokalizacja</x-header.nav-item>
                <x-header.nav-item href="/" activeRoute=''>Kontakt</x-header.nav-item>
            </ul>
        </nav>
    </div>
    <div class="flex flex-col justify-end ">
        <hr class="mb-5">
        <x-header.language-switcher class="self-end" />
    </div>

</div>