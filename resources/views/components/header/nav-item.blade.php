@props(['href','activeRoute'])

{{-- <li><a href="{{$href}}" class="{{request()->routeIs($activeRoute) ?'text-accent-400' : 'text-fontLight ' }} group xl:uppercase group-hover:text-accent-400 duration-500 text-2xl  xl:text-sm font-extralight xl:font-light xl:tracking-wider relative">{{$slot}}</a></li> --}}

<li>

    <a href="{{$href}}" 
    class="{{ request()->routeIs($activeRoute) ? 'text-accent-400' : 'text-fontLight' }} 
    xl:uppercase hover:text-accent-400 duration-500 text-2xl xl:text-sm font-extralight 
    xl:font-light xl:tracking-wider relative group">
    {{$slot}}</a>
</li>