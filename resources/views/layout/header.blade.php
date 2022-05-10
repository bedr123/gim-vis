<!-- NAVBAR START -->
<nav class="navbar">
      <a href="{{ config('app.url') }}" class="logo">
        <img src="{{ asset('assets/images/logo u boji.png') }}" alt="logo" />
        <span class="logo-title"
          >Gimnazija <span class="logo-span">"Visoko"</span></span>
      </a>
      <ul class="navbar__container">
        <li class="navbar__item">
          <a class="item" href="{{ config('app.url') }}">Početna</a>
        </li>
        <li class="navbar__item">
          <button class="item">O Školi</button>
          <ul class="dropdown">
            <li><a href="{{ config('app.url') . '/o-skoli' }}">O školi</a></li>
            <li><a href="{{ config('app.url') . '/historija' }}">Historijat škole</a></li>
            <li><a href="{{ config('app.url') . '/kodeks' }}">Kodeks</a></li>
            <!-- DROPDOWN IN DROPDOWN -->
            <li>
              <button class="nested-dropdown-item">Uposlenici</button>
              <ul class="nested-dropdown">
                <li><a href="{{ config('app.url') . '/uposlenici' }}">Sadašnji radnici</a></li>
                <li><a href="#">Počasni profesori</a></li>
              </ul>
            </li>
            <!-- DROPDOWN IN DROPDOWN -->
            <li>
              <button class="nested-dropdown-item">Učenici</button>
              <ul class="nested-dropdown">
                <li><a href="{{ config('app.url') . '/ucenici' }}">Talentovani učenici</a></li>
                <li><a href="#">Alumni Gimnazije</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="navbar__item">
          <button class="item">Nastava</button>
          <ul class="dropdown">
            <li><a href="{{ config('app.url') . '/kalendar' }}">Kalendar</a></li>
            <li><a href="{{ config('app.url') . '/planovi' }}">Nastavni planovi</a></li>
            <li><a href="{{ config('app.url') . '/raspored' }}">Raspored</a></li>
            <li><a href="{{ config('app.url') . '/aktivi' }}">Aktivi</a></li>
            <li><a href="{{ config('app.url') . '/sekcije' }}">Sekcije</a></li>
            <li><a href="{{ config('app.url') . '/projekti' }}">Projekti</a></li>
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
      <!-- HAMBURGER MENU -->
      <div id="hamburger-menu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
    </nav>
    <!-- NAVBAR END -->