<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $post->naslov }} | Gimnazija Visoko</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/single-novosti.css') }}" />
    <link rel="icon" href="{{ asset('assets/images/logo u boji.png') }}" />
    <script
      src="https://kit.fontawesome.com/7526d7a6e6.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    @include('layout.header')

    <div class="hero">
    <div class="naslov-box">
          <p class="naslov">NOVOSTI</p>
    </div>
</div>
<div class="main">
  <div class="naslov">
    <h2>{{ $post->naslov }}</h2>
  </div>
  <div class="novosti-autor">
    <p><i class="fa-solid fa-clock"></i>{{ $post->created_at }}</p>
    <p><i class="fa-solid fa-user"></i>Autor: {{ $post->autor }}</p>
  </div>
  <div class="novosti-slika">
    <img src="{{ $post->slika }}">
  </div>
  <div class="novosti-text">
    <p>{!! $post->kontent !!}</p>
  </div>
</div>

    @include('layout.footer')

    <script src="{{ asset('js/index.js') }}"></script>
  </body>
</html>
