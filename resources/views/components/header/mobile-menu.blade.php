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
                <x-header.nav-item href="" activeRoute="">O nas</x-header.nav-item>
                <x-header.nav-item href="/" activeRoute=''>Zarezerwuj</x-header.nav-item>

<x-header.dropdown-mobile>
    <x-header.dropdown-mobile-item href="#" activeRoute='home'>element 1</x-header.dropdown-mobile-item>
    <x-header.dropdown-mobile-item href="#" activeRoute=''>element 1</x-header.dropdown-mobile-item>
    <x-header.dropdown-mobile-item href="#" activeRoute=''>element 1</x-header.dropdown-mobile-item>
    <x-header.dropdown-mobile-item href="#" activeRoute=''>element 1</x-header.dropdown-mobile-item>

</x-header.dropdown-mobile>

           
                <x-header.nav-item href="/" activeRoute=''>Galeria</x-header.nav-item>
                <x-header.nav-item href="/" activeRoute=''>Dla inwestora</x-header.nav-item>
                <x-header.nav-item href="/" activeRoute=''>Sale konferencyjne</x-header.nav-item>
                <x-header.nav-item href="/" activeRoute=''>Kontakt</x-header.nav-item>
            </ul>
        </nav>
    </div>
    <div class="flex flex-col justify-end ">
        <hr class="mb-5">
        <x-header.language-switcher class="self-end" />
    </div>

</div>