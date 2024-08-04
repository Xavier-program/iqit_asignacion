@extends('layouts/template')
@include('layouts/header')
@include('layouts/sidebarAdmin')
@section('contenido')
    <div class="content-wrapper">
        <div class="row-md-12">
            <div class="col-md-12">
                <div class="card px-3">
                    <h3 class="">Formularios</h3> 
                    <div class="d-flex justify-content-between">
                        <div>
                            <p style="font-size: 50px;">
                                <a href="{{ url('formularios/create') }}" class="btn btn-success btn-lg ms-3"  role="button"><i class="fa-solid fa-file-circle-plus"></i> &nbsp; Agregar formulario</a>
                            </p>
                        </div>
                        <div>
                            <form class="d-flex align-items-center" action="{{ route('formularios.index') }}" method="GET" class="d-flex" role="search">
                                <input class="form-control me-2" type="text" placeholder="Buscar formulario" aria-label="Search" name="formulario">
                                <button class="me-3 btn btn-secondary h-50" type="submit" value="enviar"><h5><i class="fa-solid fa-magnifying-glass"></i></h5></button>
                            </form>
                        </div>
                    </div>
                    
                    <!-- Mostrar el número de archivos en la lista -->
                    <div class="mx-3 mb-3 text-end">
                        <p>Número de archivos en la lista: <strong>{{ $formularioCount }}</strong></p>
                    </div>

                    <div class="card mx-3 mb-5">
                        <main class="container">
                            <div class="py-4">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nombre del Formulario</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($formularios as $formulario)
                                            <tr>
                                                <td class="w-75">{{ basename($formulario->formulario) }}</td>
                                                <td class="">
                                                    <a class="descarga" download="{{ basename($formulario->formulario) }}" href="{{ asset($formulario->formulario) }}">
                                                        <i class="fa-solid fa-download"></i>
                                                    </a>
                                                </td>
                                                <td class="text-end">
                                                    <a href="{{ url('formularios/'.$formulario->id.'/edit') }}" class="btn btn-warning btn-sm" role="button" aria-disabled="true"><i class="bi bi-pencil-square"></i> Editar</a>
                                                </td>
                                                <td class="">
                                                    <form action="{{ url('formularios/'.$formulario->id) }}" method="POST">
                                                        @method("DELETE")
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Eliminar</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </main>
                    </div>

                    @guest
                        <p>Para ver el contenido inicie sesión <a class="link" href="/inicioSesion">Iniciar sesión</a></p>
                    @endguest
                </div>
            </div>
        </div>
    </div>
@endsection
