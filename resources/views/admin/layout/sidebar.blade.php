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
            <li><a href="{{ config('app.url') . '/admin/kategorije' }}" aria-expanded="false"><i class="icon icon-globe-2"></i><span
                        class="nav-text">Kategorije</span></a></li>
            <li><a href="{{ config('app.url') . '/admin/novosti' }}" aria-expanded="false"><i class="icon icon-globe-2"></i><span
                        class="nav-text">Novosti</span></a></li>
            <li><a href="{{ config('app.url') . '/admin/uposlenici' }}" aria-expanded="false"><i class="icon icon-globe-2"></i><span
                        class="nav-text">Uposlenici</span></a></li>
            <li><a href="{{ config('app.url') . '/admin/ucenici' }}" aria-expanded="false"><i class="icon icon-globe-2"></i><span
                        class="nav-text">Učenici</span></a></li>
            <li><a href="{{ config('app.url') . '/admin/galerija' }}" aria-expanded="false"><i class="icon icon-globe-2"></i><span
                        class="nav-text">Učenici</span></a></li>
            <li class="nav-label">Forms</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-form"></i><span class="nav-text">Forms</span></a>
                <ul aria-expanded="false">
                    <li><a href="./form-element.html">Form Elements</a></li>
                    <li><a href="./form-wizard.html">Wizard</a></li>
                    <li><a href="./form-editor-summernote.html">Summernote</a></li>
                    <li><a href="form-pickers.html">Pickers</a></li>
                    <li><a href="form-validation-jquery.html">Jquery Validate</a></li>
                </ul>
            </li>
            <li class="nav-label">Table</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-layout-25"></i><span class="nav-text">Table</span></a>
                <ul aria-expanded="false">
                    <li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
                    <li><a href="table-datatable-basic.html">Datatable</a></li>
                </ul>
            </li>
            <li class="nav-label">Extra</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-single-copy-06"></i><span class="nav-text">Pages</span></a>
                <ul aria-expanded="false">
                    <li><a href="./page-register.html">Register</a></li>
                    <li><a href="./page-login.html">Login</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                        <ul aria-expanded="false">
                            <li><a href="./page-error-400.html">Error 400</a></li>
                            <li><a href="./page-error-403.html">Error 403</a></li>
                            <li><a href="./page-error-404.html">Error 404</a></li>
                            <li><a href="./page-error-500.html">Error 500</a></li>
                            <li><a href="./page-error-503.html">Error 503</a></li>
                        </ul>
                    </li>
                    <li><a href="./page-lock-screen.html">Lock Screen</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->