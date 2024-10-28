<section id="o-nas" class="pt-0 md:py-16 ">
    <x-container class="max-w-screen-xl space-y-24 ">


        <x-text-image-block img="{{asset('storage/' . $home->about_images_first)}}" alt="">
            {!!$home->about_text_first!!}
        </x-text-image-block>

        <x-text-image-block img="{{asset('storage/' . $home->about_text_second)}}" alt="" mirrorLook>
            {!!$home->about_text_second!!}
        </x-text-image-block>

       



    </x-container>
</section>