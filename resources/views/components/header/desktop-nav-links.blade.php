<nav>
    <ul class="flex justify-center items-center gap-10">

        <x-header.nav-item href="" activeRoute="">O nas</x-header.nav-item>
        {{-- dropddown --}}
        <x-header.nav-item-dropdown href="" activeRoute="" title="Zarezerwuj">
            <x-header.dropdown>
                <x-header.dropdown-item href="/" activeRoute="">Apartament nr 1</x-header.dropdown-item>
                <x-header.dropdown-item href="/" activeRoute="">Apartament nr 2</x-header.dropdown-item>
                <x-header.dropdown-item href="/" activeRoute="">Apartament nr 3</x-header.dropdown-item>
                <x-header.dropdown-item href="/" activeRoute="">Apartament nr 4</x-header.dropdown-item>

            </x-header.dropdown>
        </x-header.nav-item-dropdown>

        <x-header.nav-item href="/" activeRoute=''>Galeria</x-header.nav-item>
        <x-header.nav-item href="/" activeRoute=''>Dla inwestora</x-header.nav-item>
        <x-header.nav-item href="/" activeRoute=''>Sale konferencyjne</x-header.nav-item>
        <x-header.nav-item href="/" activeRoute=''>Kontakt</x-header.nav-item>
    </ul>
</nav>