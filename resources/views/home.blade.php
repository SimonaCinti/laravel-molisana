@extends('layouts.main')

@section('content')

    <section class="container">
        <div class="cards">
            @foreach ($cards as $card)
                <div class="card">
                    <img src="{{ $card['src'] }}" alt="">
                    <h3></h3>
                    <a href="#">Vedi Prodotto</a>
                </div>
            @endforeach
        </div>
    </section>

@endsection