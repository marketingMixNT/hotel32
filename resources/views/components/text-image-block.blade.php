@props(['img', 'alt','mirrorLook'=>false])

<div class="grid grid-cols-2 gap-20">

    <div class="w-full {{$mirrorLook ? 'lg:order-1' : ''}}">
        <img src="{{$img}}" alt="{{$alt}}" class="w-full aspect-square object-cover shadow-xl">
    </div>

    <div
        class="w-full prose prose-headings:font-extralight prose-headings:text-3xl prose-p:text-base prose-p:font-extralight flex flex-col justify-center items-start prose-p:leading-loose">
        {{$slot}}
    </div>




</div>