

<x-layouts.app title="{{__('global.privacy-policy.meta-title')}}" description="{{__('global.privacy-policy.meta-desc')}}">

    <x-layouts.app-wrapper :home="$home" :rooms="$rooms">


         {{-- HEADER --}}
         <x-banner title="{{__('global.privacy-policy.header')}}" subtitle="{{$home->title}}"
            bgi="{{asset('storage/' . $pagePrivacyPolicy->banner)}}" />

      

        {{-- MAIN --}}
        <section class="py-20">
            <x-container class="max-w-screen-lg prose">
                {!! $pagePrivacyPolicy->content !!}





            </x-container>
        </section>
    </x-layouts.app-wrapper>
</x-layouts.app>