<!-- NAVBAR START -->
<nav class="navbar">
      <a href="{{ config('app.url') }}" class="logo">
        <img src="{{ asset('assets/images/logo u boji.png') }}" alt="logo" />
        <span class="logo-title"
          >Gimnazija <span class="logo-span">"Visoko"</span></span
        >
      </a>
      <ul class="navbar__container">
        <li class="navbar__item">
          <a class="item" href="{{ config('app.url') }}">Početna</a>
        </li>
        <li class="navbar__item">
          <a class="item" href=""
            >O školi</a
          >
          <ul class="dropdown">
            <li><a href="{{ config('app.url') . '/o-skoli' }}">O školi</a></li>
            <li><a href="{{ config('app.url') . '/historija' }}">Historijat škole</a></li>
            <li><a href="{{ config('app.url') . '/kodeks' }}">Kodeks</a></li>
            <li><a href="{{ config('app.url') . '/uposlenici' }}">Uposlenici</a></li>
            <li><a href="{{ config('app.url') . '/ucenici' }}">Učenici</a></li>
          </ul>
        </li>
        <li class="navbar__item">
          <a class="item" href=""
            >Nastava</a
          >
          <ul class="dropdown">
            <li><a href="#">Kalendar</a></li>
            <li><a href="#">Nastavni planovi</a></li>
            <li><a href="#">Raspored</a></li>
            <li><a href="#">Aktivi</a></li>
            <li><a href="#">Sekcije</a></li>
            <li><a href="#">Projekti</a></li>
          </ul>
        </li>
        <li class="navbar__item">
          <a class="item" href="{{ config('app.url') . '/novosti' }}"
            >Novosti</a
          >
        </li>
        <li class="navbar__item">
          <a class="item" href="{{ config('app.url') . '/kontakt' }}">Onilne upis</a>
        </li>
        <li class="navbar__item">
          <a class="item" href="{{ config('app.url') . '/kontakt' }}">Kontakt</a>
        </li>
      </ul>
      <div id="hamburger-menu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
      <div class="navbar__menu-container">
        <ul class="navbar__menu">
          <li class="navbar__item">
            <a class="item" href="index.html">Početna</a>
          </li>
          <li class="navbar__item">
            <a class="item" href=""
              >O školi</a
            >
            <ul class="dropdown">
              <li><a href="{{ config('app.url') . '/o-skoli' }}">O školi</a></li>
              <li><a href="{{ config('app.url') . '/historija' }}">Historijat škole</a></li>
              <li><a href="{{ config('app.url') . '/kodeks' }}">Kodeks</a></li>
            </ul>
          </li>
          <li class="navbar__item">
            <a class="item" href="#upis"
              >Upis</a
            >
            <ul class="dropdown">
              <li><a href="#">Lorem</a></li>
              <li><a href="#">Lorem</a></li>
              <li><a href="#">Lorem</a></li>
            </ul>
          </li>
          <li class="navbar__item">
            <a class="item" href="#upis"
              >Nastava</a
            >
            <ul class="dropdown">
              <li><a href="{{ config('app.url') . '/smjerovi' }}">Smjerovi</a></li>
              <li><a href="{{ config('app.url') . '/uposlenici' }}">uposlenici</a></li>
            </ul>
          </li>
          <li class="navbar__item">
            <a class="item" href="#novosti"
              >Novosti</a
            >
            <ul class="dropdown">
              <li><a href="#">Obavijesti</a></li>
              <li><a href="#">Intervju</a></li>
              <li><a href="#">Novosti</a></li>
            </ul>
          </li>
          <li class="navbar__item">
            <a class="item" href="{{ config('app.url') . '/kontakt' }}">Kontakt</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- NAVBAR END -->