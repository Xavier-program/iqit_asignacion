@extends('layouts/template')
@include('layouts/header')
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
                  <h1 class="username text-center mt-2"> {{auth()->user()->username}} </h1>
                @endauth
                <!-- Instrucciones de subida -->
                <p class="text-justify mt-2">En esta sección, podrás subir los formularios que ya hayas completado. <strong>Antes de subir un formulario, te recomendamos revisarlo cuidadosamente. Agregar las siglas de la institución despues del nombre del formulario</strong> Si necesitas reemplazar un formulario ya enviado, deberás solicitar la edición enviando un correo a admin@admin.com.</p>
                
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

                <!-- Progreso -->
                <p><strong>@auth {{auth()->user()->name}} @endauth</strong> tu avance es: </p>
                <p><?php echo $progreso/10; ?> formularios completados de 10</p>
                
                <!-- Barra de progreso -->
                <div class="progress mb-3" style="height: 30px;">
                    <div id="progressBar" class="progress-bar bg-success" role="progressbar" style="width: <?php echo $progreso; ?>%;" aria-valuenow="<?php echo $progreso; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $progreso; ?>%</div>
                </div>


                <table class="table table-striped">
                  <tr>
                      <th scope="col">Formulario</th>
                      <th scope="col">Cargar archivo</th>
                      <th scope="col">&nbsp;</th>
                      <th class="text-center" scope="col">Archivo Cargado</th>
                  </tr>
                  <!-- 1 -->
                  <tr>
                    @if($usuario->rutaF1 == "")
                    <td class="col-3">01_1_CNGE_2023_M1_S1_VF_02mar23</td>
                    <td>
                      <form class="formularioArchivo" action="/guardar_archivo.php" enctype="multipart/form-data">
                        <input type="hidden" class="userId" name="userId" value="{{$usuario->id}}">
                        <div class="d-flex aling-items-center">
                          <input type="file" class="archivo" name="archivo">
                          <button class="btn btn-success botonArchivo btn-sm my-2" type="submit">
                              <i class="fa-solid fa-floppy-disk"></i> Guardar
                          </button>
                        </div>
                      </form>
                    </td>
                    <td>&nbsp;</td>
                    <td class="col-2"><input id="checkboxArchivo" type="checkbox"></td>
                    @else
                    <td class="col-3">01_1_CNGE_2023_M1_S1_VF_02mar23</td>
                    <td>
                      <i class="fa-solid fa-paperclip"></i> {{ basename($usuario->rutaF1) }} &nbsp;
                    </td>
                    <td>
                      <a class="descarga" download="{{ basename($usuario->rutaF1) }}" href="{{ asset($usuario->rutaF1) }}">
                        <i class="fa-solid fa-download"></i>
                      </a>
                    </td>
                    <td class="col-2"><h1 class="text-center text-success"><i class="fa-solid fa-circle-check"></i></h1></td>
                    @endif
                  </tr>

                  <!-- 2 -->
                  <tr>
                    @if($usuario->rutaF2 == "")
                    <td class="col-3">01_2_CNGE_2023_M1_S2_VF_02mar23</td>
                    <td>
                      <form class="formularioArchivo" action="/guardar_archivo2.php" enctype="multipart/form-data">
                        <input type="hidden" class="userId" name="userId" value="{{$usuario->id}}">
                        <div class="d-flex aling-items-center">
                          <input type="file" class="archivo" name="archivo">
                          <button class="btn btn-success botonArchivo btn-sm my-2" type="submit">
                              <i class="fa-solid fa-floppy-disk"></i> Guardar
                          </button>
                        </div>
                      </form>
                    </td>
                    <td>&nbsp;</td>
                    <td class="col-2"><input id="checkboxArchivo" type="checkbox"></td>
                    @else
                    <td class="col-3">01_2_CNGE_2023_M1_S2_VF_02mar23</td>
                    <td>
                      <i class="fa-solid fa-paperclip"></i> {{ basename($usuario->rutaF2) }} &nbsp;
                    </td>
                    <td>
                      <a class="descarga" download="{{ basename($usuario->rutaF2) }}" href="{{ asset($usuario->rutaF2) }}">
                        <i class="fa-solid fa-download"></i>
                      </a>
                    </td>
                    <td class="col-2"><h1 class="text-center text-success"><i class="fa-solid fa-circle-check"></i></h1></td>
                    @endif
                  </tr>

                  <!-- 3 -->
                  <tr>
                    @if($usuario->rutaF3 == "")
                    <td class="col-3">01_3_CNGE_2023_M1_S3_VF_01jun23</td>
                    <td>
                      <form class="formularioArchivo" action="/guardar_archivo3.php" enctype="multipart/form-data">
                        <input type="hidden" class="userId" name="userId" value="{{$usuario->id}}">
                        <div class="d-flex aling-items-center">
                          <input type="file" class="archivo" name="archivo">
                          <button class="btn btn-success botonArchivo btn-sm my-2" type="submit">
                              <i class="fa-solid fa-floppy-disk"></i> Guardar
                          </button>
                        </div>
                      </form>
                    </td>
                    <td>&nbsp;</td>
                    <td class="col-2"><input id="checkboxArchivo" type="checkbox"></td>
                    @else
                    <td class="col-3">01_3_CNGE_2023_M1_S3_VF_01jun23</td>
                    <td>
                      <i class="fa-solid fa-paperclip"></i> {{ basename($usuario->rutaF3) }} &nbsp;
                    </td>
                    <td>
                      <a class="descarga" download="{{ basename($usuario->rutaF3) }}" href="{{ asset($usuario->rutaF3) }}">
                        <i class="fa-solid fa-download"></i>
                      </a>
                    </td>
                    <td class="col-2"><h1 class="text-center text-success"><i class="fa-solid fa-circle-check"></i></h1></td>
                    @endif
                  </tr>

                  <!-- 4 -->
                  <tr>
                    @if($usuario->rutaF4 == "")
                    <td class="col-3">01_4_CNGE_2023_M1_S4_VF_28mar23</td>
                    <td>
                      <form class="formularioArchivo" action="/guardar_archivo4.php" enctype="multipart/form-data">
                        <input type="hidden" class="userId" name="userId" value="{{$usuario->id}}">
                        <div class="d-flex aling-items-center">
                          <input type="file" class="archivo" name="archivo">
                          <button class="btn btn-success botonArchivo btn-sm my-2" type="submit">
                              <i class="fa-solid fa-floppy-disk"></i> Guardar
                          </button>
                        </div>
                      </form>
                    </td>
                    <td>&nbsp;</td>
                    <td class="col-2"><input id="checkboxArchivo" type="checkbox"></td>
                    @else
                    <td class="col-3">01_4_CNGE_2023_M1_S4_VF_28mar23</td>
                    <td>
                      <i class="fa-solid fa-paperclip"></i> {{ basename($usuario->rutaF4) }} &nbsp;
                    </td>
                    <td>
                      <a class="descarga" download="{{ basename($usuario->rutaF4) }}" href="{{ asset($usuario->rutaF4) }}">
                        <i class="fa-solid fa-download"></i>
                      </a>
                    </td>
                    <td class="col-2"><h1 class="text-center text-success"><i class="fa-solid fa-circle-check"></i></h1></td>
                    @endif
                  </tr>

                  <!-- 5 -->
                  <tr>
                    @if($usuario->rutaF5 == "")
                    <td class="col-3">01_5_CNGE_2023_M1_S5_VF_02mar23</td>
                    <td>
                      <form class="formularioArchivo" action="/guardar_archivo5.php" enctype="multipart/form-data">
                        <input type="hidden" class="userId" name="userId" value="{{$usuario->id}}">
                        <div class="d-flex aling-items-center">
                          <input type="file" class="archivo" name="archivo">
                          <button class="btn btn-success botonArchivo btn-sm my-2" type="submit">
                              <i class="fa-solid fa-floppy-disk"></i> Guardar
                          </button>
                        </div>
                      </form>
                    </td>
                    <td>&nbsp;</td>
                    <td class="col-2"><input id="checkboxArchivo" type="checkbox"></td>
                    @else
                    <td class="col-3">01_5_CNGE_2023_M1_S5_VF_02mar23</td>
                    <td>
                      <i class="fa-solid fa-paperclip"></i> {{ basename($usuario->rutaF5) }} &nbsp;
                    </td>
                    <td>
                      <a class="descarga" download="{{ basename($usuario->rutaF5) }}" href="{{ asset($usuario->rutaF5) }}">
                        <i class="fa-solid fa-download"></i>
                      </a>
                    </td>
                    <td class="col-2"><h1 class="text-center text-success"><i class="fa-solid fa-circle-check"></i></h1></td>
                    @endif
                  </tr>

                  <!-- 6 -->
                  <tr>
                    @if($usuario->rutaF6 == "")
                    <td class="col-3">01_6_CNGE_2023_M1_S6_VF_02mar23</td>
                    <td>
                      <form class="formularioArchivo" action="/guardar_archivo6.php" enctype="multipart/form-data">
                        <input type="hidden" class="userId" name="userId" value="{{$usuario->id}}">
                        <div class="d-flex aling-items-center">
                          <input type="file" class="archivo" name="archivo">
                          <button class="btn btn-success botonArchivo btn-sm my-2" type="submit">
                              <i class="fa-solid fa-floppy-disk"></i> Guardar
                          </button>
                        </div>
                      </form>
                    </td>
                    <td>&nbsp;</td>
                    <td class="col-2"><input id="checkboxArchivo" type="checkbox"></td>
                    @else
                    <td class="col-3">01_6_CNGE_2023_M1_S6_VF_02mar23</td>
                    <td>
                      <i class="fa-solid fa-paperclip"></i> {{ basename($usuario->rutaF6) }} &nbsp;
                    </td>
                    <td>
                      <a class="descarga" download="{{ basename($usuario->rutaF6) }}" href="{{ asset($usuario->rutaF6) }}">
                        <i class="fa-solid fa-download"></i>
                      </a>
                    </td>
                    <td class="col-2"><h1 class="text-center text-success"><i class="fa-solid fa-circle-check"></i></h1></td>
                    @endif
                  </tr>

                  <!-- 7 -->
                  <tr>
                    @if($usuario->rutaF7 == "")
                    <td class="col-3">01_7_CNGE_2023_M1_S7_VF_02mar23</td>
                    <td>
                      <form class="formularioArchivo" action="/guardar_archivo7.php" enctype="multipart/form-data">
                        <input type="hidden" class="userId" name="userId" value="{{$usuario->id}}">
                        <div class="d-flex aling-items-center">
                          <input type="file" class="archivo" name="archivo">
                          <button class="btn btn-success botonArchivo btn-sm my-2" type="submit">
                              <i class="fa-solid fa-floppy-disk"></i> Guardar
                          </button>
                        </div>
                      </form>
                    </td>
                    <td>&nbsp;</td>
                    <td class="col-2"><input id="checkboxArchivo" type="checkbox"></td>
                    @else
                    <td class="col-3">01_7_CNGE_2023_M1_S7_VF_02mar23</td>
                    <td>
                      <i class="fa-solid fa-paperclip"></i> {{ basename($usuario->rutaF7) }} &nbsp;
                    </td>
                    <td>
                      <a class="descarga" download="{{ basename($usuario->rutaF7) }}" href="{{ asset($usuario->rutaF7) }}">
                        <i class="fa-solid fa-download"></i>
                      </a>
                    </td>
                    <td class="col-2"><h1 class="text-center text-success"><i class="fa-solid fa-circle-check"></i></h1></td>
                    @endif
                    </tr>

                  <!-- 8 -->
                  <tr>
                    @if($usuario->rutaF8 == "")
                    <td class="col-3">01_11_CNGE_2023_M1_S11_VF_02mar23</td>
                    <td>
                      <form class="formularioArchivo" action="/guardar_archivo8.php" enctype="multipart/form-data">
                        <input type="hidden" class="userId" name="userId" value="{{$usuario->id}}">
                        <div class="d-flex aling-items-center">
                          <input type="file" class="archivo" name="archivo">
                          <button class="btn btn-success botonArchivo btn-sm my-2" type="submit">
                              <i class="fa-solid fa-floppy-disk"></i> Guardar
                          </button>
                        </div>
                      </form>
                    </td>
                    <td>&nbsp;</td>
                    <td class="col-2"><input id="checkboxArchivo" type="checkbox"></td>
                    @else
                    <td class="col-3">01_11_CNGE_2023_M1_S11_VF_02mar23</td>
                    <td>
                      <i class="fa-solid fa-paperclip"></i> {{ basename($usuario->rutaF8) }} &nbsp;
                    </td>
                    <td>
                      <a class="descarga" download="{{ basename($usuario->rutaF8) }}" href="{{ asset($usuario->rutaF8) }}">
                        <i class="fa-solid fa-download"></i>
                      </a>
                    </td>
                    <td class="col-2"><h1 class="text-center text-success"><i class="fa-solid fa-circle-check"></i></h1></td>
                    @endif
                  </tr>

                  <!-- 9 -->
                  <tr>
                    @if($usuario->rutaF9 == "")
                    <td class="col-3">01_12_CNGE_2023_M1_S12_VF_19may23</td>
                    <td>
                      <form class="formularioArchivo" action="/guardar_archivo9.php" enctype="multipart/form-data">
                        <input type="hidden" class="userId" name="userId" value="{{$usuario->id}}">
                        <div class="d-flex aling-items-center">
                          <input type="file" class="archivo" name="archivo">
                          <button class="btn btn-success botonArchivo btn-sm my-2" type="submit">
                              <i class="fa-solid fa-floppy-disk"></i> Guardar
                          </button>
                        </div>
                      </form>
                    </td>
                    <td></td>
                    <td class="col-2"><input id="checkboxArchivo" type="checkbox"></td>
                    @else
                    <td class="col-3">01_12_CNGE_2023_M1_S12_VF_19may23</td>
                    <td>
                      <i class="fa-solid fa-paperclip"></i> {{ basename($usuario->rutaF9) }} &nbsp;
                    </td>
                    <td>
                      <a class="descarga" download="{{ basename($usuario->rutaF9) }}" href="{{ asset($usuario->rutaF9) }}">
                        <i class="fa-solid fa-download"></i>
                      </a>
                    </td>
                    <td class="col-2"><h1 class="text-center text-success"><i class="fa-solid fa-circle-check"></i></h1></td>
                    @endif
                  </tr>

                   <!-- 10 -->
                   <tr>
                    @if($usuario->rutaF10 == "")
                    <td class="col-3">02_CNGE_2023_M2_VF_01Jun23</td>
                    <td>
                      <form class="formularioArchivo" action="/guardar_archivo10.php" enctype="multipart/form-data">
                        <input type="hidden" class="userId" name="userId" value="{{$usuario->id}}">
                        <div class="d-flex aling-items-center">
                          <input type="file" class="archivo" name="archivo">
                          <button class="btn btn-success botonArchivo btn-sm my-2" type="submit">
                              <i class="fa-solid fa-floppy-disk"></i> Guardar
                          </button>
                        </div>
                      </form>
                    </td>
                    <td>&nbsp;</td>
                    <td class="col-2"><input id="checkboxArchivo" type="checkbox"></td>
                    @else
                    <td class="col-3">02_CNGE_2023_M2_VF_01Jun23</td>
                    <td>
                      <i class="fa-solid fa-paperclip"></i> {{ basename($usuario->rutaF10) }} &nbsp;
                    </td>
                    <td>
                      <a class="descarga" download="{{ basename($usuario->rutaF10) }}" href="{{ asset($usuario->rutaF10) }}">
                        <i class="fa-solid fa-download"></i>
                      </a>
                    </td>
                    <td class="col-2"><h1 class="text-center text-success"><i class="fa-solid fa-circle-check"></i></h1></td>
                    @endif
                  </tr>

                </table>
            </div>

            @guest
            <p>Para ver el contenido inicie sesión <a class="link" href="/inicioSesion">Iniciar sesión</a></p>
            @endguest

        </div>
    </div>
  </div>
</div>

<!-- JS -->
<!-- Cargar archivos -->
<script>
// Obtener todos los formularios y agregar un evento de envío a cada uno
document.querySelectorAll('.formularioArchivo').forEach(form => {
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        var archivoInput = this.querySelector('.archivo');
        var archivo = archivoInput.files[0];
        var formData = new FormData();
        formData.append('archivo', archivo);
        formData.append('userId', this.querySelector('.userId').value); // Agregar userId al formData

        fetch(this.getAttribute('action'), { // Obtener la URL del formulario
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                alert(data.message);
                if (data.success && archivo) {
                    this.querySelector('.botonArchivo').style.display = 'none';
                    updateProgressBar();
                }
            })
            .catch(error => console.error('Error:', error));
    });
});
</script>

@endsection


