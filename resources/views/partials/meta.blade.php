

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">

<meta name="keywords" content="Hotel w Krakowie, noclegi Kraków, apartamenty Kraków, pokoje hotelowe, rezerwacje hoteli, turystyka Kraków, komfortowe noclegi, wypoczynek w Krakowie, usługi hotelowe, atrakcje Kraków">


<meta name="author" content="Hotel 32">

@if ($noFollow)
<meta name="robots" content="noindex, nofollow">
@else
<meta name="robots" content="index, follow">
@endif

<link rel="canonical" href="{{ url()->current() }}" />

<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:url" content="https://hotel32.pl">
<meta property="og:type" content="website">
<meta property="og:image" content="{{asset('assets/images/rooms/deluxe/deluxe-4.webp')}}">