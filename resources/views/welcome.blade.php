    <!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>TJ Web Start Kit</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        
        <!-- App favicon -->
        <link rel="icon" href="{{ asset('tjweb48x48.ico') }}">
        {{-- <link rel="icon" href="{{ asset('backend/assets/images/favicon.ico') }}"> --}}
        {{-- <link rel="icon" href="{{ asset('backend/images/favicon.ico') }}"> --}}

        
		<!-- Bootstrap css -->
		<link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
		<!-- App css -->
		<link href="{{ asset('backend/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style"/>
		<!-- icons -->
		<link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
		<!-- Head js -->
		<script src="{{ asset('backend/assets/js/head.js') }}"></script>

    </head>

    <body class="authentication-bg authentication-bg-pattern">

        <div class="mt-5 mb-5">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-11">

                        <div class="text-center">

                            {{-- Logo Computer Animated SVG --}}
                            <svg id="Layer_1" class="svg-computer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 424.2 424.2">
                                <style>
                                    .st0{fill:none;stroke: #ffffff;stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
                                </style>
                                <g id="Layer_2">
                                    <path class="st0" d="M339.7 289h-323c-2.8 0-5-2.2-5-5V55.5c0-2.8 2.2-5 5-5h323c2.8 0 5 2.2 5 5V284c0 2.7-2.2 5-5 5z"/>
                                    <path class="st0" d="M26.1 64.9h304.6v189.6H26.1zM137.9 288.5l-3.2 33.5h92.6l-4.4-33M56.1 332.6h244.5l24.3 41.1H34.5zM340.7 373.7s-.6-29.8 35.9-30.2c36.5-.4 35.9 30.2 35.9 30.2h-71.8z"/>
                                    <path class="st0" d="M114.2 82.8v153.3h147V82.8zM261.2 91.1h-147"/>
                                    <path class="st0" d="M124.5 105.7h61.8v38.7h-61.8zM196.6 170.2H249v51.7h-52.4zM196.6 105.7H249M196.6 118.6H249M196.6 131.5H249M196.6 144.4H249M124.5 157.3H249M124.5 170.2h62.2M124.5 183.2h62.2M124.5 196.1h62.2M124.5 209h62.2M124.5 221.9h62.2"/>
                                </g>
                            </svg>

                            {{-- Titulo --}}
                            <h3 class="mt-4 text-white">{{ __('Welcome') }} | {{ __('Frontend Page') }}</h3>
                            <p class="text-white-50">
                                TJ Web Start Kit | {{ __('Full Stack Web Development') }}
                                <br>
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
                            </p>

                            {{-- si el usuario ya ha iniciado sesión --}}
                            @if (Auth::check())
                                <p class="text-white-50">
                                    {{ __('The user') }}: {{ Auth::user()->name }}, {{ __('is already logged in!') }}
                                </p>

                                <span class="text-muted">
                                    <i class="ri-record-circle-line align-middle font-size-14 text-success"></i>
                                    {{ __('You are logged in!') }}
                                </span>
                                <br>
                                <br>

                                <a href="{{ route('dashboard') }}" 
                                    class="btn btn-success">
                                    {{ __('Continue to dashboard') }}
                                </a>
                            @endif

                            <div class="row mt-5">

                                {{-- Aplicación --}}
                                <div class="col-md-6">
                                    <div class="text-center mt-3 ps-1 pe-1">
                                        <div class="avatar-md rounded-circle bg-soft-light mx-auto">
                                            <a href="{{ route('backend_welcome') }}" class="">
                                                <i class="dripicons-jewel font-22 avatar-title"></i>
                                            </a>
                                        </div>
                                        <a href="{{ route('backend_welcome') }}" class="">
                                            <h5 class="text-uppercase mt-3 text-white">
                                                {{ __('Application') }}
                                            </h5>
                                        </a>
                                        <p class="text-white-50 mx-auto" style="width: 300px;">
                                            {{ __('Go directly to the app, where you can log in or create an account to access') }}
                                        </p>
                                    </div>
                                </div>
                                

                                {{-- Ayuda --}}
                                <div class="col-md-6">
                                    <div class="text-center mt-3 ps-1 pe-1">
                                        <div class="avatar-md rounded-circle bg-soft-light mx-auto">
                                            <a href="{{ route('page.ayuda') }}" class="">
                                                <i class="dripicons-question font-22 avatar-title"></i>
                                            </a>
                                        </div>
                                        <a href="{{ route('page.ayuda') }}" class="">
                                            <h5 class="text-uppercase mt-3 text-white">
                                                {{ __('Help') }}
                                            </h5>
                                        </a>
                                        <p class="text-white-50 mx-auto" style="width: 300px;">
                                            {{ __('Brief description of the application. For more information please contact us') }}
                                            <a href="mailto:#" class="text-white-50 fw-bold">
                                                soporte@tjweb.com.mx
                                            </a>
                                        </p>
                                    </div>
                                </div> 

                            </div> <!-- end row-->

                        </div> <!-- end /.text-center-->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        {{-- TJ Web Logo --}}
        <div class="text-center w-75 m-auto mb-2">
            <img src="{{ asset('logo/TJWeblogo1.png')}}" alt="logo" height="100">
        </div>
        
        <footer class="footer footer-alt">
            2023 - <script>document.write(new Date().getFullYear())</script> &copy; TJ Web Start Kit <a href="" class="text-white-50">TJ Web</a> 
        </footer>

        <!-- App js -->
        <script src="{{ asset('backend/assets/js/vendor.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/app.min.js') }}"></script>
        
    </body>
</html>