@extends('layouts/template')
@include('layouts/headerUser')
@include('layouts/sidebarUser')
@section('contenido')

<div class="content-wrapper">
    <div class="row-md-12">
        <div class="col-md-12">
            <div class="card px-2">
                <title>Descargar archivos</title>
                @auth
                  <h1 class="username text-center mt-2"> {{ auth()->user()->username }} </h1>
                @endauth
                <p class="text-center mt-2">En esta sección, puedes descargar los formularios correspondientes al censo 2023. Cuando finalices con el llenado de estos, súbelos en el apartado de subir formularios.</p>
                
                <div class="table-responsive">
                    <table class="table table-striped mt-3 text-center">
                        <thead>
                            <tr>
                                <th scope="col">&nbsp;</th>
                                <th scope="col">Nombre del Archivo</th>
                                <th scope="col">&nbsp;</th>
                                <th scope="col">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($archivosAsignados) && count($archivosAsignados) > 0)
                                @foreach($archivosAsignados as $archivo)
                                    <tr>
                                        <td class="ps-4">&nbsp;</td>
                                        <td class="col-4">{{ basename($archivo) }}</td>
                                        <td>
                                            <a class="descarga" href="{{ asset($archivo) }}" download="{{ basename($archivo) }}">
                                                <i class="fa-solid fa-download"></i>
                                            </a>
                                        </td>
                                        <td>&nbsp;</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="4">No hay archivos disponibles para mostrar.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>

            @guest
            <p>Para ver el contenido inicie sesión <a class="link" href="/inicioSesion">Iniciar sesión</a></p>
            @endguest

        </div>
    </div>
</div>

@endsection
