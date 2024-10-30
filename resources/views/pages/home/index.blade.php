<x-layouts.app title="{{$home->meta_title}}" description="{{$home->meta_desc}}">

    <x-layouts.app-wrapper :home="$home" :rooms="$rooms">

        @include('pages.home.partials.hero-slider')


        @include('pages.home.partials.rooms')
        @include('pages.home.partials.features')
        @include('pages.home.partials.about')

        @if ($cta)
        <x-cta :cta="$cta" />
        @endif

        @include('pages.home.partials.restaurant')
        @include('pages.home.partials.testimonials')
        @include('pages.home.partials.travels')

    </x-layouts.app-wrapper>

</x-layouts.app>