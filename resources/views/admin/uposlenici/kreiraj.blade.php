<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('administrator/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('administrator/vendor/owl-carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('administrator/vendor/owl-carousel/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('administrator/vendor/select2/css/select2.min.css') }}">
    <link href="{{ asset('administrator/vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
    <!-- Summernote -->
    <link href="{{ asset('administrator/vendor/summernote/summernote.css') }}" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('administrator/css/style.css') }}" rel="stylesheet">
    

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="./images/logo.png" alt="">
                <img class="logo-compact" src="./images/logo-text.png" alt="">
                <img class="brand-title" src="./images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <form method="POST" action="{{ route('logout') }}" class="dropdown-menu dropdown-menu-right">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Odjava</span>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

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

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
        <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Dodaj uposlenika</h4>
                            <span class="ml-1">Uposlenici</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Uposlenici</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Kreiraj</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">                    
                    <div class="col-xl-12 col-xxl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Unesi</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST" action="{{ config('app.url') . '/admin/uposlenici' }}" enctype='multipart/form-data'>
                                        @csrf
                                        <div class="form-group">
                                            <label for="" class="select2-container">
                                                Ime i prezime <br>

                                                <input type="text" name="ime_i_prezime" class="form-control input-default " placeholder="Ime i prezime profesora">
                                                @error('ime_i_prezime') <span class="text-danger">{{ $message }}</span> @enderror
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="select2-label select2-container">
                                                informacije <br>

                                                <textarea class="text-editor" name="informacije" id="" cols="30" rows="10"></textarea>
                                                @error('informacije') <span class="text-danger">{{ $message }}</span> @enderror
                                            </label>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="custom-file" class="select2-label select2-container">
                                                Slika <br>

                                                <div class="input-group mb-3">
                                                    <div class="custom-file">
                                                        <input type="file" name="slika" class="custom-file-input form-control input-default" id="custom-file">
                                                        <label class="custom-file-label">Izaberi fajl</label>
                                                    </div>
                                                </div>
                                                @error('slika') <span class="text-danger">{{ $message }}</span> @enderror
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label class="select2-label select2-container" for="id_label_single">
                                                Uloga <br>
            
                                                <select name="uloga" class="select2-with-label-single js-states d-block form-control input-default" id="id_label_single">
                                                    <option disabled selected value>izaberi ulogu</option>
                                                    <option value="uprava">Uprava</option>
                                                    <option value="profesori">Profesor</option>
                                                    <option value="tehnicko_osoblje">Tehnicko osoblje</option>
                                                </select>
                                                @error('uloga') <span class="text-danger">{{ $message }}</span> @enderror
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="select2-container">
                                                Opis posla <br>

                                                <input type="text" name="opis_posla" class="form-control input-default " placeholder="Unesite opis posla">
                                                @error('opis_posla') <span class="text-danger">{{ $message }}</span> @enderror
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label class="select2-label select2-container" for="id_label_single">
                                                Kategorija <br>
            
                                                <select name="kategorija" class="select2-with-label-single js-states d-block form-control input-default" id="id_label_single">
                                                    <option disabled selected value>izaberi kategoriju u koju spada uposlenik</option>
                                                    <option value="sadasnji_radnici">Sadasnji radnik</option>
                                                    <option value="pocasni_profesori">Pocasni profesor</option>
                                                </select>
                                                @error('kategorija') <span class="text-danger">{{ $message }}</span> @enderror
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-3">Dodaj</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
                <p>Distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a></p> 
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('administrator/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('administrator/js/quixnav-init.js') }}"></script>
    <script src="{{ asset('administrator/js/custom.min.js') }}"></script>


    <!-- Vectormap -->
    <script src="{{asset('administrator/vendor/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('administrator/vendor/morris/morris.min.js')}}"></script>


    <script src="{{asset('administrator/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('administrator/vendor/chart.js/Chart.bundle.min.js')}}"></script>

    <script src="{{asset('administrator/vendor/gaugeJS/dist/gauge.min.js')}}"></script>

    <!--  flot-chart js -->
    <script src="{{asset('administrator/vendor/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('administrator/vendor/flot/jquery.flot.resize.js')}}"></script>

    <!-- Owl Carousel -->
    <script src="{{asset('administrator/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

    <!-- Counter Up -->
    <script src="{{asset('administrator/vendor/jqvmap/js/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('administrator/vendor/jqvmap/js/jquery.vmap.usa.js')}}"></script>
    <script src="{{asset('administrator/vendor/jquery.counterup/jquery.counterup.min.js')}}"></script>


    <script src="{{ asset('administrator/js/dashboard/dashboard-1.js') }}"></script>

    <script src="{{ asset('administrator/vendor/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('administrator/js/plugins-init/select2-init.js') }}"></script>

    <!-- Summernote -->
    <script src="{{ asset('administrator/vendor/summernote/js/summernote.min.js') }}"></script>
    <!-- Summernote init -->
    <script src="{{ asset('administrator/js/plugins-init/summernote-init.js') }}"></script>

</body>

</html>