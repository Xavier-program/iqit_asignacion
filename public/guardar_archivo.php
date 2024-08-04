<?php
if (isset($_FILES['archivo']) && isset($_POST['userId']) && isset($_POST['rutaColumn'])) {
    $userId = $_POST['userId']; // Obtener userId del formulario
    $rutaColumn = $_POST['rutaColumn']; // Obtener la columna de la ruta del formulario
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

    // Escapar las variables para evitar inyección SQL
    $userId = $conn->real_escape_string($userId);
    $ruta = $conn->real_escape_string($ruta);
    $rutaColumn = $conn->real_escape_string($rutaColumn);

    // Preparar la consulta SQL para actualizar la ruta del archivo en la tabla 'users'
    $sql = "UPDATE users SET $rutaColumn = '$ruta' WHERE id = $userId";

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        echo json_encode(['success' => true, 'message' => 'Archivo cargado exitosamente']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error al guardar la ruta del archivo en la base de datos: ' . $conn->error]);
    }

    // Cerrar la conexión
    $conn->close();
} else {
    echo json_encode(['success' => false, 'message' => 'No se proporcionó ningún archivo, ID de usuario o columna de ruta']);
}
?>
