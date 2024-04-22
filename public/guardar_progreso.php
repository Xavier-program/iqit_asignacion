<?php
// Verificar si se ha recibido el valor del progreso
if (isset($_POST['progress'])) {
    // Conectar a la base de datos (debes llenar los detalles de conexión)
    $conn = new mysqli("localhost", "root", "", "formularios");

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Sanitizar y obtener el valor del progreso
    $progress = intval($_POST['progress']); // Convertir el progreso a un entero

    // Insertar el progreso en la tabla user_progress
    $sql = "INSERT INTO user_progress (progress_percentage) VALUES ('$progress')";

    if ($conn->query($sql) === TRUE) {
        echo "Progreso guardado exitosamente en la base de datos";
    } else {
        echo "Error al guardar el progreso: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
} else {
    echo "No se recibió el valor del progreso";
}
?>

