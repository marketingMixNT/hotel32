<x-layouts.app title="{{$pageContact->meta_title}}" description="{{$pageContact->meta_desc}}">

    <x-layouts.app-wrapper :home="$home" :rooms="$rooms">


        {{-- HEADER --}}
        <x-banner title="{{$pageContact->header_heading}}" subtitle="{{$home->title}}"
            bgi="{{asset('storage/' . $pageContact->banner)}}" />

            <section class="py-20">
               
                <x-container class="max-w-screen-xl ">
                    <x-heading>{{$pageContact->heading}}</x-heading>
                <!--CONTENT-->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 py-12 lg:py-24 ">
        
                    <div class="order-1 lg:order-none">
                        <x-title>{{$home->title}}</x-title>
                        <div class="grid sm:grid-cols-2 sm:grid-rows-2 gap-x-24 h-[80%]">
                    
                            <x-contact-box title="E-mail">
                                <a class="link-hover--dark text-xl font-light" href="mailto:{{$home->mail}}">{{$home->mail}}</a>
                            </x-contact-box>
                    
                            <x-contact-box title="{{__('contact.phone')}}">
                                <a class="link-hover--dark text-xl font-light mb-2" href="tel:+48 {{$home->phone}}">+48 {{$home->phone}}</a>
                                @if ($home->phone_second)
                                <a class="link-hover--dark text-xl font-light" href="tel:+48{{$home->phone_second}}">+48 {{$home->phone_second}}</a>
                                @endif
                                @if ($home->phone_third)
                                <a class="link-hover--dark text-xl font-light" href="tel:+48{{$home->phone_third}}">+48 {{$home->phone_third}}</a>
                                @endif
                            
                            </x-contact-box>
                    
                            <x-contact-box title="{{__('contact.address')}}">
                                <a class="link-hover--dark text-xl font-light" href="{{$home->map_link}}">{{$home->address}}<br>{{$home->city}}</a>
                            </x-contact-box>
                    
                            <x-contact-box title="Social Media">
                                <div class="flex justify-start  items-center gap-3">
                                @foreach ($home->socials as $social )
                           <x-socials :social="$social" dark />
                           @endforeach
                                </div>
        
                              
                            </x-contact-box>
                    
                        </div>
                        
                        
                    </div>
        
                    
        
                    <livewire:contact-form/>
        </x-container>
        </section>

    </x-layouts.app-wrapper>
</x-layouts.app>