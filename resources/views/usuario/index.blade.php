@extends('layouts/template')
@include('layouts/headerUser')
@include('layouts/sidebarUser')
@section('contenido')
    <div class="content-wrapper">
        <div class="row-md-12">
            <div class="col-md-12 pt-3">
                <div class="card px-2">
                    <!-- Nombre institución -->
                    @auth
                    <h1 class="username text-center mt-3 mb-2">{{auth()->user()->username}} </h1>
                    <h4 class="username text-center mt-3 mb-3">Bienvenido(a) {{auth()->user()->name}} </h4>
                    <!-- Bienvenida -->
                    <p class="mb-3"><strong>Instrucciones:</strong></p>
                    <p class="mb-5">Bienvenido al inicio del proceso de censo correspondiente a este año. <br><br>En el menú lateral izquierdo, encontrarás las opciones para descargar los formularios necesarios para este censo, así como la opción para subirlos. <br><br>Como primer paso, te recomendamos descargar los formularios a rellenar. <br><br>Una vez completados, podrás subirlos en la sección correspondiente. ¡Gracias por tu participación!</p>
                    @endauth

                    <!-- Barra de progreso -->
                    <p class="mb-3">@auth {{auth()->user()->name}} @endauth tu progreso general es de:</p>
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

                    <div class="progress mb-3" style="height: 30px;">
                        <div id="progressBar" class="progress-bar bg-success" role="progressbar" style="width: <?php echo $progreso; ?>%;" aria-valuenow="<?php echo $progreso; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $progreso; ?>%</div>
                    </div>

                    <p class="text-end mt-2 mb-2">Tu avance es: <?php echo $progreso/10; ?> formularios completados de 10</p>
                    

                    @guest
                    <p>Para ver el contenido inicie sesión <a class="link" href="/inicioSesion">Iniciar sesión</a></p>
                    @endguest
                </div>
            </div>
        </div>
    </div>
@endsection