<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gimnazija Visoko | Sekcije</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <link rel="icon" href="{{ asset('/assets/images/logo u boji.png') }}" />
</head>
<body>

@include('layout.header')

<div class="hero">
      <h2 class="naslov">SEKCIJE</h2>
</div>

<section class="card-list__section">
      <div class="card-list__container">
          <div class="card-list__card">
              <h4>SEKCIJE</h4>
              <a href="#">Sekcija Jedan</a>
          </div>
          <div class="card-list__card">
              <h4>SEKCIJE</h4>
              <a href="#">Sekcija Dva</a>
          </div>
          <div class="card-list__card">
              <h4>SEKCIJE</h4>
              <a href="#">Sekcija Tri</a>
          </div>
      </div>
  </section>

@include('layout.footer')
    
</body>
</html>