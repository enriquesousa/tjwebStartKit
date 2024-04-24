@extends('admin_dashboard')
@section('admin')

    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Cambiar Contraseña</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title">Cambiar Contraseña</h4>
                    </div>
                </div>
            </div>

            <div class="row">

                {{-- 1er Columna - Datos del Perfil --}}
                <div class="col-lg-4 col-xl-4">

                    {{-- Datos del Perfil --}}
                    <div class="card text-center">
                        <div class="card-body">

                            {{-- Imagen de Admin --}}
                            <img src="{{ (!empty($adminData->photo) ? url('upload/admin_image/'.$adminData->photo) : url('upload/no_image.jpg')) }}" class="rounded-circle avatar-lg img-thumbnail"
                            alt="profile-image">

                            {{-- Nombre de Admin --}}
                            <h4 class="mb-0">{{ $adminData->name }}</h4>

                            {{-- Email de Admin --}}
                            <p class="text-muted">{{ $adminData->email }}</p>

                            {{-- Roles de Admin --}}
                            {{-- <p>
                                @foreach ($allAdminUsers as $key => $item)
                                    @if ($item->id == Auth::user()->id)
                                        @foreach ($item->roles as $role)
                                            <span class="badge rounded-pill bg-primary" style="font-size: 12px; font-weight: 500; align-items: center">{{ $role->name }}</span>
                                        @endforeach
                                    @endif
                                @endforeach
                            </p> --}}


                            <button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Follow</button>
                            <button type="button" class="btn btn-danger btn-xs waves-effect mb-2 waves-light">Message</button>

                            <div class="text-start mt-3">
                                
                                <p class="text-muted mb-2 font-13">
                                    <strong>Nombre:</strong>
                                    <span class="ms-2">{{ $adminData->name }}</span>
                                </p>

                                <p class="text-muted mb-2 font-13">
                                    <strong>Nombre Corto:</strong>
                                    <span class="ms-2">{{ $adminData->username }}</span>
                                </p>
                            
                                <p class="text-muted mb-2 font-13">
                                    <strong>Teléfono:</strong>
                                    <span class="ms-2">{{ $adminData->phone }}</span>
                                </p>
                            
                                <p class="text-muted mb-2 font-13">
                                    <strong>Correo:</strong>
                                    <span class="ms-2">{{ $adminData->email }}</span>
                                </p>
                                
                            </div>                                    

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
                        </div>                                 
                    </div> <!-- end card -->

                </div> <!-- end col-->
            
                {{-- 2da Columna - Cambiar Contraseña --}}
                <div class="col-lg-8 col-xl-8">
                    <div class="card">
                        <div class="card-body">
                            {{-- Cambiar Contraseña --}}
                            <div class="tab-pane" id="settings">
                                <form method="post" action="{{ route('update.password') }}">
                                    @csrf

                                    <div class="row">

                                        {{-- Contraseña Actual --}}
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Contraseña Actual</label>
                                                <input type="password" name="old_password"
                                                    class="form-control @error('old_password') is-invalid @enderror"
                                                    id="current_password"
                                                    autofocus>
                                                @error('old_password')
                                                    <span class="text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Contraseña Nueva --}}
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Contraseña Nueva</label>
                                                <input type="password" name="new_password"
                                                    class="form-control @error('new_password') is-invalid @enderror"
                                                    id="new_password">
                                                @error('new_password')
                                                    <span class="text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- Confirmar Contraseña --}}
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">Confirmar Contraseña</label>
                                                <input type="password" name="new_password_confirmation" class="form-control"
                                                    id="new_password_confirmation">

                                            </div>
                                        </div>

                                    </div>

                                    <div class="text-begin">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light mt-2">
                                            <img src="{{ asset('backend/assets/icons/save.svg') }}" alt="" height="20">
                                            Guardar Cambios
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div> <!-- end card-->
                </div> <!-- end col -->

            </div>

        </div>
        <!-- end Editar datos del Perfil-->

    </div>

@endsection
