@extends('layouts/template')
@include('layouts/header')
@include('layouts/sidebarAdmin')
@section('contenido')
    <div class="content-wrapper">
        <div class="row-md-12">
            <div class="col-md-12">
                <div class="card px-3">
                    <h3 class="">Dependencias</h3> 
                    <div class="d-flex justify-content-between">
                        <div>
                            <p style="font-size: 50px;">
                                <a href="{{ url('usuario/create') }}" class="btn btn-success btn-lg ms-3" role="button"><i class="fa-solid fa-user-plus"></i> &nbsp; Agregar dependecia</a>
                            </p>
                        </div>

                        <div>
                        <form class="d-flex align-items-center" action="{{ url('/altaInstituciones') }}" method="GET" class="d-flex" role="search">
                            <input class="form-control me-2" type="text" placeholder="Buscar dependencia" aria-label="Search" name="username">
                            <button class="me-3 btn btn-secondary h-50" type="submit" value="enviar"><h5><i class="fa-solid fa-magnifying-glass"></i></h5></button>
                        </form>
                        </div>
                    </div>

                    <!-- <p style="font-size: 50px;">
                        <a href="" class="btn btn-lg ms-2"  role="button"><i class="fa-solid fa-folder-plus"></i> &nbsp; Registrar nueva institución</a>
                    </p> -->
                <div class="card">

                <main>
                 <div class="container py-4">
                 <!-- <h2  style="text-align: center;"></h2> -->
                 <h5>Avance total correspondiente al censo actual:</h5>
                 <hr>
                 

                 <?php
                    $totalIteraciones = 0; // Inicializa el contador total de iteraciones
                    $rutasNoNulas = 0; // Inicializa el contador de iteraciones donde rutaF no es nula

                    foreach ($usuarios as $usuario) {
                        if ($usuario->role != 'admin') {
                            // Itera sobre todas las columnas de rutaF
                            for ($i = 1; $i <= 10; $i++) {
                                $ruta = "rutaF" . $i;
                                // Incrementa el contador total de iteraciones
                                $totalIteraciones++;
                                // Verifica si la rutaF no es nula
                                if (!empty($usuario->$ruta)) {
                                    // Si no es nula, incrementa el contador de rutas no nulas
                                    $rutasNoNulas++;
                                }
                            }
                        }
                    }
                    if($totalIteraciones == 0){
                        $progresoTotal = 0;
                    }else{
                        $progresoTotal = ($rutasNoNulas * 100) / $totalIteraciones;
                        $progresoTotal = number_format($progresoTotal, 2, '.', '');
                    }
                    
                    ?>



                    <!-- Barra de progreso general -->
                    <div class="progress mb-3" style="height: 30px;">
                        <div class="progress-bar progress-bar-striped fw-bold" role="progressbar" style="width: {{ $progresoTotal }}%;" aria-valuenow="{{ $progresoTotal }}" aria-valuemin="0" aria-valuemax="100">{{ $progresoTotal }}%</div>
                    </div>



                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Dependecia</th>
                        <th scope="col">Avance</th>
                        <th></th>
                        </tr>
                    </thead>
                        <tbody>
                        <?php
                        $j = 0;
                        $total = 0;
                        ?>
                        @foreach($usuarios as $usuario)
                            @if($usuario->role != 'admin')
                            <tr>
                                <th><?php echo ++$j; ?></th>
                                <td>{{ $usuario->username }}</td>
                                <td>
                                    <?php
                                        // Itera sobre todas las columnas de rutaF
                                        for ($i = 1; $i <= 10; $i++) {
                                            $ruta = "rutaF" . $i;
                                            // Verifica si la rutaF no es nula
                                            if (!empty($usuario->$ruta)) {
                                                // Si no es nula, incrementa el contador de rutas no nulas
                                                $total++;
                                            }
                                        }
                                        echo $total." de 10";
                                        $total = 0;
                                    ?>

                                </td>
                                <td><button class="verMas"><a href="{{ url('/altaInstituciones/'.$usuario->id.'/archivos') }}" class="dropdown-item">Ver detalles</a></button>
                            </td>
                            </tr>
                            @endif
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