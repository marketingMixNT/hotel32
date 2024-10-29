<section class="py-16 bg-[#f2f2f2]">
    <x-container class="max-w-screen-2xl">
        <div class="grid justify-center sm:grid-cols-2 lg:grid-cols-5 gap-16 md:w-[75%] lg:w-full mx-auto">

            @foreach ($features as $feature)

            <x-feature-card title="{{$feature->title}}" text="{{$feature->description}}">
                <img src="{{'storage/'.$feature->icon}}" alt="{{$feature->title}}" class="w-20 ">
            </x-feature-card>

            @endforeach


        </div>
    </x-container>
</section>