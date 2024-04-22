@extends('layouts/template')

@include('layouts/header')
@include('layouts/sidebar')

@section('contenido')

<div class="content">
    <div class="content-wrapper">
        <div class="row-md-12">
            <div class="col-md-12">
                <form action="{{ route('usuario.store') }}" method="post" class="form-horizontal">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Usuario</h4>
                            <p class="card-category">Ingresar datos</p>
                        </div>
                        <div class="card-body">
                            
                            <div class="row">
                                <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-7">
                                    <input type="text" name="name" class="form-comtrol" placeholder="Ingrese su nombre" autofocus>
                                </div>
                            </div>

                            <div class="row">
                                <label for="username" class="col-sm-2 col-form-label">Nombre de usuario</label>
                                <div class="col-sm-7">
                                    <input type="text" name="username" class="form-comtrol" placeholder="Nombre de usuario" autofocus>
                                </div>
                            </div>

                            <div class="row">
                                <label for="name" class="col-sm-2 col-form-label">Correo</label>
                                <div class="col-sm-7">
                                    <input type="email" name="email" class="form-comtrol" placeholder="Correo" autofocus>
                                </div>
                            </div>

                            <div class="row">
                                <label for="name" class="col-sm-2 col-form-label">Contraseña</label>
                                <div class="col-sm-7">
                                    <input type="password" name="password" class="form-comtrol" placeholder="Contraseña" autofocus>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary">Guardar</button>

                        </div>

                    </div>
                </form>


            </div>

        </div>

    </div>
</div>

@endsection