

@props(['cta'])

<section>
    <div class="relative  flex flex-col justify-center items-center gap-6 w-full sm:min-h-[600px] md:gap-12  px-6 md:px-12 py-20   bg-no-repeat bg-cover bg-center bg-blend-multiply bg-gray-500 text-fontLight"
        style="background-image: url('{{ asset('storage/' .$cta->image) }}')">
        {{-- text --}}
        <div class="max-w-screen-xl text-center  space-y-12">

            <h2
                class="text-center text-5xl 2xl:text-6xl  tracking-wider font-heading font-extralight text-fontWhite">
               {{$cta->title}}</h2>
            <x-text class="text-fontWhite ">{{$cta->subtitle}}</h2>
            </x-text>
        </div>
        {{-- btns --}}
        <div id="wis2-panel" class="js-wis2-panel" style="position: relative;"><div class="wis2-panel wis2-panel--horizontal">								<div class="wis2-el wis2-button-hld">	<a href="#" class="wis2-button wis2-button--primary js-wis2-open-booking" id="wis2-open-booking">Sprawdź termin</a></div>										<div class="js-wis2-mixpicker" id="wis2-mixpicker" data-checkin="2024-10-29" data-checkout="2024-10-30"></div><div class="wis2-el wis2-input-group">	<div class="wis2-label">Przyjazd</div>	<div class="wis2-input wis2-input--icon mixpicker-trigger js-wis2-checkin" id="wis2-checkin">29 paź 2024</div></div><div class="wis2-el wis2-input-group">	<div class="wis2-label">Wyjazd</div>	<div class="wis2-input wis2-input--icon mixpicker-trigger js-wis2-checkout" id="wis2-checkout">30 paź 2024</div></div>			</div></div>
      

    </div>
</section>