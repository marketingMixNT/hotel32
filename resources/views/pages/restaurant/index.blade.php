<x-layouts.app title="{{$pageRestaurant->meta_title}}" description="{{$pageRestaurant->meta_desc}}">

    <x-layouts.app-wrapper :home="$home" :rooms="$rooms">


         {{-- HEADER --}}
         <x-banner title="{{$pageRestaurant->header_heading}}" subtitle="{{$home->title}}"
            bgi="{{asset('storage/' . $pageRestaurant->banner)}}" />

      

        {{-- MAIN --}}
        <section class="py-20">
            <x-container class="max-w-screen-xl space-y-24">

                <x-heading>{{$pageRestaurant->heading}}</x-heading>

                <div class="space-y-6 pt-12">




                    @foreach ($pageRestaurant->pageRestaurantBlocks as $block )
                   


                    <x-text-image-block 
                    img="{{ asset('storage/' . $block->image) }}" 
                    alt="" 
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