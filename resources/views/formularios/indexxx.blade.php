@extends('layouts/template')
@include('layouts/header')
@include('layouts/sidebarUser')
@section('contenido')

<div class="content-wrapper">
    <div class="row-md-12">
        <div class="col-md-12">
            <div class="card px-2">
                <!-- Título -->
                <title>Descargar archivos</title>
                <!-- Nombre institución -->
                @auth
                  <h1 class="username text-center mt-2"> {{auth()->user()->username}} </h1>
                @endauth
                <!-- Instrucciones de descarga -->
                <p class="text-center mt-2">En esta sección, puedes descargar los formularios correspondientes al censo 2023. Cuando finalices con el llenado de estos, subelos en el apartado de subir formularios.</p>
                <!-- Descargar todo -->
                <a class="btn mt-1" href="{{ asset('storage/01_2_CNGE_2023_M1_S2_VF_02mar23.xlsx') }}" download="Bloque de cuestionarios.rar">
                  <i class="fa-solid fa-download"></i> Descargar todos los formularios
                </a>
                <!-- Tabla de descarga -->
                <table class="table table-striped mt-3 text-center">
                  <!-- Encabezado tabla -->
                  <tr>
                      <th scope="col">&nbsp;</th>
                      <th scope="col">Nombre del Archivo</th>
                      <th scope="col">&nbsp;</th>
                      <th scope="col">&nbsp;</th>
                  </tr>
                  <!-- Formularios -->
                  <!-- 1 -->
                  <tr>
                    <td class="ps-4">&nbsp;</td>
                    <td class="col-4">01_1_CNGE_2023_M1_S1_VF_02mar23</td>
                    <td>
                      <a class="descarga" download="01_1_CNGE_2023_M1_S1_VF_02mar23.xlsx" href="{{ asset('storage/01_1_CNGE_2023_M1_S1_VF_02mar23.xlsx') }}">
                        <i class="fa-solid fa-download"></i>
                      </a>
                    </td>
                    <td>&nbsp;</td>
                  </tr>
                  <!-- 2 -->
                  <tr>
                    <td>&nbsp;</td>
                    <td class="col-4">01_2_CNGE_2023_M1_S2_VF_02mar23</td>
                    <td>
                      <a class="descarga" download="01_2_CNGE_2023_M1_S2_VF_02mar23.xlsx" href="{{ asset('storage/01_2_CNGE_2023_M1_S2_VF_02mar23.xlsx') }}">
                        <i class="fa-solid fa-download"></i>
                      </a>
                    </td>
                    <td>&nbsp;</td>
                  </tr>
                  <!-- 3 -->
                  <tr>
                    <td>&nbsp;</td>
                    <td class="col-4">01_3_CNGE_2023_M1_S3_VF_01jun23</td>
                    <td>
                      <a class="descarga" download="01_3_CNGE_2023_M1_S3_VF_01jun23.xlsx" href="{{ asset('storage/01_3_CNGE_2023_M1_S3_VF_01jun23.xlsx') }}">
                        <i class="fa-solid fa-download"></i>
                      </a>
                    </td>
                    <td>&nbsp;</td>
                  </tr>
                  <!-- 4 -->
                  <tr>
                    <td>&nbsp;</td>
                    <td class="col-4">01_4_CNGE_2023_M1_S4_VF_28mar23</td>
                    <td>
                      <a class="descarga" download="01_4_CNGE_2023_M1_S4_VF_28mar23.xlsx" href="{{ asset('storage/01_4_CNGE_2023_M1_S4_VF_28mar23.xlsx') }}">
                        <i class="fa-solid fa-download"></i>
                      </a>
                    </td>
                    <td>&nbsp;</td>
                  </tr>
                  <!-- 5 -->
                  <tr>
                    <td>&nbsp;</td>
                    <td class="col-4">01_5_CNGE_2023_M1_S5_VF_02mar23</td>
                    <td>
                      <a class="descarga" download="01_5_CNGE_2023_M1_S5_VF_02mar23.xlsx" href="{{ asset('storage/01_5_CNGE_2023_M1_S5_VF_02mar23.xlsx') }}">
                        <i class="fa-solid fa-download"></i>
                      </a>
                    </td>
                    <td>&nbsp;</td>
                  </tr>
                  <!-- 6 -->
                   <tr>
                    <td>&nbsp;</td>
                    <td class="col-4">01_6_CNGE_2023_M1_S6_VF_02mar23</td>
                    <td>
                      <a class="descarga" download="01_6_CNGE_2023_M1_S6_VF_02mar23.xlsx" href="{{ asset('storage/01_6_CNGE_2023_M1_S6_VF_02mar23.xlsx') }}">
                        <i class="fa-solid fa-download"></i>
                      </a>
                    </td>
                    <td>&nbsp;</td>
                  </tr>
                  <!-- 7 -->
                  <tr>
                    <td>&nbsp;</td>
                    <td class="col-4">01_7_CNGE_2023_M1_S7_VF_02mar23</td>
                    <td>
                      <a class="descarga" download="01_7_CNGE_2023_M1_S7_VF_02mar23.xlsx" href="{{ asset('storage/01_7_CNGE_2023_M1_S7_VF_02mar23.xlsx') }}">
                        <i class="fa-solid fa-download"></i>
                      </a>
                    </td>
                    <td>&nbsp;</td>
                  </tr>
                  <!-- 8 -->
                  <tr>
                    <td>&nbsp;</td>
                    <td class="col-4">01_11_CNGE_2023_M1_S11_VF_02mar23</td>
                    <td>
                      <a class="descarga" download="01_11_CNGE_2023_M1_S11_VF_02mar23.xlsx" href="{{ asset('storage/01_11_CNGE_2023_M1_S11_VF_02mar23.xlsx') }}">
                        <i class="fa-solid fa-download"></i>
                      </a>
                    </td>
                    <td>&nbsp;</td>
                  </tr>
                  <!-- 9 -->
                  <tr>
                    <td>&nbsp;</td>
                    <td class="col-4">01_12_CNGE_2023_M1_S12_VF_19may23</td>
                    <td>
                      <a class="descarga" download="01_12_CNGE_2023_M1_S12_VF_19may23.xlsx" href="{{ asset('storage/01_12_CNGE_2023_M1_S12_VF_19may23.xlsx') }}">
                        <i class="fa-solid fa-download"></i>
                      </a>
                    </td>
                    <td>&nbsp;</td>
                  </tr>
                  <!-- 10 -->
                  <tr>
                    <td>&nbsp;</td>
                    <td class="col-4">02_CNGE_2023_M2_VF_01Jun23</td>
                    <td>
                      <a class="descarga" download="02_CNGE_2023_M2_VF_01Jun23.xlsx" href="{{ asset('storage/02_CNGE_2023_M2_VF_01Jun23.xlsx') }}">
                        <i class="fa-solid fa-download"></i>
                      </a>
                    </td>
                    <td>&nbsp;</td>
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



