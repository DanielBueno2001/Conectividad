<?php
$conn = new mysqli("localhost", "root", "", "perros");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$codigo = $_POST['codigo'];
$raza = $_POST['raza'];
$edad = $_POST['edad'];

$sql = "UPDATE perros SET nombre='$nombre', codigo='$codigo', raza='$raza', edad=$edad WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Perro actualizado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: index.php");
?>