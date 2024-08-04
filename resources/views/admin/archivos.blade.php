@extends('layouts/template')
@include('layouts/header')
@include('layouts/sidebarAdmin')
@section('contenido')

<div class="content-wrapper">
    <div class="row-md-12">
        <div class="col-md-12">
            <div class="card ms-2 me-2 mb-5">
                <title>Lista de Archivos</title>
                <h1 class="username text-center mt-4">{{$usuario->username}}</h1>
                <div class="py-3 mt-2 mb-3 bg-light d-flex justify-content-around">
                    <div class="text-end">
                        <a href="{{ url('/status/'.$usuario->id.'/create') }}" class="btn btn-primary " role="button" aria-disabled="true"><i class="fa-solid fa-list-check"></i> Asignar formularios</a>
                    </div>
                    <div class="text-end">
                        <a href="#" class="btn btn-warning " role="button" aria-disabled="true"><i class="bi bi-pencil-square"></i> Editar información de la dependencia</a>
                    </div>
                    <div class="">
                        <form action="#" method="POST">
                            @method("DELETE")
                            @csrf
                            <button type="submit" class="btn btn-danger "><i class="bi bi-trash"></i> Eliminar dependencia</button>
                        </form>
                    </div>
                </div>
                <p class="mx-2"><strong>Responsable:</strong> {{$usuario->name}}</p>
                <p class="mx-2"><strong>Correo electrónico:</strong> {{$usuario->email}}</p>



                   <!-- Barra de progreso -->
                <p class="mx-2">El avance de {{$usuario->username}} es del:</p>
                <?php
                  // Contar el número de archivos asignados
                  $totalArchivosAsignados = count($archivosAsignados);

                  // Inicializar variable auxiliar para contar los archivos subidos
                  $archivosSubidos = 0;

                  // Verificar si los archivos asignados están subidos
                  foreach ($archivosAsignados as $archivo) {
                      // Aquí se asume que un archivo subido estará en el campo correspondiente en la base de datos
                      if (!empty($archivo)) {
                          $archivosSubidos++;
                      }
                  }

                  // Calcular el progreso en base a los archivos asignados
                  $progreso = $totalArchivosAsignados > 0 ? ($archivosSubidos / $totalArchivosAsignados) * 100 : 0;
                ?>

                <div class="progress mx-2 mb-3" style="height: 30px;">
                    <div id="progressBar" class="progress-bar bg-success" role="progressbar" style="width: <?php echo $progreso; ?>%;" aria-valuenow="<?php echo $progreso; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo round($progreso, 1); ?>%</div>
                </div>

                <p class="ms-2"><?php echo $archivosSubidos; ?> de <?php echo $totalArchivosAsignados; ?> archivos subidos</p>




                <table class="table table-striped">
                    <tr>
                        <th scope="col">Archivos asignados</th>
                        <th scope="col">&nbsp;</th>
                    </tr>
                    @if(isset($archivosAsignados) && count($archivosAsignados) > 0)
                        @foreach($archivosAsignados as $archivo)
                            <tr>
                                <td>{{ basename($archivo) }}</td>
                                <td>
                                        <form action="{{ route('formularios.eliminar-archivo') }}" method="POST" style="display:inline;">
                                            @csrf
                                            <input type="hidden" name="archivo" value="{{ $archivo }}">
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa-solid fa-trash"></i> Eliminar
                                            </button>
                                        </form>
                                    </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="2">No hay archivos asignados.</td>
                        </tr>
                    @endif
                </table>

            </div>

            @guest
            <p>Para ver el contenido inicie sesión <a class="link" href="/inicioSesion">Iniciar sesión</a></p>
            @endguest

        </div>
    </div>
  </div>
</div>
@endsection
