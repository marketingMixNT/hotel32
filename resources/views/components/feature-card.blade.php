  <div class="bg-white flex flex-col gap-2 justify-center items-center  aspect-square h-full w-full sm:h-[270px] sm:w-[270px] relative duration-500 group p-4 text-center mx-auto">
    {{$slot}}
    <h2 class="text-sm uppercase tracking-widest">{{$title}}</h2>
  
    <button class="hidden sm:block absolute right-0 bottom-0 bg-primary-400  w-[50px] h-[50px] rounded-tl-full" aria-label="rozwiń opis"><x-lucide-plus class="w-6 absolute right-2 bottom-2.5 text-accent-400 "/>

    </button>
  
    <div class="hidden sm:flex absolute inset-0 bg-primary-400 feature-desc duration-500 opacity-0 clip-path-circle-0 group-hover:opacity-100 group-hover:clip-path-circle-full  justify-center items-center p-4 text-center text-fontLight">
        <p class="text-sm font-light leading-relaxed">{{$text}}</p>
    </div>
  </div>

  
  

