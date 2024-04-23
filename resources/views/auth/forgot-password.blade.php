<!DOCTYPE html>
<html lang="en">
	
    <head>
        <meta charset="utf-8" />
        <title>{{ __('Forgot Password') }} | {{ config('app.name', 'Laravel') }}</title>
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
                        <div class="card bg-pattern">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <div class="auth-logo">

                                        <a href="{{ url('/') }}" class="logo logo-dark text-center">
                                            <span class="logo-lg">
                                                {{-- <img src="{{ asset('backend/assets/images/logo-dark2.png')}}" alt="" height="22"> --}}
                                                <img src="{{ asset('logo/TJWeblogo.png') }}" alt="" width="150px">
                                            </span>
                                        </a>
                    
                                        {{-- <a href="index.html" class="logo logo-light text-center">
                                            <span class="logo-lg">
                                                <img src="assets/images/logo-light.png" alt="" height="22">
                                            </span>
                                        </a> --}}

                                    </div>
                                    <p class="text-muted mb-4 mt-3">
                                        {!! __('Did you forget your password?. <strong>Do not worry!</strong>. Just let us know your email address and we will send you a link to reset your password that will allow you to choose a new one.') !!}
                                    </p>

                                </div>

                                {{-- Estatus de Sesión --}}
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf

                                    {{-- Correo Electrónico --}}
                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">{{ __('Email') }}</label>
                                        <input class="form-control @error('email') is-invalid @enderror" type="email" id="email" name="email" required="" placeholder="{{ __('Email') }}" autofocus>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    {{-- Botón --}}
                                    <div class="text-center d-grid">
                                        <button class="btn btn-primary" type="submit">{{ __('Send Password Reset Link') }}</button>
                                    </div>

                                </form>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-white-50">
                                    {{ __('Return to') }} 
                                    <a href="{{ route('login') }}" 
                                        class="text-white ms-1">
                                        <b>{{ __('Login') }}</b>
                                    </a>
                                </p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

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
        <script src="{{ asset('backend/assets/js/vendor.min.js')}}"></script>

        <!-- App js -->
        <script src="{{ asset('backend/assets/js/app.min.js')}}"></script>
        
    </body>

</html>