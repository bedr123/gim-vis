<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/uposlenici.css') }}">
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  <script src="https://kit.fontawesome.com/425dea2354.js" crossorigin="anonymous"></script>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />
  <title>Uposlenici | Gimnazija Visoko</title>
</head>
<body>

@include('layout.header')

    <div class="main1">
      <div class="hero">
      <!--<img class="hero-image" src="{{ asset('assets/images/gim-1.jpg') }}">-->
      <div class="naslov-box">
            <p class="naslov">Uposlenici Škole</p>
      </div>
      </div>
      <div class="products">
        <p class="heading"></p>
        <div class="gallery-image">
          @foreach($employees as $employee)
            <div class="img-box">
              <img src="{{ $employee->slika }}" alt="" />
              <div class="transparent-box">
                <div class="caption">
                  <p>{{ $employee->ime_i_prezime }}</p>
                  <p class="opacity-low">{{ $employee->opis_posla }}</p>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
  </div>

  @include('layout.footer')
  <script src="{{ asset('js/index.js') }}"></script>
</body>
</html>