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
                    <h1 class="username text-center mt-3 mb-2">{{ auth()->user()->username }} </h1>
                    <h4 class="username text-center mt-3 mb-3">Bienvenido(a) {{ auth()->user()->name }} </h4>
                    <!-- Bienvenida -->
                    <p class="mb-3"><strong>Instrucciones:</strong></p>
                    <p class="mb-5">Bienvenido al inicio del proceso de censo correspondiente a este año. <br><br>En el menú lateral izquierdo, encontrarás las opciones para descargar los formularios necesarios para este censo, así como la opción para subirlos. <br><br>Como primer paso, te recomendamos descargar los formularios a rellenar. <br><br>Una vez completados, podrás subirlos en la sección correspondiente. ¡Gracias por tu participación!</p>
                    @endauth

                    <!-- Barra de progreso -->
                    <p class="mb-3">@auth {{ auth()->user()->name }} @endauth tu progreso general es de:</p>
                    <?php
                    // Cantidad de formularios asignados
                    $totalFormularios = count($formulariosAsignados);

                    // Cantidad de formularios subidos
                    $formulariosSubidos = count($formulariosSubidos);

                    // Calculamos el progreso
                    $progreso = $totalFormularios > 0 ? ($formulariosSubidos / $totalFormularios) * 100 : 0;
                    ?>

                    <div class="progress mb-3" style="height: 30px;">
                        <div id="progressBar" class="progress-bar bg-success" role="progressbar" style="width: {{ $progreso }}%;" aria-valuenow="{{ $progreso }}" aria-valuemin="0" aria-valuemax="100">{{ $progreso }}%</div>
                    </div>

                    <p class="text-end mt-2 mb-2">Tu avance es: {{ $formulariosSubidos }} formularios completados de {{ $totalFormularios }}</p>

                    @guest
                    <p>Para ver el contenido inicie sesión <a class="link" href="/inicioSesion">Iniciar sesión</a></p>
                    @endguest
                </div>
            </div>
        </div>
    </div>
@endsection
