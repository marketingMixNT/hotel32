<section id="o-nas" class="py-16 md:pt-16 md:pb-24 ">
    <x-container class="max-w-screen-xl space-y-24 ">


        <x-text-image-block img="{{asset('storage/' . $home->about_image_first)}}" alt="zdjęcie przedtawiające {{$home->title}}">
            {!!$home->about_text_first!!}
        </x-text-image-block>

        <x-text-image-block img="{{asset('storage/' . $home->about_image_second)}}" alt="zdjęcie przedtawiające {{$home->title}}" mirrorLook>
            {!!$home->about_text_second!!}
        </x-text-image-block>

       



    </x-container>
</section>