<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Novosti | Gimnazija Visoko</title>
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
      <div class="naslov-box">
            <p class="naslov">NOVOSTI</p>
      </div> 
    </div>

    <!-- NOVOSTI SECTION START -->
    <section class="novosti">
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

    <script src="{{ asset('js/index.js') }}"></script>
  </body>
</html>
