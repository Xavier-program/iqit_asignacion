<?php
if (isset($_FILES['archivo'])) {
    $userId = $_POST['userId']; // Obtener userId del formulario
    $ruta = 'uploads/' . $_FILES['archivo']['name'];
    move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta);

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
    $sql = "UPDATE users SET rutaF5 = '$ruta' WHERE id = $userId";

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        echo json_encode(['success' => true, 'message' => 'Archivo cargado exitosamente']);
    }
     else {
        echo json_encode(['success' => false, 'message' => 'Error al guardar la ruta del archivo en la base de datos: ' . $conn->error]);
    }

    // Cerrar la conexión
    $conn->close();
} else {
    echo json_encode(['success' => false, 'message' => 'No se proporcionó ningún archivo']);
}
?>