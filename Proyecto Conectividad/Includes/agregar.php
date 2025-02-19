<?php
$conn = new mysqli("localhost", "root", "", "perros");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$codigo = $_POST['codigo'];
$raza = $_POST['raza'];
$edad = $_POST['edad'];

$sql = "INSERT INTO perros (nombre, codigo, raza, edad) VALUES ('$nombre', '$codigo', '$raza', $edad)";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo perro agregado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: index.php");
?>