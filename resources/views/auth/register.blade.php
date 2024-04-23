<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Regístrate | PDV EsWeb</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="icon" href="{{ asset('favicon-32x32.png') }}">

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
                                                {{-- <img src="{{ asset('backend/assets/images/logo-dark2.png') }}" alt="" height="22"> --}}
                                            </span>
                                        </a>
                    
                                    </div>
                                    <p class="text-muted mt-1 mb-2">
                                        {{ __('You do not have an account? Create your account, it will take you less than a minute') }}
                                    </p>
                                </div>

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    {{-- Nombre Completo --}}
                                    <div class="mb-3">
                                        <label for="name" class="form-label">{{ __('Name') }}</label>
                                        <input class="form-control @error('name') is-invalid @enderror" type="text" id="name" name="name" placeholder="{{ __('Name') }}" value="{{ old('name') }}" required>
                                        @error('name')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>

                                    {{-- Nombre Corto (username) --}}
                                    {{-- <div class="mb-3">
                                        <label for="username" class="form-label">{{ __('Username') }}</label>
                                        <input class="form-control @error('username') is-invalid @enderror" type="text" id="username" name="username" placeholder="{{ __('Username') }}" value="{{ old('name') }}" required>
                                        @error('username')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div> --}}

                                    {{-- Teléfono --}}
                                    {{-- <div class="mb-3">
                                        <label for="phone" class="form-label">Teléfono</label>
                                        <input class="form-control @error('phone') is-invalid @enderror" type="number" id="phone" name="phone" placeholder="{{ __('Telephone') }}" value="{{ old('phone') }}" required>
                                        
                                        @error('phone')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div> --}}

                                    {{-- Correo Electrónico --}}
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Correo Electrónico</label>
                                        <input class="form-control @error('email') is-invalid @enderror" type="email" id="email" name="email" value="{{ old('email') }}" required placeholder="{{ __('Email') }}">
                                        @error('email')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>

                                    {{-- Contraseña --}}
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Contraseña</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                            @error('password')
                                                <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Confirmar Contraseña --}}
                                    <div class="mb-3">
                                        <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="{{ __('Confirm Password') }}">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                            @error('password_confirmation')
                                                <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkbox-signup">
                                            <label class="form-check-label" for="checkbox-signup">I accept <a href="javascript: void(0);" class="text-dark">Terms and Conditions</a></label>
                                        </div>
                                    </div> --}}

                                    <div class="text-center d-grid">
                                        <button class="btn btn-success" type="submit"> {{ __('Register') }}</button>
                                    </div>

                                </form>

                                {{-- Social Media Login --}}
                                {{-- <div class="text-center">
                                    <h5 class="mt-3 text-muted">Sign up using</h5>
                                    <ul class="social-list list-inline mt-3 mb-0">
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                                        </li>
                                    </ul>
                                </div> --}}

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-white-50">{{ __('Already have an account?') }}  <a href="{{ route('login') }}" class="text-white ms-1"><b>{{ __('Login') }}</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
        </div>

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