@props(['href','title','activeRoute'])

<li class="relative group">
    <a href="{{$href}}" class="{{ request()->routeIs($activeRoute) ? 'text-accent-400' : 'text-fontLight' }}  xl:uppercase hover:text-accent-400 duration-500 text-2xl xl:text-sm font-extralight xl:font-light xl:tracking-wider">
        {{$title}}
    </a>

    {{$slot}}
</li>

