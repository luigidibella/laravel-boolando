@extends('layout.main')

@section('content')
<div class="container">
    <!-- <h1>Questo è il <span>Main</span>.</h1> -->
    @foreach ($products as $product)
        <div id="{{ $product['id'] }}" class="card">
            <div class="photo">
            <img class="photo-2" src="{{ Vite::asset('resources/img/') . $product['frontImage'] }}" alt="{{ $product['name'] }}">
            <img class="photo-1" src="{{ Vite::asset('resources/img/') . $product['backImage'] }}" alt="{{ $product['name'] }}">
            <!-- like -->
            <div class="heart" class="{'liked': isInFavorites}">
                <i class="fa-solid fa-heart"></i>
            </div>
            <!-- /like -->
            <!-- sconto e eco -->
            <div class="details">
                @foreach ($product['badges'] as $badge )
                <h4 class="{{ $badge['type'] }}">{{ $badge['value'] }}</h4>
                @endforeach
            </div>
            <!-- /sconto e eco -->
            </div>

            <div class="info">
            <h3>{{ $product['brand'] }}</h3>
            <h2>{{ $product['name'] }}</h2>
            <strong class="sale">{{ $product['price'] }}&euro;&nbsp;</strong> <!-- creare funzione che restituisca "price / 100 * product.badge.value" -->
            <span class="price">{{ $product['price'] }}&euro;</span>
            </div>

        </div>
    @endforeach
</div>
@endsection
