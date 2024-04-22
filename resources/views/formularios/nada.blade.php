<!-- @extends('layouts/template')
@include('layouts/header')
@include('layouts/sidebarUser')
@section('contenido')

<div class="content-wrapper">
    <div class="row-md-12">
        <div class="col-md-12">
            <div class="card mb-5">
                <title>Lista de Archivos</title>
                <h1>Lista de Archivos</h1>
                <label class="h6" for="campo1">Progreso</label>
                <div class="progress mb-3">
                    <div id="progressBar" class="progress-bar" role="progressbar" style="width: 0%;"
                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                </div>

                <table class="table table-striped">
                  <tr>
                      <th scope="col">Nombre del Archivo</th>
                      <th scope="col">Descargar</th>
                      <th scope="col">Cargar archivo</th>
                      <th scope="col">Archivo Cargado</th>
                  </tr>
                  <tr>
                      <td class="col-3">01_1_CNGE_2023_M1_S1_VF_02mar23</td>
                      <td><a class="descarga" href="storage/01_1_CNGE_2023_M1_S1_VF_02mar23.xlsx"
                              download="01_1_CNGE_2023_M1_S1_VF_02mar23.xlsx">DESCARGA</a></td>
                      <td>
                          <form class="col-8  align-items-center" id="formularioArchivo"
                              enctype="multipart/form-data">
                              <input type="file" id="archivoInput" name="archivo">
                              <button id="botonArchivo" class="btn btn-primary " style="width: 70%;"
                                  type="submit">Cargar Archivo</button>
                          </form>
                      </td>
                      <td class="col-2"><input id="checkboxArchivo" type="checkbox"></td>
                  </tr>
                  <tr>
                    <td class="col-3">01_2_CNGE_2023_M1_S2_VF_02mar23</td>
                      <td><a class="descarga" href="storage/01_1_CNGE_2023_M1_S1_VF_02mar23.xlsx" download="01_1_CNGE_2023_M1_S1_VF_02mar23.xlsx">DESCARGA</a></td>
                      <td>
                        <form class="col-8  align-items-center" id="formularioArchivo1" enctype="multipart/form-data">
                          <input type="file" id="archivoInput1" name="archivo">
                          <button id="botonArchivo1" class="btn btn-primary " style="width: 70%;" type="submit">Cargar Archivo</button>
                        </form>
                      </td>
                    <td class="col-2"><input id="checkboxArchivo1" type="checkbox"></td>
                  </tr>

                  <tr>
                    <td class="col-3">01_1_CNGE_2023_M1_S1_VF_02mar23</td>
                      <td><a class="descarga" href="storage/01_1_CNGE_2023_M1_S1_VF_02mar23.xlsx" download="01_1_CNGE_2023_M1_S1_VF_02mar23.xlsx">DESCARGA</a></td>
                      <td>
                        <form class="col-8  align-items-center" id="formularioArchivo2" enctype="multipart/form-data">
                          <input type="file" id="archivoInput2" name="archivo">
                          <button id="botonArchivo2" class="btn btn-primary " style="width: 70%;" type="submit">Cargar Archivo</button>
                        </form>
                      </td>
                    <td class="col-2"><input id="checkboxArchivo2" type="checkbox"></td>
                  </tr>

                <tr>
                    <td class="col-3">01_1_CNGE_2023_M1_S1_VF_02mar23</td>
                      <td><a class="descarga" href="storage/01_1_CNGE_2023_M1_S1_VF_02mar23.xlsx" download="01_1_CNGE_2023_M1_S1_VF_02mar23.xlsx">DESCARGA</a></td>
                      <td>
                        <form class="col-8  align-items-center" id="formularioArchivo3" enctype="multipart/form-data">
                          <input type="file" id="archivoInput3" name="archivo">
                          <button id="botonArchivo3" class="btn btn-primary " style="width: 70%;" type="submit">Cargar Archivo</button>
                        </form>
                      </td>
                    <td class="col-2"><input id="checkboxArchivo3" type="checkbox"></td>
                  </tr>

                  <tr>
                    <td class="col-3">01_1_CNGE_2023_M1_S1_VF_02mar23</td>
                      <td><a class="descarga" href="storage/01_1_CNGE_2023_M1_S1_VF_02mar23.xlsx" download="01_1_CNGE_2023_M1_S1_VF_02mar23.xlsx">DESCARGA</a></td>
                      <td>
                        <form class="col-8  align-items-center" id="formularioArchivo4" enctype="multipart/form-data">
                          <input type="file" id="archivoInput4" name="archivo">
                          <button id="botonArchivo4" class="btn btn-primary " style="width: 70%;" type="submit">Cargar Archivo</button>
                        </form>
                      </td>
                    <td class="col-2"><input id="checkboxArchivo4" type="checkbox"></td>
                  </tr>

                  <tr>
                    <td class="col-3">01_1_CNGE_2023_M1_S1_VF_02mar23</td>
                      <td><a class="descarga" href="storage/01_1_CNGE_2023_M1_S1_VF_02mar23.xlsx" download="01_1_CNGE_2023_M1_S1_VF_02mar23.xlsx">DESCARGA</a></td>
                      <td>
                        <form class="col-8  align-items-center" id="formularioArchivo5" enctype="multipart/form-data">
                          <input type="file" id="archivoInput5" name="archivo">
                          <button id="botonArchivo5" class="btn btn-primary " style="width: 70%;" type="submit">Cargar Archivo</button>
                        </form>
                      </td>
                    <td class="col-2"><input id="checkboxArchivo5" type="checkbox"></td>
                  </tr>

                  <tr>
                    <td class="col-3">01_1_CNGE_2023_M1_S1_VF_02mar23</td>
                      <td><a class="descarga" href="storage/01_1_CNGE_2023_M1_S1_VF_02mar23.xlsx" download="01_1_CNGE_2023_M1_S1_VF_02mar23.xlsx">DESCARGA</a></td>
                      <td>
                        <form class="col-8  align-items-center" id="formularioArchivo6" enctype="multipart/form-data">
                          <input type="file" id="archivoInput6" name="archivo">
                          <button id="botonArchivo6" class="btn btn-primary " style="width: 70%;" type="submit">Cargar Archivo</button>
                        </form>
                      </td>
                    <td class="col-2"><input id="checkboxArchivo6" type="checkbox"></td>
                  </tr>

                  <tr>
                    <td class="col-3">01_1_CNGE_2023_M1_S1_VF_02mar23</td>
                      <td><a class="descarga" href="storage/01_1_CNGE_2023_M1_S1_VF_02mar23.xlsx" download="01_1_CNGE_2023_M1_S1_VF_02mar23.xlsx">DESCARGA</a></td>
                      <td>
                        <form class="col-8  align-items-center" id="formularioArchivo7" enctype="multipart/form-data">
                          <input type="file" id="archivoInput" name="archivo">
                          <button id="botonArchivo7" class="btn btn-primary " style="width: 70%;" type="submit">Cargar Archivo</button>
                        </form>
                      </td>
                    <td class="col-2"><input id="checkboxArchivo7" type="checkbox"></td>
                  </tr>

                  <tr>
                    <td class="col-3">01_1_CNGE_2023_M1_S1_VF_02mar23</td>
                      <td><a class="descarga" href="storage/01_1_CNGE_2023_M1_S1_VF_02mar23.xlsx" download="01_1_CNGE_2023_M1_S1_VF_02mar23.xlsx">DESCARGA</a></td>
                      <td>
                        <form class="col-8  align-items-center" id="formularioArchivo8" enctype="multipart/form-data">
                          <input type="file" id="archivoInput8" name="archivo">
                          <button id="botonArchivo8" class="btn btn-primary " style="width: 70%;" type="submit">Cargar Archivo</button>
                        </form>
                      </td>
                    <td class="col-2"><input id="checkboxArchivo8" type="checkbox"></td>
                  </tr>

                  <tr>
                    <td class="col-3">01_1_CNGE_2023_M1_S1_VF_02mar23</td>
                      <td><a class="descarga" href="storage/01_1_CNGE_2023_M1_S1_VF_02mar23.xlsx" download="01_1_CNGE_2023_M1_S1_VF_02mar23.xlsx">DESCARGA</a></td>
                      <td>
                        <form class="col-8  align-items-center" id="formularioArchivo9" enctype="multipart/form-data">
                          <input type="file" id="archivoInput9" name="archivo">
                          <button id="botonArchivo9" class="btn btn-primary " style="width: 70%;" type="submit">Cargar Archivo</button>
                        </form>
                      </td>
                    <td class="col-2"><input id="checkboxArchivo9" type="checkbox"></td>
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
@endsection -->

