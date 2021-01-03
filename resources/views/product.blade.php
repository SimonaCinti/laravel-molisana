@extends('layouts.main')

@section('content')

<section class="product-detail">
    <div class="navigation">
        @if($id > 0)
            <a href="{{route('product', $id - 1)}}"><i class="fas fa-chevron-left"></i></a>
        @elseif($id == 0)
            <a href="{{route('product', $length)}}"><i class="fas fa-chevron-left"></i></a>
        @endif
    </div>
    <div class="navigation">
        @if($id < $length )
            <a href="{{route('product', $id + 1)}}"> <i class="fas fa-chevron-right"></i></a>
        @elseif($id = $length)
            <a href="{{route('product', 0)}}"><i class="fas fa-chevron-right"></i> </a>
        @endif
    </div>
    <div class="container">
        <div class="hero">
            <h1>{{$product['titolo']}}</h1>
            <img src="{{$product['src-h']}}" alt="{{$product['titolo']}}">
            <img src="{{$product['src-p']}}" alt="{{$product['titolo']}}">
        </div>
        <div class="description">
            <p>{!! $product['descrizione'] !!}</p>
        </div>
    </div>
</section>

@endsection