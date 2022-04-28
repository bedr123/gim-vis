<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/ucenici.css') }}">
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  <script src="https://kit.fontawesome.com/425dea2354.js" crossorigin="anonymous"></script>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />
  <title>Učenici | Gimnazija Visoko</title>
</head>
<body>

@include('layout.header')

    <div class="hero">
      <div class="naslov-box">
            <p class="naslov">Učenici Škole</p>
      </div>
    </div>

    <div class="main1">
      <div class="products">
        <div class="gallery-image">
          <p class="category">Talentovani učenici Gimnazije</p>
          @foreach($students as $student)
            <div class="img-box">
              <img src="{{ $student->slika }}" alt="" />
              <div class="transparent-box">
                <div class="caption">
                  <p>{{ $student->ime_i_prezime }}</p>
                  <p class="opacity-low">{{ $student->opis_posla }}</p>
                </div>
              </div>
            </div>
          @endforeach
        </div>
        <div class="gallery-image">
          <p class="category">Alumni Gimnazije</p>
          @foreach($students as $student)
            <div class="img-box">
              <img src="{{ $student->slika }}" alt="" />
              <div class="transparent-box">
                <div class="caption">
                  <p>{{ $student->ime_i_prezime }}</p>
                  <p class="opacity-low">{{ $student->opis_posla }}</p>
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