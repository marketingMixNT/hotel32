<section id="o-nas" class="py-16 md:py-20">
    <x-container class="max-w-screen-xl space-y-24 ">


        <x-text-image-block img="{{asset('storage/' . $home->restaurant_image_first)}}" alt="" >
            {!!$home->restaurant_text_first!!}
        </x-text-image-block>

        <x-text-image-block img="{{asset('storage/' . $home->restaurant_image_second)}}" alt="" mirrorLook>
            {!!$home->restaurant_text_second!!}
        </x-text-image-block>

       



    </x-container>
</section>