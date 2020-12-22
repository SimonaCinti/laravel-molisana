@extends('layouts.main')

@section('content')

    <section class="container">
        <div class="cards flex wrap">
            @foreach ($cards as $card)
                <div class="card">
                    <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
                    <h3>{{ $card['titolo'] }}</h3>
                    <a href="#">Vedi Prodotto</a>
                </div>
            @endforeach
        </div>
    </section>

@endsection