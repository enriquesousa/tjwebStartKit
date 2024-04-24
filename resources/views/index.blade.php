@extends('admin_dashboard')
@section('admin')
    <div class="content">

        <body class="authentication-bg authentication-bg-pattern">
            
            <!-- Start Content-->
            <div class="container-fluid">
    
                <div class="row justify-content-center">
                    <div class="col-12">
    
                        <div class="text-center">
    
                            <svg id="Layer_1" class="svg-computer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 424.2 424.2">
                                <style>
                                    .st0 {
                                        fill: none;
                                        stroke: #ffffff;
                                        stroke-width: 5;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-miterlimit: 10;
                                    }
                                </style>
                                <g id="Layer_2">
                                    <path class="st0"
                                        d="M339.7 289h-323c-2.8 0-5-2.2-5-5V55.5c0-2.8 2.2-5 5-5h323c2.8 0 5 2.2 5 5V284c0 2.7-2.2 5-5 5z" />
                                    <path class="st0"
                                        d="M26.1 64.9h304.6v189.6H26.1zM137.9 288.5l-3.2 33.5h92.6l-4.4-33M56.1 332.6h244.5l24.3 41.1H34.5zM340.7 373.7s-.6-29.8 35.9-30.2c36.5-.4 35.9 30.2 35.9 30.2h-71.8z" />
                                    <path class="st0" d="M114.2 82.8v153.3h147V82.8zM261.2 91.1h-147" />
                                    <path class="st0"
                                        d="M124.5 105.7h61.8v38.7h-61.8zM196.6 170.2H249v51.7h-52.4zM196.6 105.7H249M196.6 118.6H249M196.6 131.5H249M196.6 144.4H249M124.5 157.3H249M124.5 170.2h62.2M124.5 183.2h62.2M124.5 196.1h62.2M124.5 209h62.2M124.5 221.9h62.2" />
                                </g>
                            </svg>
    
                            <h3 class="mt-4 text-white">Bienvenido</h3>
                            <p class="text-white-50">TJ Web Start Kit</p>
                            
                            {{-- Botones de links --}}
                            <div class="row">

                                <div class="col-2">
                                </div>

                                <div class="col-2">
                                </div>

                                <div class="col-2">
                                    <p class="text-white-50"> 
                                        Ir a mi Perfil
                                    </p>

                                    {{-- {{ route('admin.profile') }} --}}
                                    <a href="" class="btn btn-success">
                                        <i class="fas fa-user"></i>&nbsp;&nbsp;
                                        {{ Auth::user()->name }}
                                    </a>

                                </div>

                                <div class="col-2">
                                    <p class="text-white-50">
                                        <i class="ri-money-dollar-circle-fill"></i> 
                                        Ir a Punto de Venta
                                    </p>

                                    {{-- {{ route('pos') }} --}}
                                    <a href="" class="btn btn-success">
                                        <i class="fas fa-cash-register"></i>&nbsp;&nbsp;
                                        PDV
                                    </a>

                                </div>

                                <div class="col-2">
                                </div>

                                <div class="col-2">
                                </div>

                            </div>
    
                        </div> <!-- end /.text-center-->
    
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
    
            </div> <!-- container -->

        </body>

    </div> <!-- content -->
@endsection
