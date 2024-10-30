<section class="pt-16 pb-24" id="{{__('global.anchor')}}">
    <x-container class="max-w-screen-2xl 2xl:px-12">



        <x-heading-horizontal title="{{$home->rooms_heading}}">


            <x-text-wrapper>{!!$home->rooms_text!!}</x-text-wrapper>


        </x-heading-horizontal>


        {{-- <div class="flex flex-col pt-12 "> --}}
            <div class="grid  xl:grid-cols-3 gap-x-16 pt-20 px-2 sm:w-[90%] md:w-[75%] lg:w-[60%] xl:w-full mx-auto">

                @foreach ($rooms as $room)

                <x-room-card :room="$room" :home="$home" />

                @endforeach

            </div>

    </x-container>
</section>