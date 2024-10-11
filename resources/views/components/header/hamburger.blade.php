@props(['class' => ''])

<button id="openMenu" class="flex flex-col gap-[10px] w-[60px] group p-2 cursor-pointer {{$class}}" aria-label="hamburger menu">
    <span class="w-full h-[1px] bg-fontLight group-hover:bg-accent-400 duration-500 origin-left transform group-hover:scale-x-50"></span>
    <span class="w-full h-[1px] bg-fontLight group-hover:bg-accent-400 duration-500"></span>
    <span class="w-full h-[1px] bg-fontLight group-hover:bg-accent-400 duration-500 origin-right transform group-hover:scale-x-50"></span>
</button>