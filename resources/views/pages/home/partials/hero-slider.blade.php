<div class="relative swiper hero-carousel  w-full h-[90vh]  md:h-screen ">
    <div class="swiper-wrapper">
        {{-- HEADING --}}

        <h1 class="absolute top-1/2 left-0 right-0 -translate-y-1/2 px-6 md:px-12 text-center text-4xl xs:text-5xl lg:text-7xl     font-heading  text-fontWhite  tracking-wide z-50 text-fontLight font-extralight"
            style="line-height: 1.2">
            {{$home->slider_title}} <br> <span class=" text-sm lg:text-2xl font-text ">
                {{$home->slider_subtitle}}</span>
        </h1>

        {{-- SLIDES --}}


        
        @foreach ($home->slider_images as $slide)


        {
        <div class="swiper-slide relative w-full h-full ">


            <img src="{{asset('storage/' .  $slide)}}" alt="{{$home->slider_title}}"
                class="absolute inset-0 w-full h-full object-cover " />

            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>
        }
        @endforeach


        {{-- RESERVATION PANEL --}}
         
        <div id="wis2-panel" class="js-wis2-panel" style="bottom: 120px"><div class="wis2-panel wis2-panel--horizontal">								<div class="wis2-el wis2-button-hld">	<a href="#" class="wis2-button wis2-button--primary js-wis2-open-booking" id="wis2-open-booking">Sprawdź termin</a></div>										<div class="js-wis2-mixpicker" id="wis2-mixpicker" data-checkin="2024-10-29" data-checkout="2024-10-30"></div><div class="wis2-el wis2-input-group">	<div class="wis2-label">Przyjazd</div>	<div class="wis2-input wis2-input--icon mixpicker-trigger js-wis2-checkin" id="wis2-checkin">29 paź 2024</div></div><div class="wis2-el wis2-input-group">	<div class="wis2-label">Wyjazd</div>	<div class="wis2-input wis2-input--icon mixpicker-trigger js-wis2-checkout" id="wis2-checkout">30 paź 2024</div></div>			</div></div>
    

        {{-- ANCHOR --}}
        <a href="#pokoje" class="absolute bottom-3  left-1/2 transform -translate-x-1/2 z-50"
            aria-label="Przejdź do sekcji o nas">

            <x-lucide-chevron-down class="animate-pulse w-6  text-white" />
        



        </a>
    </div>
</div>