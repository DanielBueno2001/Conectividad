<?php
$conn = new mysqli("localhost", "root", "", "perros");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];
$sql = "DELETE FROM perros WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Perro eliminado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: index.php");
?>