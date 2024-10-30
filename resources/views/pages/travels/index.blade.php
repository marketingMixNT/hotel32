<x-layouts.app title="{{$pageTravels->meta_title}}" description="{{$pageTravels->meta_desc}}">

    <x-layouts.app-wrapper :home="$home" :rooms="$rooms">


         {{-- HEADER --}}
         <x-banner title="{{$pageTravels->header_heading}}" subtitle="{{$home->title}}"
            bgi="{{asset('storage/' . $pageTravels->banner)}}" />

      

        {{-- MAIN --}}
        <section class="py-20">
            <x-container class="max-w-screen-xl space-y-24">

                <x-heading>{{$pageTravels->heading}}</x-heading>

                <div class="space-y-6 pt-12">




                    @foreach ($pageTravels->pageTravelsBlocks as $block )
                   


                    <x-text-image-block 
                    img="{{ asset('storage/' . $block->image) }}" 
                    alt="zdjęcie przedstawiające miasto {{$home->city}}" 
                    mirrorLook="{{ $loop->iteration % 2 == 0 }}"
                >
                    {!! $block->text !!}
                </x-text-image-block>

                    @endforeach








                </div>
            </x-container>
        </section>
    </x-layouts.app-wrapper>
</x-layouts.app>