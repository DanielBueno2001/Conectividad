<?php
$conn = new mysqli("localhost", "root", "", "perros");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];
$sql = "SELECT * FROM perros WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Perro</title>
</head>
<body>
    <h1>Editar Perro</h1>
    <form action="actualizar.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo $row['nombre']; ?>" required><br>
        <label for="codigo">Código:</label>
        <input type="text" id="codigo" name="codigo" value="<?php echo $row['codigo']; ?>" required><br>
        <label for="raza">Raza:</label>
        <input type="text" id="raza" name="raza" value="<?php echo $row['raza']; ?>" required><br>
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" value="<?php echo $row['edad']; ?>" required><br>
        <button type="submit">Actualizar</button>
    </form>
    <a href="index.php">Volver a la lista</a>
</body>
</html>

<?php
$conn->close();
?>