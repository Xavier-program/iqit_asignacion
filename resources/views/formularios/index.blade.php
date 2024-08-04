@extends('layouts/template')
@include('layouts/headerUser')
@include('layouts/sidebarUser')
@section('contenido')

<div class="content-wrapper">
    <div class="row-md-12">
        <div class="col-md-12">
            <div class="card px-2 mb-5">
                <!-- Título -->
                <title>Subir archivos</title>
                <!-- Nombre institución -->
                @auth
                  <h1 class="username text-center mt-2"> {{ auth()->user()->username }} </h1>
                @endauth
                <!-- Instrucciones de subida -->
                <p class="text-justify mt-2">En esta sección, podrás subir los formularios que ya hayas completado. <strong>Antes de subir un formulario, te recomendamos revisarlo cuidadosamente. El nombre del formulario deve ser el mismo</strong> Si necesitas reemplazar un formulario ya enviado, deberás solicitar la edición enviando un correo a admin@admin.com.</p>

                <!-- Mostrar mensajes flash -->
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                
                <div class="table-responsive">
                    <table class="table table-striped mt-3">
                        <thead>
                            <tr>
                                <th scope="col">Archivos asignados</th>
                                <th scope="col">Carga de archivos</th>
                                <th scope="col">Archivos cargados</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($archivosAsignados) && count($archivosAsignados) > 0)
                                @foreach($archivosAsignados as $archivo)
                                    @php
                                        $archivoSubido = \App\Models\ArchivoCompletado::where('user_id', auth()->user()->id)
                                            ->where('archivo', 'like', '%' . basename($archivo) . '%')
                                            ->exists();
                                    @endphp
                                    <tr>
                                        <td class="col-4">{{ basename($archivo) }}</td>
                                        <td class="col-4">
                                            @if($archivoSubido)
                                                <div class="d-flex align-items-center">
                                                    <span class="me-2">{{ basename($archivo) }}</span>
                                                    <form class="formularioArchivo d-flex align-items-center" action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="userId" class="userId" value="{{ auth()->user()->id }}">
                                                        <button type="submit" class="btn btn-primary botonArchivo">Subir nuevamente</button>
                                                    </form>
                                                </div>
                                            @else
                                                <form class="formularioArchivo d-flex align-items-center" action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="userId" class="userId" value="{{ auth()->user()->id }}">
                                                    <input type="file" name="archivo" class="archivo form-control me-2" required>
                                                    <button type="submit" class="btn btn-primary botonArchivo">Subir archivo</button>
                                                </form>
                                            @endif
                                        </td>
                                        <td class="col-4 align-middle text-left-adjusted">
                                            @if($archivoSubido)
                                                <span class="text-success"><i class="fa-solid fa-check"></i> Archivo subido</span>
                                            @else
                                                <span class="text-muted">Esperando carga</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3">No hay archivos disponibles para mostrar.</td>
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
