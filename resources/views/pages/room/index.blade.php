<x-layouts.app title="{{$pageRooms->meta_title}}" description="{{$pageRooms->meta_desc}}">

    <x-layouts.app-wrapper :home="$home" :rooms="$rooms">

        {{-- HEADER --}}
        <x-banner title="{{$pageRooms->header_heading}}" subtitle="{{$home->title}}"
            bgi="{{asset('storage/' . $pageRooms->banner)}}" />

            {{-- MAIN --}}
            <section class="py-10 lg:py-20">
                <x-container class="max-w-screen-2xl">
                    <div class="w-full mx-auto flex justify-center items-center lg:pb-20">
                        <x-heading-horizontal title="{{$pageRooms->heading}}">
                            <x-text-wrapper>{!!$pageRooms->text!!}</x-text-wrapper>
                        </x-heading-horizontal>
                    </div>
        
                    @foreach ($rooms as $room)
                    <x-room-card-horizontal :room='$room' :home="$home" />
                    @endforeach
        
                </x-container>
            </section>




    </x-layouts.app-wrapper>
</x-layouts.app>