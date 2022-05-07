<!--**********************************
    Sidebar start
***********************************-->
<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Glavni Meni</li>
            <li><a href="{{ route('dashboard') }}" aria-expanded="false"><i class="icon icon-single-04"></i><span
                        class="nav-text">Kontrolna tabla</span></a></li>                
            <li class="nav-label">Glavni Meni</li>
            <li><a href="{{ config('app.url') . '/admin/slajdovi' }}" aria-expanded="false"><i class="icon icon-globe-2"></i><span
                        class="nav-text">Slajdovi</span></a></li>
            <li><a href="{{ config('app.url') . '/admin/smjerovi' }}" aria-expanded="false"><i class="icon icon-globe-2"></i><span
                        class="nav-text">Smjerovi</span></a></li>
            <li><a href="{{ config('app.url') . '/admin/novosti' }}" aria-expanded="false"><i class="icon icon-globe-2"></i><span
                        class="nav-text">Novosti</span></a></li>
            <li><a href="{{ config('app.url') . '/admin/uposlenici' }}" aria-expanded="false"><i class="icon icon-globe-2"></i><span
                        class="nav-text">Uposlenici</span></a></li>
            <li><a href="{{ config('app.url') . '/admin/ucenici' }}" aria-expanded="false"><i class="icon icon-globe-2"></i><span
                        class="nav-text">Učenici</span></a></li>
            <li><a href="{{ config('app.url') . '/admin/galerija' }}" aria-expanded="false"><i class="icon icon-globe-2"></i><span
                        class="nav-text">Galerija</span></a></li>
        </ul>
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->