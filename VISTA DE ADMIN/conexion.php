<?php
$servername = "localhost";  // Cambiar si la base de datos está en un servidor diferente
$username = "root";
$password = "admin";
$dbname = "horas_sociales";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}
?>

















