<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gimnazija Visoko</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/novosti.css') }}" />
    <link rel="icon" href="{{ asset('assets/images/logo u boji.png') }}" />
    <script
      src="https://kit.fontawesome.com/7526d7a6e6.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    @include('layout.header')

    <div class="hero">
      <img class="hero-image" src="assets/images/gim-1.jpg">
      <div class="naslov-box">
            <p class="naslov">NOVOSTI</p>
      </div> 
    </div>

    <!-- NOVOSTI SECTION START -->
    <section class="novosti">
      <div class="novosti__container">
        <div class="novosti__box">
          <div class="novosti__image">
            <img src="../assets/images/slider-slika-2.jpg" /> 
          </div>
          
          <div class="novosti__text-content">
            <h4>INTERVJU</h4>
            <a href="#"
              >Bajden najavio žestoke sankcije Rusiji, ali poručio da SAD neće
              ratovati s Moskvom</a
            >
          </div>
        </div>
        <div class="novosti__box">
          <div class="novosti__image">
            <img src="../assets/images/slider-slika-2.jpg" /> 
          </div>
          <div class="novosti__text-content">
            <h4>INTERVJU</h4>
            <a href="#"
              >Bajden najavio žestoke sankcije Rusiji, ali poručio da SAD neće
              ratovati s Moskvom</a
            >
          </div>
        </div>
        <div class="novosti__box">
          <div class="novosti__image">
            <img src="../assets/images/slider-slika-2.jpg" /> 
          </div>
          <div class="novosti__text-content">
            <h4>INTERVJU</h4>
            <a href="#"
              >Bajden najavio žestoke sankcije Rusiji, ali poručio da SAD neće
              ratovati s Moskvom</a
            >
          </div>
        </div>
        <div class="novosti__box">
          <div class="novosti__image">
            <img src="../assets/images/slider-slika-2.jpg" /> 
          </div>
          <div class="novosti__text-content">
            <h4>INTERVJU</h4>
            <a href="#"
              >Bajden najavio žestoke sankcije Rusiji, ali poručio da SAD neće
              ratovati s Moskvom</a
            >
          </div>
        </div>
        <div class="novosti__box">
          <div class="novosti__image">
            <img src="../assets/images/slider-slika-2.jpg" /> 
          </div>
          <div class="novosti__text-content">
            <h4>INTERVJU</h4>
            <a href="#"
              >Bajden najavio žestoke sankcije Rusiji, ali poručio da SAD neće
              ratovati s Moskvom</a
            >
          </div>
        </div>
        <div class="novosti__box">
          <div class="novosti__image">
            <img src="../assets/images/slider-slika-2.jpg" /> 
          </div>
          <div class="novosti__text-content">
            <h4>INTERVJU</h4>
            <a href="#"
              >Bajden najavio žestoke sankcije Rusiji, ali poručio da SAD neće
              ratovati s Moskvom</a
            >
          </div>
        </div>
      </div>
    </section>
    <!-- NOVOSTI SECTION END -->

    @include('layout.footer')

    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
