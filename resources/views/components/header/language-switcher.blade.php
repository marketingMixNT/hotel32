@props(['class' => ''])

<ul id="languageSwitcher"
    class="justify-center items-center gap-5 list-none text-sm flex border px-[7px] py-[5px] {{$class}}">
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
    <li>
        <a rel="alternate" hreflang="{{ $localeCode }}"
            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
            class="relative uppercase hover:text-accent-400 duration-500 text-fontLight text-sm font-light tracking-wider {{ App::getLocale() === $localeCode ? ' before:absolute before:bottom-0 before:left-0 before:w-[70%] before:h-[1px] before:bg-accent-400 active' : '' }}">
            {{ strtoupper($localeCode) }}
        </a>
    </li>
    @endforeach
</ul>