<!-- Carga de archivos -->
<!-- <script>
// Archivo 1
document.getElementById('formularioArchivo').addEventListener('submit', function(event) {
    event.preventDefault();
    var archivoInput = document.getElementById('archivo');
    var archivo = archivoInput.files[0];
    var formData = new FormData();
    formData.append('archivo', archivo);
    formData.append('userId', document.getElementById('userId').value); // Agregar userId al formData

    fetch('/guardar_archivo.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            alert(data.message);
            if (data.success && archivo) {
                document.getElementById('botonArchivo').style.display = 'none';
                updateProgressBar();
            }
        })
        .catch(error => console.error('Error:', error));
});

// Archivo 2
document.getElementById('formularioArchivo2').addEventListener('submit', function(event) {
    event.preventDefault();
    var archivoInput2 = document.getElementById('archivo2');
    var archivo = archivoInput2.files[0];
    var formData = new FormData();
    formData.append('archivo2', archivo);
    formData.append('userId2', document.getElementById('userId2').value); // Agregar userId al formData

    fetch('/guardar_archivo2.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            alert(data.message);
            if (data.success && archivo) {
                document.getElementById('botonArchivo2').style.display = 'none';
                updateProgressBar();
            }
        })
        .catch(error => console.error('Error:', error));
});
</script> -->


@endsection