<!-- JS -->
<!-- Carga de archivos -->
<script>
  document.getElementById('formularioArchivo').addEventListener('submit', function(event) {
    event.preventDefault();

    var archivoInput = document.getElementById('archivoInput');
    var archivo = archivoInput.files[0];
    var formData = new FormData();
    formData.append('archivo', archivo);

    // Enviar el archivo al servidor mediante una solicitud AJAX
    fetch('/guardar_archivo.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message);
        // Opcional: puedes realizar otras acciones después de guardar el archivo, como actualizar una lista de archivos cargados
        if (data.success && archivo) {
            document.getElementById('botonArchivo').style.display = 'none';
            document.getElementById('checkboxArchivo').checked = true;
            document.getElementById('checkboxArchivo').parentNode.style.backgroundColor = '';
            updateProgressBar();
        }

    })
    .catch(error => console.error('Error:', error));
  });

  document.getElementById('formularioArchivo1').addEventListener('submit', function(event) {
    event.preventDefault();

    var archivoInput1 = document.getElementById('archivoInput1');
    var archivo = archivoInput1.files[0];
    var formData = new FormData();
    formData.append('archivo', archivo);

    // Enviar el archivo al servidor mediante una solicitud AJAX
    fetch('/guardar_archivo.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message);
        // Opcional: puedes realizar otras acciones después de guardar el archivo, como actualizar una lista de archivos cargados
        if (data.success && archivo) {
            document.getElementById('botonArchivo1').style.display = 'none';
            document.getElementById('checkboxArchivo1').checked = true;
            document.getElementById('checkboxArchivo1').parentNode.style.backgroundColor = '';
            updateProgressBar();
        }
    })
    .catch(error => console.error('Error:', error));
  });

  document.getElementById('formularioArchivo2').addEventListener('submit', function(event) {
    event.preventDefault();

    var archivoInput2 = document.getElementById('archivoInput2');
    var archivo = archivoInput2.files[0];
    var formData = new FormData();
    formData.append('archivo', archivo);

    // Enviar el archivo al servidor mediante una solicitud AJAX
    fetch('/guardar_archivo.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message);
        // Opcional: puedes realizar otras acciones después de guardar el archivo, como actualizar una lista de archivos cargados
        if (data.success && archivo) {
            document.getElementById('botonArchivo2').style.display = 'none';
            document.getElementById('checkboxArchivo2').checked = true;
            document.getElementById('checkboxArchivo2').parentNode.style.backgroundColor = '';
            updateProgressBar();
        }
    })
    .catch(error => console.error('Error:', error));
  });

  document.getElementById('formularioArchivo3').addEventListener('submit', function(event) {
    event.preventDefault();

    var archivoInput3 = document.getElementById('archivoInput3');
    var archivo = archivoInput3.files[0];
    var formData = new FormData();
    formData.append('archivo', archivo);

    // Enviar el archivo al servidor mediante una solicitud AJAX
    fetch('/guardar_archivo.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message);
        // Opcional: puedes realizar otras acciones después de guardar el archivo, como actualizar una lista de archivos cargados
        if (data.success && archivo) {
            document.getElementById('botonArchivo3').style.display = 'none';
            document.getElementById('checkboxArchivo3').checked = true;
            document.getElementById('checkboxArchivo3').parentNode.style.backgroundColor = '';
            updateProgressBar();
        }
    })
    .catch(error => console.error('Error:', error));
  });

  document.getElementById('formularioArchivo4').addEventListener('submit', function(event) {
    event.preventDefault();

    var archivoInput4 = document.getElementById('archivoInput4');
    var archivo = archivoInput4.files[0];
    var formData = new FormData();
    formData.append('archivo', archivo);

    // Enviar el archivo al servidor mediante una solicitud AJAX
    fetch('/guardar_archivo.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message);
        // Opcional: puedes realizar otras acciones después de guardar el archivo, como actualizar una lista de archivos cargados
        if (data.success && archivo) {
            document.getElementById('botonArchivo4').style.display = 'none';
            document.getElementById('checkboxArchivo4').checked = true;
            document.getElementById('checkboxArchivo4').parentNode.style.backgroundColor = '';
            updateProgressBar();
        }
    })
    .catch(error => console.error('Error:', error));
  });

  document.getElementById('formularioArchivo5').addEventListener('submit', function(event) {
    event.preventDefault();

    var archivoInput5 = document.getElementById('archivoInput5');
    var archivo = archivoInput5.files[0];
    var formData = new FormData();
    formData.append('archivo', archivo);

    // Enviar el archivo al servidor mediante una solicitud AJAX
    fetch('/guardar_archivo.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message);
        // Opcional: puedes realizar otras acciones después de guardar el archivo, como actualizar una lista de archivos cargados
        if (data.success && archivo) {
            document.getElementById('botonArchivo5').style.display = 'none';
            document.getElementById('checkboxArchivo5').checked = true;
            document.getElementById('checkboxArchivo5').parentNode.style.backgroundColor = '';
            updateProgressBar();
        }
    })
    .catch(error => console.error('Error:', error));
  });

  document.getElementById('formularioArchivo6').addEventListener('submit', function(event) {
    event.preventDefault();

    var archivoInput6 = document.getElementById('archivoInput6');
    var archivo = archivoInput6.files[0];
    var formData = new FormData();
    formData.append('archivo', archivo);

    // Enviar el archivo al servidor mediante una solicitud AJAX
    fetch('/guardar_archivo.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message);
        // Opcional: puedes realizar otras acciones después de guardar el archivo, como actualizar una lista de archivos cargados
        if (data.success && archivo) {
            document.getElementById('botonArchivo6').style.display = 'none';
            document.getElementById('checkboxArchivo6').checked = true;
            document.getElementById('checkboxArchivo6').parentNode.style.backgroundColor = '';
            updateProgressBar();
        }
    })
    .catch(error => console.error('Error:', error));
  });

  document.getElementById('formularioArchivo7').addEventListener('submit', function(event) {
    event.preventDefault();

    var archivoInput7 = document.getElementById('archivoInput7');
    var archivo = archivoInput7.files[0];
    var formData = new FormData();
    formData.append('archivo', archivo);

    // Enviar el archivo al servidor mediante una solicitud AJAX
    fetch('/guardar_archivo.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message);
        // Opcional: puedes realizar otras acciones después de guardar el archivo, como actualizar una lista de archivos cargados
        if (data.success && archivo) {
            document.getElementById('botonArchivo7').style.display = 'none';
            document.getElementById('checkboxArchivo7').checked = true;
            document.getElementById('checkboxArchivo7').parentNode.style.backgroundColor = '';
            updateProgressBar();
        }
    })
    .catch(error => console.error('Error:', error));
  });

  document.getElementById('formularioArchivo8').addEventListener('submit', function(event) {
    event.preventDefault();

    var archivoInput8 = document.getElementById('archivoInput8');
    var archivo = archivoInput8.files[0];
    var formData = new FormData();
    formData.append('archivo', archivo);

    // Enviar el archivo al servidor mediante una solicitud AJAX
    fetch('/guardar_archivo.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message);
        // Opcional: puedes realizar otras acciones después de guardar el archivo, como actualizar una lista de archivos cargados
        if (data.success && archivo) {
            document.getElementById('botonArchivo8').style.display = 'none';
            document.getElementById('checkboxArchivo8').checked = true;
            document.getElementById('checkboxArchivo8').parentNode.style.backgroundColor = '';
            updateProgressBar();
        }
    })
    .catch(error => console.error('Error:', error));
  });

  document.getElementById('formularioArchivo9').addEventListener('submit', function(event) {
    event.preventDefault();

    var archivoInput9 = document.getElementById('archivoInput9');
    var archivo = archivoInput9.files[0];
    var formData = new FormData();
    formData.append('archivo', archivo);

    // Enviar el archivo al servidor mediante una solicitud AJAX
    fetch('/guardar_archivo.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message);
        // Opcional: puedes realizar otras acciones después de guardar el archivo, como actualizar una lista de archivos cargados
        if (data.success  && archivo) {
            document.getElementById('botonArchivo9').style.display = 'none';
            document.getElementById('checkboxArchivo9').checked = true;
            document.getElementById('checkboxArchivo9').parentNode.style.backgroundColor = '';
            updateProgressBar();
        }
    })
    .catch(error => console.error('Error:', error));
  });
