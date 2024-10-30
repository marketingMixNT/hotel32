<nav>
    <ul class="flex justify-center items-center gap-10">

        <x-header.nav-item href="{{route('about')}}" activeRoute="about">{{__('global.nav.1')}}</x-header.nav-item>
        {{-- dropddown --}}
        <x-header.nav-item-dropdown href="{{route('room.index')}}" activeRoute="room.index" title="{{__('global.nav.2')}}">
            <x-header.dropdown>
                @foreach ($rooms as $room)
                <x-header.dropdown-item href="{{route('room.show',$room->slug)}}" activeRoute="">{{$room->title}}</x-header.dropdown-item>
                @endforeach

            </x-header.dropdown>
        </x-header.nav-item-dropdown>

        <x-header.nav-item href="{{route('restaurant')}}" activeRoute='restaurant'>{{__('global.nav.3')}}</x-header.nav-item>
        <x-header.nav-item href="{{route('travels')}}" activeRoute='travels'>{{__('global.nav.4')}}</x-header.nav-item>
        <x-header.nav-item href="{{route('gallery')}}" activeRoute='gallery'>{{__('global.nav.5')}}</x-header.nav-item>
        <x-header.nav-item href="{{route('localization')}}" activeRoute='localization'>{{__('global.nav.6')}}</x-header.nav-item>
        <x-header.nav-item href="{{route('contact')}}" activeRoute='contact'>{{__('global.nav.7')}}</x-header.nav-item>
    </ul>
</nav>