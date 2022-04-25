<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/smjerovi.css') }}">
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  <script src="https://kit.fontawesome.com/425dea2354.js" crossorigin="anonymous"></script>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />
  <title>Document</title>
</head>
<body>
@include('layout.header')
  <div class="hero">
      <img class="hero-image" src="{{ asset('assets/images/gim-1.jpg') }}">
      <div class="naslov-box">
            <p class="naslov">{{ $direction->naziv }}</p>
      </div> 
  </div>
  <section class="about-section">   
    <div class="main">
      <h3>{{ $direction->naziv }}</h3>
      <div>
        {!! $direction->kontent !!}
      </div>
      @if(!$direction->images()->get()->isEmpty())
      <h3>Galerija</h3>

      <div class="card-body" style="display: grid; grid-template-columns: 1fr 1fr 1fr 1fr; grid-template-rows: auto; grid-gap: 10px;">
          @foreach($direction->images()->get() as $image)
          
              <div class="image-box" style="background-image: url({{ $image->thumb }})">
                  <div class="box-image"></div> 
              </div>
             
          @endforeach
      </div>
      @endif
    </div>
    
  </div>
  </section>
@include('layout.footer')
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/open-image.js') }}"></script>
</body>
</html>