<nav>
    <ul class="flex justify-center items-center gap-10">

        <x-header.nav-item href="" activeRoute="">O nas</x-header.nav-item>
        {{-- dropddown --}}
        <x-header.nav-item-dropdown href="" activeRoute="" title="Nasze Pokoje">
            <x-header.dropdown>
                @foreach ($rooms as $room)
                <x-header.dropdown-item href="/" activeRoute="">{{$room->title}}</x-header.dropdown-item>
                @endforeach

            </x-header.dropdown>
        </x-header.nav-item-dropdown>

        <x-header.nav-item href="/" activeRoute=''>Restauracja</x-header.nav-item>
        <x-header.nav-item href="/" activeRoute=''>Transfery i wycieczki</x-header.nav-item>
        <x-header.nav-item href="/" activeRoute=''>Galeria</x-header.nav-item>
        <x-header.nav-item href="/" activeRoute=''>Lokalizacja</x-header.nav-item>
        <x-header.nav-item href="/" activeRoute=''>Kontakt</x-header.nav-item>
    </ul>
</nav>