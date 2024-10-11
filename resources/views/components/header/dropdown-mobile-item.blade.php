@props(['href','activeRoute'])

<li class="mt-3 ml-8"><a href="{{$href}}" class="{{ request()->routeIs($activeRoute) ? 'text-accent-400' : 'text-fontLight' }}  hover:text-accent-400 duration-500 font-extralight">{{$slot}}</a>
</li>