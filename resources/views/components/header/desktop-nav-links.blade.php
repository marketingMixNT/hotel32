<nav>
    <ul class="flex justify-center items-center gap-10">

        <x-header.nav-item href="{{route('about')}}" activeRoute="about">O nas</x-header.nav-item>
        {{-- dropddown --}}
        <x-header.nav-item-dropdown href="{{route('room.index')}}" activeRoute="room.index" title="Nasze Pokoje">
            <x-header.dropdown>
                @foreach ($rooms as $room)
                <x-header.dropdown-item href="{{route('room.show',$room->slug)}}" activeRoute="">{{$room->title}}</x-header.dropdown-item>
                @endforeach

            </x-header.dropdown>
        </x-header.nav-item-dropdown>

        <x-header.nav-item href="{{route('restaurant')}}" activeRoute='restaurant'>Restauracja</x-header.nav-item>
        <x-header.nav-item href="{{route('travels')}}" activeRoute='travels'>Transfery i wycieczki</x-header.nav-item>
        <x-header.nav-item href="{{route('gallery')}}" activeRoute='gallery'>Galeria</x-header.nav-item>
        <x-header.nav-item href="{{route('localization')}}" activeRoute='localization'>Lokalizacja</x-header.nav-item>
        <x-header.nav-item href="{{route('contact')}}" activeRoute='contact'>Kontakt</x-header.nav-item>
    </ul>
</nav>