<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('administrator/images/favicon.png') }}">
    <link rel="stylesheet" href="{{asset('administrator/vendor/owl-carousel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{('administrator/vendor/owl-carousel/css/owl.theme.default.min.css')}}">
    <link href="{{asset('administrator/vendor/jqvmap/css/jqvmap.min.css')}}" rel="stylesheet">
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

        @include('admin/layout/header')

        @include('admin/layout/sidebar')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Uposlenici Gimnazije</h4>
                            <p class="mb-0">Dodaj nove uposlenike</p>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <a href="{{ config('app.url') . '/admin/uposlenici/kreiraj' }}"><button type="button" class="btn btn-rounded btn-primary pr-4"><span
                        class="btn-icon-left text-primary"><i class="fa fa-plus color-primary"></i></span>Dodaj uposlenika</button></a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">SVI UPOSLENICI</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Ime i prezime</th>
                                                <th>Slika</th>
                                                <th>Uloga</th>
                                                <th>Opis Posla</th>
                                                <th>Informacije</th>
                                                <th>Kategorija</th>
                                                <th>Akcije</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($employees as $employee)
                                                <tr>
                                                    <th>{{ $loop->index + 1 }}</th>
                                                    <th>{{ $employee->ime_i_prezime }}</th>
                                                    <th>
                                                        <img height="200px" src="{{ $employee->slika }}" />
                                                    </th>
                                                    <th>{{ $employee->uloga }}</th>
                                                    <th>{{ $employee->opis_posla }}</th>
                                                    <th>{!! $employee->informacije !!}</th>
                                                    <th>{{ $employee->kategorija }}</th>
                                                    <th class="d-flex flex-column align-items-start">
                                                        <a href="{{ config('app.url') . '/admin/uposlenici/' . $employee->id . '/uredi' }}"><button class="btn btn-success my-2">Uredi</button></a>
                                                        <form action="{{ config('app.url') . '/admin/uposlenici/' . $employee->id }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Obriši</button>
                                                        </form>
                                                    </th>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{ $employees->links('admin.pagination.pagination') }}
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
    <script src="{{asset('administrator/vendor/global/global.min.js')}}"></script>
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

</body>

</html>