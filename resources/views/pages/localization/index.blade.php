<x-layouts.app title="{{$pageLocalization->meta_title}}" description="{{$pageLocalization->meta_desc}}">

    <x-layouts.app-wrapper :home="$home" :rooms="$rooms">


         {{-- HEADER --}}
         <x-banner title="{{$pageLocalization->header_heading}}" subtitle="{{$home->title}}"
            bgi="{{asset('storage/' . $pageLocalization->banner)}}" />

      

        {{-- MAIN --}}
        <section class="py-20">
            <x-container class="max-w-screen-xl space-y-24">

                <x-heading>{{$pageLocalization->heading}}</x-heading>

                <div class="space-y-6 pt-12">




                    @foreach ($pageLocalization->pageLocalizationBlocks as $block )
                   


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