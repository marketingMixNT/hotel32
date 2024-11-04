<x-preloader :home="$home" />
<x-header.header :home="$home" :rooms="$rooms" />
<x-header.header-secondary :home="$home" :rooms="$rooms" />
<x-header.mobile-menu :home="$home" :rooms="$rooms" />

{{ $slot }}

<x-map :home="$home" />
<x-footer :home="$home" />
<x-mobile-buttons :home="$home" />

<x-scroll-to-top />

{{-- <script
    src="https://emaillabstracking.profitroom.com/click/?lt=aHR0cHM6Ly93aXMudXBwZXJib29raW5nLmNvbS9ob3RlbDMya3Jha293b2xkdG93bi9ib29raW5nP2xvY2FsZT1wbHxaV1JpYzI0eFlqWXdaVEV5WW1VMk5tTmxOell4WTJOa1pXWmpNR1JsTW1NeE9EZ3hOVGhoTldJeVpUUTNZalUzTTJGbU1qazJNbVUwWWpnM1ptRmxOVGhqT0dKbVgyUjFjVEZsWHpFNU1tUmpPRFk1WTJJMVFIcHZhRzlrWlhOckxtVjFmRmRsWkN3Z016QWdUMk4wSURJd01qUWdNRGs2TWpRNk1qSWdLekF4TURCOGJXRnlaV3N1WjJGalpXdEFiV0Z5YTJWMGFXNW5iV2w0TG5Cc2ZERXVjSEp2Wm1sMGNtOXZiUzV6YlhSd2ZISmxaR2R5YVdReE5Yd3dmREV1WlRNeU1UazNZMlkxWVRWalltSmxZakl5TTJGaE1ESTJZbVkwTW1Rd05XVT0="
    async=""></script> --}}


<script src="{{$home->booking_script}}{{ str_replace('_', '-', app()->getLocale()) }}" async></script> 

{{-- <script src="http://wis.upperbooking.com/hotel32krakowoldtown/be-panel?locale=pl" async></script> --}}