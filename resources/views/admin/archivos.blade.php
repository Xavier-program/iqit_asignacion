@extends('layouts/template')
@include('layouts/header')
@include('layouts/sidebarAdmin')
@section('contenido')

<div class="content-wrapper">
    <div class="row-md-12">
        <div class="col-md-12">
            <div class="card ms-2 me-2 mb-5">
                <title>Lista de Archivos</title>
                <h1 class="username text-center mt-2">{{$usuario->username}}</h1>
                <!-- Barra de progreso -->
                <p class="mx-2">El avance de {{$usuario->username}} es del:</p>
                <?php
                  // Inicializar variable auxiliar para contar los formularios que no son nullos
                  $auxiliar = 0;
                  // Iterar sobre las 10 posibles rutas
                  for ($i = 1; $i <= 10; $i++) {
                      // Declarar el nombre de las rutas
                      $ruta = "rutaF" . $i;
                      // Verificar si la ruta es nulla
                      if ($usuario->$ruta != "") {
                          // Si está vacía, incrementamos el contador
                          $auxiliar++;
                      }
                  }
                  // Calculamos el progreso
                  $progreso = $auxiliar * 10;
                ?>

                <div class="progress mx-2 mb-3" style="height: 30px;">
                    <div id="progressBar" class="progress-bar bg-success" role="progressbar" style="width: <?php echo $progreso; ?>%;" aria-valuenow="<?php echo $progreso; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $progreso; ?>%</div>
                </div>

                <p class="ms-2"><?php echo $progreso/10?> de 10</p>

                

                
                <table class="table table-striped">
                    <tr>
                        <th scope="col">Archivo subido</th>
                        <th scope="col">&nbsp;</th>
                    </tr>
                    @foreach(range(1, 10) as $i)
                        @php
                            $ruta = "rutaF" . $i;
                        @endphp
                        @if($usuario->$ruta != "")
                            <tr>
                            @php
                                $nombreArchivo = basename($usuario->$ruta);
                            @endphp
                                <td>{{$nombreArchivo}}</td>
                                <td><a class="descarga" href="/{{ $usuario->$ruta }}" download="{{ $usuario->$ruta }}"><i class="fa-solid fa-download"></i></a></td>
                            </tr>
                        @endif
                    @endforeach
                </table>


            </div>

            @guest
            <p>Para ver el contenido inicie sesión <a class="link" href="/inicioSesion">Iniciar sesión</a></p>
            @endguest

        </div>
    </div>
  </div>
</div>
