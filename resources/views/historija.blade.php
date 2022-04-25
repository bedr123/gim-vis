<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/historija.css') }}">
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  
  <script src="https://kit.fontawesome.com/425dea2354.js" crossorigin="anonymous"></script>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />
  <title>Historijat škole | Gimnazija Visoko</title>
</head>
<body>

  @include('layout.header')

  <div class="hero">
      <div class="naslov-box">
            <p class="naslov">HISTORIJAT ŠKOLE</p>
      </div>
  </div>

  <section class="about-section">  
    <div class="main">
        <h2>Historija</h2>

        <p>Gimnazija “Visoko” je nasljednik škola ovog tipa u Visokom:
             Franjevačke klasične gimnazije iz Drugog svjetskog rata i Gimnazije “Janko Balorda”
              koja je radila od 28. decembra 1945.godine u zgradi Franjevačke gimnazije.</p>

        <p>16.11.1968. otvorena je zgrada u kojoj se i danas nalazi Gimnazija “Visoko”.
             Gimnazija 22.12.1982. prelazi u novu zgradu SŠC “Janko Balorda”,
              u kojoj je danas smještena MSŠ “Hazim Šabanović”. Gimnazija je imala prekid u radu u periodu 1984-1991.
               godina zbog primjene usmjerenog obrazovanja. Školske 1991/92. godine ponovo je krenula sa radom,
                a od 1995/96. godine sa radom počinje Visočka klasična gimnazija..</p>

        <p>Visočka klasična gimnazija 9.9.1996. prelazi u adaptiranu zgradu nekadašnjeg SŠC “Janko Balorda”.
             Odlukom osnivača (Općine Visoko) od jula 1997. došlo je do povezivanja Visočke klasične gimnazije
              i Opće gimnazije,izdvajanjem iz Mješovite srednje škole “Hazim Šabanović”.
               Nastava se odvijala u dvije zgrade, u zgradi Gimnazije i u prizemlju MSŠ “Hazim Šabanović”.
                Od 1.9.1999. godine sva nastava se odvija u zgradi Gimnazije “VIsoko”. Gimnazija “Visoko”
                 je do sada ispratila 55 generacija.</p>
  </div>
  </section>

  @include('layout.footer')

  <script src="{{ asset('js/index.js') }}"></script>
</body>
</html>