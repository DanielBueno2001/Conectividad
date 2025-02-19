<?php
// Datos de conexión a la base de datos
$servername = "localhost"; // Servidor de la base de datos (generalmente "localhost")
$username = "root";        // Nombre de usuario de la base de datos
$password = "";            // Contraseña de la base de datos (vacía por defecto en XAMPP)
$database = "perros";      // Nombre de la base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar si hay errores en la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Opcional: Configurar el charset a utf8 (recomendado para evitar problemas con caracteres especiales)
$conn->set_charset("utf8");

// Nota: No cierres la conexión aquí, ya que se cerrará en los archivos que la usen.
?>