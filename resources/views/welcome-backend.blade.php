<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Inicio | PV Fácil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">

    <!-- Bootstrap css -->
    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <link href="{{ asset('backend/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />
    <!-- icons -->
    <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Head js -->
    <script src="{{ asset('backend/assets/js/head.js') }}"></script>

</head>

<body class="authentication-bg authentication-bg-pattern">

    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">

                    <div class="card bg-pattern">

                        <div class="card-body">

                            <div class="p-3">

                                <form class="form-horizontal mt-3">

                                    <div class="text-center mt-3">

                                        {{-- Imagen que representa este proyecto --}}
                                        <div class="">
                                            <a href="{{ route('home') }}">
                                                <img src="{{ asset('logo/web_dev_image.png') }}" class="rounded-circle"
                                                    alt="thumbnail" width="150px">
                                            </a>
                                        </div>

                                        {{-- Titulo --}}
                                        <div class="mt-3">
                                            <h5 class="mb-1">
                                                {{ __('Full Stack Web Developer') }} | TJ Web Start Kit
                                            </h5>
                                        </div>
                                        
                                    </div>

                                    {{-- si el usuario ya ha iniciado sesión --}}
                                    @if (Auth::check())
                                        <div class="form-group mt-4 mb-0 row">
                                            <div class="col-12 text-center">

                                                <p class="text-white-50">
                                                    {{ __('The user') }}: {{ Auth::user()->name }},
                                                    {{ __('is already logged in!') }}
                                                </p>

                                                <span class="text-muted">
                                                    <i
                                                        class="ri-record-circle-line align-middle font-size-14 text-success"></i>
                                                    {{ __('You are logged in!') }}
                                                </span>
                                                <br>
                                                <br>

                                                <a href="{{ route('dashboard') }}" class="btn btn-success">
                                                    {{ __('Continue to dashboard') }}
                                                </a>
                                            </div>
                                        </div>
                                    @endif

                                    {{-- Botón Login --}}
                                    {{-- La ruta del login esta definida en el archivo app/Providers/RouteServiceProvider.php HOME --}}
                                    <div class="form-group text-center row mt-3">
                                        <div class="col-12">
                                            @if (Auth::check())
                                            @else
                                                <a href="{{ route('login') }}"
                                                    class="btn btn-info w-100 waves-effect waves-light">
                                                    {{ __('Login') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>

                                    {{-- Botón Registrarse --}}
                                    <div class="form-group text-center row mt-3">
                                        <div class="col-12">
                                            @if (Auth::check())
                                            @else
                                                <a href="{{ route('register') }}"
                                                    class="btn btn-info w-100 waves-effect waves-light">
                                                    {{ __('Register') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>

                                </form>

                                <br>

                                <div id="accordion" class="custom-accordion">

                                    <div class="card mb-1 shadow-none">
                                        <a href="#collapseOne" class="text-dark collapsed" data-bs-toggle="collapse"
                                            aria-expanded="false" aria-controls="collapseOne">
                                            <div class="card-header btn btn-warning w-100 waves-effect waves-light"
                                                id="headingOne">
                                                <h6 class="text-center mb-0">
                                                    {{ __('Login Demo') }}
                                                    <i class="mdi mdi-minus float-end accor-plus-icon"></i>
                                                </h6>
                                            </div>
                                        </a>

                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                            data-bs-parent="#accordion" style="">
                                            <div class="card-body">

                                                {!! __(
                                                    'To enter the system it is necessary to log in, to use the system in <strong>Demo</strong> mode you can log in with the following credentials: <br> <br> <strong>User: </strong>demo<br> <strong>Password: </strong>demo',
                                                ) !!}

                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <br>

                                {{-- Logo TJ Web --}}
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <img src="{{ asset('logo/TJWeblogo.png') }}" alt="" width="100px">
                                        </div>
                                    </div>
                                </div>
                                <br>

                                {{-- Footer: Made by TJ Web --}}
                                <div class="container-fluid">
                                    <div class="row">

                                        <div class="col-sm-12 text-center">
                                            <script>
                                                document.write(new Date().getFullYear())
                                            </script>© TJ Web.
                                        </div>
                                        <br>
                                        <div class="col-sm-12">
                                            <div class="text-center d-none d-sm-block">
                                                {{ __('Made with') }} <i class="mdi mdi-heart text-danger"></i>
                                                {{ __('by') }} TJ Web.
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                {{-- Footer: Version de Laravel y PHP --}}
                                <div class="form-group row mt-4">
                                    <div class="text-center">
                                        <small class="text-muted">
                                            Laravel v{{ Illuminate\Foundation\Application::VERSION }}
                                            (PHP v{{ PHP_VERSION }})
                                        </small>
                                        <br>
                                        <small class="text-muted">
                                            {{-- {!! htmlspecialchars_decode(date('j<\s\up>S</\s\up> F Y', strtotime(now()))) !!}  --}}
                                            @php
                                                $mytime = Carbon\Carbon::now();
                                                // echo $mytime->toDateTimeString();
                                            @endphp
                                            {{-- {{ $mytime->format('d-M-Y H:i') }}  --}}
                                            {{ formatFecha1($mytime) }} {{ $mytime->format('H:i') }}
                                        </small>

                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- end cardbody -->


                    </div>
                    <!-- end card -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->


    <footer class="footer footer-alt">
        2023 -
        <script>
            document.write(new Date().getFullYear())
        </script> &copy; TJ Web Start Kit <a href="" class="text-white-50">TJ Web</a>
    </footer>

    <!-- Vendor js -->
    <script src="{{ asset('backend/assets/js/vendor.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('backend/assets/js/app.min.js') }}"></script>

</body>

</html>
