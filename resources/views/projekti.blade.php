<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gimnazija Visoko | Projekti</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/projekti.css') }}" />
    <link rel="icon" href="{{ asset('/assets/images/logo u boji.png') }}" />
</head>
<body>

@include('layout.header')

<div class="hero">
      <h2 class="naslov">Projekti</h2>
  </div>

  <section class="projekti__section">
      <div class="projekti__container">
          <div class="projekti__card">
              <h4>PROJEKAT</h4>
              <h1>Eko Škola</h1>
          </div>
          <div class="projekti__card">
              <h4>PROJEKAT</h4>
              <h1>Projekat dva</h1>
          </div>
          <div class="projekti__card">
              <h4>PROJEKAT</h4>
              <h1>Projekat tri</h1>
          </div>
      </div>
  </section>

@include('layout.footer')
    
</body>
</html>