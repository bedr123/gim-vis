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
                            <h4>Uredi aktiv</h4>
                            <span class="ml-1">Aktivi</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Aktivi</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Uredi</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">                    
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Uredi</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST" action="{{ config('app.url') . '/admin/aktivi/' . $asset->id }}" enctype='multipart/form-data'>
                                        @method('PUT')
                                        @csrf
                                        <div class="form-group">
                                            <label for="" class="select2-container">
                                                Naziv <br>

                                                <input type="text" name="naziv" value="{{ $asset->naziv }}" class="form-control input-default " placeholder="Naziv aktiva">
                                                @error('naziv') <span class="text-danger">{{ $message }}</span> @enderror
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="select2-label select2-container">
                                                Kontent <br>

                                                <textarea class="text-editor" name="kontent" id="" cols="30" rows="10">
                                                    {!! $asset->kontent !!}
                                                </textarea>
                                                @error('kontent') <span class="text-danger">{{ $message }}</span> @enderror
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label class="select2-label select2-container" for="id_label_multiple">
                                                Predsjednik <br>
                                                             
                                                <select name="predsjednik" class="select2-with-label-multiple js-states form-control input-default" id="id_label_multiple">
                                                    @foreach($employees as $employee)
                                                        <option {{ $asset->admin->employee->id === $employee->id ? 'selected' : '' }} value="{{ $employee->id }}">{{ $employee->ime_i_prezime }}</option>
                                                    @endforeach
                                                </select>
                                                @error('predsjednik') <span class="text-danger">{{ $message }}</span> @enderror
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label class="select2-label select2-container" for="id_label_multiple1">
                                                ??lanovi <br>
                                                             
                                                <select name="clanovi[]" class="select2-with-label-multiple js-states form-control input-default" id="id_label_multiple1"
                                                    multiple="multiple">
                                                    @foreach($employees as $employee)
                                                        <option {{ $asset->members->where('id', $employee->id)->first() ? 'selected' : '' }} value="{{ $employee->id }}">{{ $employee->ime_i_prezime }}</option>
                                                    @endforeach
                                                </select>
                                                @error('clanovi') <span class="text-danger">{{ $message }}</span> @enderror
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-3">Spremi</button>
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
                <p>Copyright ?? Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
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