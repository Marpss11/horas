<?php
// Incluir el archivo de conexión a la base de datos
include 'conexion.php';

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$id_proyecto = $_POST['id_proyecto'];

// Preparar la consulta SQL para insertar datos
$sql = "INSERT INTO maestros (nombre, apellido, correo, id_proyecto) VALUES ('$nombre', '$apellido', '$correo', '$id_proyecto')";

if ($conn->query($sql) === TRUE) {
  echo "Nuevo registro creado correctamente";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>