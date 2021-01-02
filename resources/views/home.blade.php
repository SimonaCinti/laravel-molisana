@extends('layouts.main')

@section('content')
<!-- Pasta Lunga Section -->
<section class="type-section container">
    <h2>LE LUNGHE</h2>
    <div class="cards flex wrap">
        @foreach ($lunghe as $card)
        <div class="card">
            <a href="{{route('product', $card['id'])}}">
                <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
            </a>
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
            <a href="{{route('product', $card['id'])}}"> 
                <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
            </a>
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
            <a href="{{route('product', $card['id'])}}">
                <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
            </a>
        </div>        
        @endforeach
    </div>
</section>


@endsection