@extends('layout.main')

@section('content')
<div class="container">
    <!-- <h1>Questo è il <span>Main</span>.</h1> -->
    @foreach ($products as $product)
        <div id="{{ $product['id'] }}" class="card">
            <div class="photo">
            <img class="photo-2" :src="frontImage" alt="name">
            <img class="photo-1" :src="backImage" alt="name">
            <!-- like -->
            <div class="heart" :class="{'liked': isInFavorites}">
                <i class="fa-solid fa-heart"></i>
            </div>
            <!-- /like -->
            <!-- sconto e eco -->
            <div class="details">
                <h4
                v-for="(badge, index) in badges"
                :key="index"
                :class="badge.type"
                >
                {{badge.value}}</h4
                >

            </div>
            <!-- /sconto e eco -->
            </div>

            <div class="info">
            <h3>{{ brand }}</h3>
            <h2>{{ name.toUpperCase() }}</h2>
            <strong class="sale">{{ price }}&euro;&nbsp;</strong> <!-- creare funzione che restituisca "price / 100 * product.badge.value" -->
            <span class="price">{{ price }}&euro;</span>
            </div>

        </div>
    @endforeach
</div>
@endsection
