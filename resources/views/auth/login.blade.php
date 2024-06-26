<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Login | {{ config('app.name', 'Laravel') }}</title>
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

    {{-- CSS en vista blade, lo voy a usar para deshabilitar los a tag de social login que no voy a usar --}}
    <style type="text/css">
        a.disabled {
            /* Make the disabled links grayish*/
            color: gray;
            /* And disable the pointer events */
            pointer-events: none;
        } 
    </style>

</head>

<body class="authentication-bg authentication-bg-pattern">

    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    
                    <div class="card bg-pattern">
                        <div class="card-body p-4">

                            <div class="text-center w-75 m-auto">
                                <div class="auth-logo">

                                    <a href="{{ url('/') }}" class="logo logo-dark text-center">
                                        <span class="logo-lg">
                                            <img src="{{ asset('logo/TJWeblogo.png') }}" alt="" width="150px">
                                        </span>
                                    </a>

                                </div>
                                <p class="text-muted mt-1 mb-3">
                                    {{ __('Enter your email, phone or username and password to access the administration panel.') }}
                                </p>
                            </div>


                            {{-- Estatus de Sesión, Para desplegar el mensaje si se restableció la contraseña --}}
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                {{-- Email/Username/Phone --}}
                                <div class="mb-3">

                                    <label for="loginName" class="form-label">{{ __('Email/Username/Phone') }}</label>

                                    <input class="form-control @error('loginName') is-invalid @enderror"
                                        value="{{ old('loginName') }}" name="loginName" type="text" id="loginName"
                                        required="" placeholder="{{ __('Email/Username/Phone') }}" autofocus>
                                    @error('loginName')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>

                                {{-- Password --}}
                                <div class="mb-3">

                                    <label for="password" class="form-label">{{ __('Password') }}</label>

                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password" name="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            placeholder="Ingresa tu contraseña">
                                        <div class="input-group-text" data-password="false">
                                            <span class="password-eye"></span>
                                        </div>
                                        @error('loginName')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>

                                {{-- Remember me --}}
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                                        <label class="form-check-label" for="checkbox-signin">{{ __('Remember me') }}</label>
                                    </div>
                                </div>

                                {{-- submit --}}
                                <div class="text-center d-grid">
                                    <button class="btn btn-primary" type="submit"> {{ __('Log in') }}</button>
                                </div>

                            </form>

                            {{-- Inicia sesión con Redes Sociales --}}
                            <div class="text-center">
                                <h5 class="mt-3 text-muted">{{ __('Sign in with') }}</h5>
                                <ul class="social-list list-inline mt-3 mb-0">

                                    {{-- Facebook --}}
                                    <li class="list-inline-item">
                                        {{-- <a href="#" class="social-list-item border-primary text-primary">
                                            <i class="mdi mdi-facebook"></i>
                                        </a> --}}
                                        <a href="#" class="social-list-item border-muted text-muted disabled">
                                            <i class="mdi mdi-facebook"></i>
                                        </a>
                                    </li>

                                    {{-- Google --}}
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-danger text-danger">
                                            <i class="mdi mdi-google"></i>
                                        </a>
                                        {{-- <a href="javascript: void(0);" class="social-list-item border-muted text-muted disabled">
                                            <i class="mdi mdi-google"></i>
                                        </a> --}}
                                    </li>

                                    {{-- Twitter --}}
                                    <li class="list-inline-item">
                                        {{-- <a href="javascript: void(0);" class="social-list-item border-info text-info">
                                            <i class="mdi mdi-twitter"></i>
                                        </a> --}}
                                        <a href="javascript: void(0);" class="social-list-item border-muted text-muted disabled">
                                            <i class="mdi mdi-twitter"></i>
                                        </a>
                                    </li>

                                    {{-- GitHub --}}
                                    <li class="list-inline-item">
                                        {{-- <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary">
                                            <i class="mdi mdi-github"></i>
                                        </a> --}}
                                        <a href="javascript: void(0);" class="social-list-item border-muted text-muted disabled">
                                            <i class="mdi mdi-github"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>

                        </div> <!-- end card-body -->

                    </div>

                    {{-- ¿Olvidaste tu contraseña? y Crear una cuenta --}}
                    <div class="form-group mb-0 row mt-2">
                        <div class="col-sm-7 mt-3">
                            <a href="{{ route('password.request') }}" class="text-muted">
                                <i class="mdi mdi-lock"></i>
                                {{ __('Forgot your password?') }}
                            </a>
                        </div>
                        <div class="col-sm-5 mt-3">
                            <a href="{{ route('register') }}" class="text-muted">
                                <i class="mdi mdi-account-circle"></i>
                                {{ __('Create an account') }}
                            </a>
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
