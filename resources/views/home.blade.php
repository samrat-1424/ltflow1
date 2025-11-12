@php
    $logos = [
        'images/logos/cosmos-coop-bank.png',
        'images/logos/zoroastrian-co-op.png',
        'images/logos/shaan-finance.png',
        'images/logos/capwise.png',
        'images/logos/urban-money.png',
    ];
@endphp

@include('partials.logo-marquee', ['logos' => $logos])
