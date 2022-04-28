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

    <div class="hero">
      <div class="naslov-box">
            <p class="naslov">Uposlenici Škole</p>
      </div>
    </div>

    <div class="main1">
        <div class="content-box">
            <div class="main-info-box">
                <img src="{{ asset('assets/images/gim-1.jpg') }}" alt="">
                <div class="main-info-text">
                    <h3>Ime i prezime</h3>
                    <p>Profesor fizike</p>
                </div>
            </div>
            <div class="main-content-box">
                <p>
                    HAHnjasdkh jahks dkasdhkjasdhjaksdh j  kshdkasj dh sdjs khdjkashdjaks dh
                </p>
            </div>
            <div>
                <div style="width: 500px; height: 300px; border: red 2px solid;"></div>
            </div>
        </div>
    </div>

  @include('layout.footer')
  <script src="{{ asset('js/index.js') }}"></script>
</body>
</html>