</script>
<!-- 

<tr>
                      <td class="col-3">01_2_CNGE_2023_M1_S2_VF_02mar23</td>
                        <td><a class="descarga" href="storage/01_1_CNGE_2023_M1_S1_VF_02mar23.xlsx" download="01_1_CNGE_2023_M1_S1_VF_02mar23.xlsx"><i class="fa-solid fa-download"></i></a></td>
                        <td>
                          <input type="file" name="rutaF2" id="rutaF2" class="form-control" value="{{ old('rutaF2') }}">
                        </td>
                        </td>
                      <td class="col-2"><input id="checkboxArchivo1" type="checkbox"></td>
                    </tr>

                    <tr>
                      <td class="col-3">01_1_CNGE_2023_M1_S1_VF_02mar23</td>
                        <td><a class="descarga" href="storage/01_1_CNGE_2023_M1_S1_VF_02mar23.xlsx" download="01_1_CNGE_2023_M1_S1_VF_02mar23.xlsx"><i class="fa-solid fa-download"></i></a></td>
                        <td>
                          <input type="file" name="rutaF3" id="rutaF3" class="form-control" value="{{ old('rutaF3') }}">
                        </td>
                      <td class="col-2"><input id="checkboxArchivo2" type="checkbox"></td>
                    </tr>

                  <tr>
                      <td class="col-3">01_1_CNGE_2023_M1_S1_VF_02mar23</td>
                        <td><a class="descarga" href="storage/01_1_CNGE_2023_M1_S1_VF_02mar23.xlsx" download="01_1_CNGE_2023_M1_S1_VF_02mar23.xlsx"><i class="fa-solid fa-download"></i></a></td>
                        <td>
                          <input type="file" name="rutaF4" id="rutaF4" class="form-control" value="{{ old('rutaF4') }}">
                        </td>
                      <td class="col-2"><input id="checkboxArchivo3" type="checkbox"></td>
                    </tr>

                    <tr>
                      <td class="col-3">01_1_CNGE_2023_M1_S1_VF_02mar23</td>
                        <td><a class="descarga" href="storage/01_1_CNGE_2023_M1_S1_VF_02mar23.xlsx" download="01_1_CNGE_2023_M1_S1_VF_02mar23.xlsx"><i class="fa-solid fa-download"></i></a></td>
                        <td>
                          <input type="file" name="rutaF5" id="rutaF5" class="form-control" value="{{ old('rutaF5') }}">
                        </td>
                      <td class="col-2"><input id="checkboxArchivo4" type="checkbox"></td>
                    </tr>

                    <tr>
                      <td class="col-3">01_1_CNGE_2023_M1_S1_VF_02mar23</td>
                        <td><a class="descarga" href="storage/01_1_CNGE_2023_M1_S1_VF_02mar23.xlsx" download="01_1_CNGE_2023_M1_S1_VF_02mar23.xlsx"><i class="fa-solid fa-download"></i></a></td>
                        <td>
                          <input type="file" name="rutaF6" id="rutaF6" class="form-control" value="{{ old('rutaF6') }}">
                        </td>
                      <td class="col-2"><input id="checkboxArchivo5" type="checkbox"></td>
                    </tr>

                    <tr>
                      <td class="col-3">01_1_CNGE_2023_M1_S1_VF_02mar23</td>
                        <td><a class="descarga" href="storage/01_1_CNGE_2023_M1_S1_VF_02mar23.xlsx" download="01_1_CNGE_2023_M1_S1_VF_02mar23.xlsx"><i class="fa-solid fa-download"></i></a></td>
                        <td>
                          <input type="file" name="rutaF7" id="rutaF7" class="form-control" value="{{ old('rutaF7') }}">
                        </td>
                      <td class="col-2"><input id="checkboxArchivo6" type="checkbox"></td>
                    </tr>

                    <tr>
                      <td class="col-3">01_1_CNGE_2023_M1_S1_VF_02mar23</td>
                        <td><a class="descarga" href="storage/01_1_CNGE_2023_M1_S1_VF_02mar23.xlsx" download="01_1_CNGE_2023_M1_S1_VF_02mar23.xlsx"><i class="fa-solid fa-download"></i></a></td>
                        <td>
                          <input type="file" name="rutaF8" id="rutaF8" class="form-control" value="{{ old('rutaF8') }}">
                        </td>
                      <td class="col-2"><input id="checkboxArchivo7" type="checkbox"></td>
                    </tr>

                    <tr>
                      <td class="col-3">01_1_CNGE_2023_M1_S1_VF_02mar23</td>
                        <td><a class="descarga" href="storage/01_1_CNGE_2023_M1_S1_VF_02mar23.xlsx" download="01_1_CNGE_2023_M1_S1_VF_02mar23.xlsx"><i class="fa-solid fa-download"></i></a></td>
                        <td>
                          <input type="file" name="rutaF9" id="rutaF9" class="form-control" value="{{ old('rutaF9') }}">
                        </td>
                      <td class="col-2"><input id="checkboxArchivo8" type="checkbox"></td>
                    </tr>

                    <tr>
                      <td class="col-3">01_1_CNGE_2023_M1_S1_VF_02mar23</td>
                        <td><a class="descarga" href="storage/01_1_CNGE_2023_M1_S1_VF_02mar23.xlsx" download="01_1_CNGE_2023_M1_S1_VF_02mar23.xlsx"><i class="fa-solid fa-download"></i></a></td>
                        <td>
                          <input type="file" name="rutaF10" id="rutaF10" class="form-control" value="{{ old('rutaF10') }}">
                        </td>
                      <td class="col-2"><input id="checkboxArchivo9" type="checkbox"></td>
                    </tr> -->










                    safAdsfsda
                    <?php
foreach ($_FILES as $key => $file) {
    if (isset($file)) {
        $userId = $_POST['userId']; // Obtener userId del formulario
        $ruta = 'uploads/' . $file['name'];
        move_uploaded_file($file['tmp_name'], $ruta);

        // Configurar la conexión a la base de datos (reemplaza los valores con los tuyos)
        $servername = "localhost";
        $username = "root";
        $password = "admin";
        $dbname = "formulario1";

        // Crear la conexión
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("La conexión falló: " . $conn->connect_error);
        }

        // Preparar la consulta SQL para actualizar la ruta del archivo en la tabla 'users'
        $sql = "UPDATE users SET $key = '$ruta' WHERE id = $userId";

        // Ejecutar la consulta
        if ($conn->query($sql) === TRUE) {
            echo json_encode(['success' => true, 'message' => 'Archivo cargado exitosamente']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error al guardar la ruta del archivo en la base de datos: ' . $conn->error]);
        }

        // Cerrar la conexión
        $conn->close();
    } else {
        echo json_encode(['success' => false, 'message' => 'No se proporcionó ningún archivo']);
    }
}
?>
