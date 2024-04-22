<?php
if (isset($_FILES['archivo'])) {
    $userId = $_POST['userId'];
    dd($userId);
    echo "Elid es:";
    echo $userId;
    $ruta = 'uploads/' . $_FILES['archivo']['name'];
    move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta);

    // Guardar la ruta del archivo en la base de datos
    // Primero, asegúrate de que estás conectado a tu base de datos
    

    // Configura la conexión a la base de datos (reemplaza los valores con los tuyos)
    $servername = "localhost";
    $username = "root";
    $password = "admin";
    $dbname = "formulario1";

    // Crea la conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica la conexión
    if ($conn->connect_error) {
        die("La conexión falló: " . $conn->connect_error);
    }

    // Obtener el ID del usuario
   

    // Prepara la consulta SQL para actualizar la ruta del archivo en la tabla 'users'
    $sql = "UPDATE users SET rutaF1 = '$ruta' WHERE id = $userId";

    // Ejecuta la consulta
    if ($conn->query($sql) === TRUE) {
        echo json_encode(['success' => true, 'message' => 'Archivo cargado exitosamente']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error al guardar la ruta del archivo en la base de datos: ' . $conn->error]);
    }

    // Cierra la conexión
    $conn->close();
} else {
    echo json_encode(['success' => false, 'message' => 'No se proporcionó ningún archivo']);
}