<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/skola.css') }}">
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  <script
      src="https://kit.fontawesome.com/7526d7a6e6.js"
      crossorigin="anonymous"
    ></script>
  <title>O školi | Gimanzija Visoko</title>
</head>
<body>

@include('layout.header')

  <div class="hero">
      <img class="hero-image" src="assets/images/gim-1.jpg">
      <div class="naslov-box">
            <p class="naslov">O ŠKOLI</p>
      </div> 
  </div>

  <section class="about-section">   
    <div class="main">
        <h2>Općenito</h2>

        <p>Škola nosi naziv Gimnazija “Visoko”. Po tipu je svrstana u opće gimnazije za odgoj i obrazovanje učenika po općeobrazovnim programima.
           Plan i program Gimnazije ima općeobrazovni karakter koji treba da obezbjedi osnovu
             za optimalan razvoj učenika uvažavajući individualne razlike kako bi svaki učenik
              mogao ispoljiti i razviti svoje sklonosti i sposobnosti, razviti kritičko mišljenje,
               usvojiti nove načine sticanja znanja i ovladavanja novim tehnikama za rad na najnovijim tehnikama i metodama rada u nastavi.</p>

        <p>Predmetno-planska struktura Gimnazije omogućuje učenicima individualno opredjeljenje područja izučavanja:
           jezičko, društveno, prirodno, matematičko-informatičko i pedagoško,
            kroz koja će usavršavati i sticati znanja i sposobnosti
            za nastavak obrazovanja na visokoškolskim ustanovama.</p>

        <p>U okviru svojih djelatnosti Gimnazija za cilj ima proširivanje postojećih i sticanje novih znanja,
           vještina i navika, iz različitih oblasti kulture, umjetnosti, tehnike, tehnologije i sporta,
            razvijanje psiho-fizičkih sposobnosti učenika, osposobljavanje učenika da se služe jednim stranim jezikom
             i usvoje osnovna znanja drugog stranog jezika, latinskog jezika, a u jezičkom izbornom području i iz trećeg stranog jezika,
              razvijanje tjelesnih sposobnosti i usvajanje tehnika zdravog načina života i rada, osposobljavanje učenika
               za korištenje različitih izvora informacija, razvijanje kritičkog mišljenja i osjećaja odgovornosti,
                razvijanje ekološke kulture i opće kulture življenja, međusobnog uvažavanja
                 i poštovanja te čuvanja materijalnih i kulturnih vrijednosti kulturno-historijskog naslijeđa.</p>      
  </div>
  </section>

  @include('layout.footer')

  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>