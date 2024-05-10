<?php

    $main = config('header-main');
    $social = config('header-social');

?>

<header>
    <div class="container">
      <nav>
        <ul>
        @foreach ($main as $item)
            <li>
                {{-- <a href="{{ url($item['href']) }}">{{ $item['text'] }}</a> --}}
                <a href="{{ route($item['name']) }}">{{ $item['text'] }}</a>
            </li>
        @endforeach
          <!-- <li><a href="#">Donna</a></li>
          <li><a href="#">Uomo</a></li>
          <li><a href="#">Bambini</a></li> -->
        </ul>
      </nav>
      <div class="logo">
        <img src="/img/boolean-logo.png" alt="logo">
      </div>
      <nav>
        <ul>
        @foreach ($social as $item)
            <li>
                <a href="{{ $item['href'] }}">{!! $item['text'] !!}</a>
            </li>
        @endforeach
          <!-- <li><a href="#"><i class="fa-regular fa-user"></i></a></li>
          <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
          <li><a href="#"><i class="fa-solid fa-bag-shopping"></i></a></li> -->
        </ul>
      </nav>
    </div>
  </header>
