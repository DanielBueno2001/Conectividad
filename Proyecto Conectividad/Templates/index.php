<?php
$conn = new mysqli("localhost", "root", "", "perros");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM perros";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Perros</title>
</head>
<body>
    <h1>Lista de Perros</h1>
    <a href="agregar.html">Agregar Perro</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Código</th>
            <th>Raza</th>
            <th>Edad</th>
            <th>Acciones</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['nombre']}</td>
                        <td>{$row['codigo']}</td>
                        <td>{$row['raza']}</td>
                        <td>{$row['edad']}</td>
                        <td>
                            <a href='editar.php?id={$row['id']}'>Editar</a>
                            <a href='eliminar.php?id={$row['id']}'>Eliminar</a>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No hay perros registrados</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>