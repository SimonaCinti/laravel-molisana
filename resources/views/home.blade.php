@extends('layouts.main')

@section('content')
<!-- Pasta Lunga Section -->
<section class="type-section container">
    <h2>LE LUNGHE</h2>
    <div class="cards flex wrap">
        @foreach ($lunghe as $card)
        <div class="card">
            <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
            <h3>{{ $card['titolo'] }}</h3>
            <a href="#">Vedi Prodotto</a>
        </div>        
        @endforeach
    </div>
</section>
<!-- Pasta Corta Section -->
<section class="type-section container">
    <h2>LE CORTE</h2>
    <div class="cards flex wrap">
        @foreach ($corte as $card)
        <div class="card">
            <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
            <h3>{{ $card['titolo'] }}</h3>
            <a href="#">Vedi Prodotto</a>
        </div>        
        @endforeach
    </div>
</section>
<!-- Pasta Cortissima Section -->
<section class="type-section container">
    <h2>LE CORTISSIME</h2>
    <div class="cards flex wrap">
        @foreach ($cortissime as $card)
        <div class="card">
            <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
            <h3>{{ $card['titolo'] }}</h3>
            <a href="#">Vedi Prodotto</a>
        </div>        
        @endforeach
    </div>
</section>

    {{-- <section class="container">
        <div class="cards flex wrap">
            @foreach ($cards as $card)
                <div class="card">
                    <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
                    <h3>{{ $card['titolo'] }}</h3>
                    <a href="#">Vedi Prodotto</a>
                </div>
            @endforeach
        </div>
    </section> --}}

@endsection