<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Pagina de Ayuda | {{ config('app.name', 'Laravel') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico')}}">

		<!-- Bootstrap css -->
		<link href="{{ asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
		<!-- App css -->
		<link href="{{ asset('backend/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style"/>
		<!-- icons -->
		<link href="{{ asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
		<!-- Head js -->
		<script src="{{ asset('backend/assets/js/head.js')}}"></script>

    </head>

    <body class="authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card">

                            {{-- Imagen Principal --}}
                            <div class="text-center w-80 m-auto p-2">
                                <div class="auth-logo">

                                    <a href="{{ url('/') }}" class="text-center">
                                        <span class="logo-lg">
                                            <img class="card-img-top img-fluid" src="{{ asset('logo/web_dev_image.png') }}" alt="Card image cap">
                                        </span>
                                    </a>
                
                                </div>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">TJ Web | {{ __('Full Stack Web Development') }}</h5>
                                <p class="card-text">Este es un sistema de punto de partida para iniciar una aplicación web con Laravel 11 con las siguientes tecnologías y funcionalidades.</p>

                                {{-- Acordeón --}}
                                <div id="accordion" class="custom-accordion">
                                    <div class="card mb-1 shadow-none">
                                        <a href="#collapseOne" class="text-dark collapsed" data-bs-toggle="collapse"
                                            aria-expanded="false" aria-controls="collapseOne">
                                            <div class="card-header btn btn-warning w-100 waves-effect waves-light"
                                                id="headingOne">
                                                <h6 class="text-center mb-0">
                                                    {{ __('Features') }}
                                                    <i class="mdi mdi-minus float-end accor-plus-icon"></i>
                                                </h6>
                                            </div>
                                        </a>

                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                            data-bs-parent="#accordion" style="">
                                            <div class="card-body">

                                                <ul>
                                                    <li>Laravel 11</li>
                                                    <li>Laravel Breeze</li>
                                                    <li>Localización America/Tijuana</li>
                                                    <li>Traducción a Español</li>
                                                    <li>Traducción a Ingles</li>
                                                    <li>Plantilla Backend Bootstrap</li>
                                                    <li>Registrar usuario</li>
                                                    <li>Login con username, teléfono o correo electrónico</li>
                                                    <li>Validación de Correo Electrónico</li>
                                                    <li>Autenticación de dos factores con correo electrónico</li>
                                                    <li>CRUD Admins</li>
                                                    <li>CRUD Empleados</li>
                                                    <li>CRUD Clientes</li>
                                                    <li>CRUD Proveedores</li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <p class="card-text mt-2">
                                    Todo en una aplicación Web que podrá ser utilizada con facilidad desde cualquier dispositivo conectado a Internet.
                                </p>
                                <a href="{{ route('home') }}" class="btn btn-primary waves-effect waves-light">Regresar</a>
                            </div>

                        </div>

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        <footer class="footer footer-alt">
            2024 - <script>document.write(new Date().getFullYear())</script> &copy; TJ Web Start Kit <a href="" class="text-white-50">Esweb</a> 
        </footer>

        <!-- Vendor js -->
        <script src="{{ asset('backend/assets/js/vendor.min.js')}}"></script>

        <!-- App js -->
        <script src="{{ asset('backend/assets/js/app.min.js')}}"></script>
        
    </body>
</html>