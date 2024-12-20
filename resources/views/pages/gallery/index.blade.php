<x-layouts.app title="{{$pageGallery->meta_title}}" description="{{$pageGallery->meta_desc}}">

    <x-layouts.app-wrapper :home="$home" :rooms="$rooms">


         {{-- HEADER --}}
         <x-banner title="{{$pageGallery->header_heading}}" subtitle="{{$home->title}}"
            bgi="{{asset('storage/' . $pageGallery->banner)}}" />

            <section class="py-20">
                <x-container class="max-w-[1600px]">
    
                    @if($pageGallery->heading && $pageGallery->text)
                    <x-heading-horizontal title="{{$pageGallery->heading}}" class="pb-32">
                        <x-text-wrapper>{!!$pageGallery->text!!}
                        </x-text-wrapper>
                    </x-heading-horizontal>
                    @endif
    
                    <div class="flex justify-center items-center gap-4 flex-wrap mb-12">
    
                        {{-- "All" Button --}}
                        <button class="border   px-8 py-3 uppercase text-xs duration-300 bg-primary-400   text-fontLight   gallery-btn filter-btn"
                            data-title="">
                            {{__('global.all')}}
                        </button>
    
                        {{-- Buttons to filter by title --}}
                        @foreach ($images as $image)
    
                        <button
                            class="filter-btn border   px-8 py-3 uppercase text-xs duration-300  bg-primary-400   text-fontLight"
                            data-title="{{ $image->category }}">
                            {{ $image->category }}
                        </button>
                        @endforeach
                    </div>
    
                    {{-- Container for filtered images --}}
                    <div class="grid  sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8" id="image-gallery">
                        @foreach ($images as $image)
                        @foreach ($image->images as $img)
                        <div class="w-full h-full object-cover image-item" data-title="{{ $image->category }}">
                            <a href="{{asset('storage/' .  $img)}}" class="glightbox">
    
                                <img src="{{asset('storage/' .  $img)}}"
                                    alt="zdjęcie przedstawiające {{ $image->title }} w hotelu Jan w Krakowie" loading="lazy"
                                    class="w-full object-cover aspect-square">
                            </a>
    
                        </div>
                        @endforeach
                        @endforeach
                    </div>
                </x-container>
            </section>

      
    </x-layouts.app-wrapper>
</x-layouts.app>