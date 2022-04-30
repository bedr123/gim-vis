<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gimnazija Visoko</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index-navbar.css') }}" />
    <link rel="icon" href="{{ asset('/assets/images/logo u boji.png') }}" />
    <script
      src="https://kit.fontawesome.com/7526d7a6e6.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>

  @include('layout.header')

    <!-- HEADER START -->
    <header class="header">
      <div class="header__slideshow-wrapper">
        <!-- SLIDER -->
        <div class="header__slideshow">
          <div class="slider-content" id="last-clone">
            <img class="header__slideshow-images" src="{{ $lastSlide->slika }}" alt="school">
            <div class="header__slideshow-info">
                <div class="info__box">
                    <a href="{{ $lastSlide->link }}" class="info__caption">{{ $lastSlide->naslov }}</a>
                    <a href="{{ $lastSlide->link }}" class="info__description">{{ $lastSlide->opis }}</a>
                </div>
                <div class="info__icon">
                  <img src="{{ asset('assets/images/logo bijeli.png') }}" alt="Gimnazija Visoko" />
                </div>
            </div>
          </div>
          @foreach($slides as $slide)
            <div class="slider-content">
              <img class="header__slideshow-images" src="{{ $slide->slika }}" alt="school">
              <div class="header__slideshow-info">
                  <div class="info__box">
                      <a href="{{ $slide->link }}" class="info__caption">{{ $slide->naslov }}</a>
                      <a href="{{ $slide->link }}" class="info__description">{{ $slide->opis }}</a>
                  </div>
                  <div class="info__icon">
                    <img src="{{ asset('assets/images/logo bijeli.png') }}" alt="Gimnazija Visoko" />
                  </div>
              </div>
            </div>
          @endforeach
          <div class="slider-content" id="first-clone">
            <img class="header__slideshow-images" src="{{ $firstSlide->slika }}" alt="school">
            <div class="header__slideshow-info">
                <div class="info__box">
                    <a href="{{ $firstSlide->link }}" class="info__caption">{{ $firstSlide->naslov }}</a>
                    <a href="{{ $firstSlide->link }}" class="info__description">{{ $firstSlide->opis }}</a>
                </div>
                <div class="info__icon">
                  <img src="{{ asset('assets/images/logo bijeli.png') }}" alt="Gimnazija Visoko" />
                </div>
            </div>
          </div>
        </div>
        <!-- SLIDER BUTTONS -->
        <i id="btn-left" class="fa-solid fa-angle-left"></i>
        <i id="btn-right" class="fa-solid fa-angle-right"></i>
      </div>
    </header>
    <!-- HEADER END -->

    <!-- SMJEROVI SECTION START -->
    <section class="smjerovi">
      <h1 class="heading">SMJEROVI</h1>
      <div class="smjerovi__container">
        @foreach($directions as $direction)
          <div class="smjerovi__box">
            <a href="{{ config('app.url') . '/smjerovi/' . $direction->slug }}">
              <img
                class="smjerovi__icon"
                src="{{ $direction->ikonica }}"
                alt=""
              />
              <div class="smjerovi__text-content">
                <h2>{{ $direction->naziv }}</h2>
              </div>
            </a>
          </div>
        @endforeach
      </div>
    </section>
    <!-- SMJEROVI SECTION END -->

    <!-- O SKOLI SECTION START -->
    <section class="about-us">
      <h1 class="heading">O gimnaziji</h1>
      <div class="about-info">
        <img src="./assets/images/gim-1.jpg" alt="gimnazija" />
        <div class="about-us-text">
          <p>
            Škola nosi naziv Gimnazija “Visoko”. Po tipu je svrstana u opće
            gimnazije za odgoj i obrazovanje učenika po općeobrazovnim
            programima. Plan i program Gimnazije ima općeobrazovni karakter koji
            treba da obezbjedi osnovu za optimalan razvoj učenika uvažavajući
            individualne razlike kako bi svaki učenik mogao ispoljiti i razviti
            svoje sklonosti i sposobnosti, razviti kritičko mišljenje, usvojiti
            nove načine sticanja znanja i ovladavanja novim tehnikama za rad na
            najnovijim tehnikama i metodama rada u nastavi. Predmetno-planska
            struktura Gimnazije omogućuje učenicima individualno opredjeljenje
            područja izučavanja: jezičko, društveno, prirodno,
            matematičko-informatičko i pedagoško, kroz koja će usavršavati i
            sticati znanja i sposobnosti za nastavak obrazovanja na
            visokoškolskim ustanovama.
          </p>
          <a href="{{ config('app.url') . '/o-skoli' }}" class="btn">Pročitaj Više</a>
        </div>
      </div>
    </section>
    <!-- O SKOLI SECTION END -->

    <!-- NOVOSTI SECTION START -->
    <section class="novosti">
      <h1 class="heading">NOVOSTI</h1>
      <div class="novosti__container">
        @foreach($posts as $post)
          <div class="novosti__box">
            <div class="novosti__image">
              <a href="{{ config('app.url') . '/novosti/' . $post->slug }}"><img src="{{ $post->thumb }}" /></a>
            </div>
            <div class="novosti__text-content">
              <h4>Novost</h4>
              <a href="{{ config('app.url') . '/novosti/' . $post->slug }}"
                >{{ $post->naslov }}</a
              >
            </div>
          </div>
        @endforeach
      </div>
    </section>
    <!-- NOVOSTI SECTION END -->

  @include('layout.footer')
  
  <script src="{{ asset('js/slider.js') }}"></script>
  <script src="{{ asset('js/index.js') }}"></script>
  </body>
</html>