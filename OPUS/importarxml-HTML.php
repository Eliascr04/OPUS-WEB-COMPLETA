<?php
$host = 'localhost';
$db = 'bibliotecamuskiz';
$user = 'alumno1';
$pass = 'alumno1';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    exit("Conexión fallida: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM libros_xml"); 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Libros importados</title>
    <link rel="stylesheet" href="libros-importados.css">
</head>
<body>
    <a href="index.php">INICIO</a>
    <h1>Libros Importados desde XML</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Fecha Publicación</th>
            <th>Número de Páginas</th>
            <th>Género</th>
            <th>Edad Recomendada</th>
            <th>Portada</th>
        </tr>
        <?php
// Ejecutar la consulta
$result = $conn->query("SELECT * FROM libros_xml");

// Mostrar los datos
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['titulo'] . "</td>";
    echo "<td>" . $row['autor'] . "</td>";
    echo "<td>" . $row['fechaPublicacion'] . "</td>";
    echo "<td>" . $row['numPaginas'] . "</td>";
    echo "<td>" . $row['genero'] . "</td>";
    echo "<td>" . $row['edadRecomendada'] . "</td>";
    echo "<td><img src='" . $row['portada'] . "' width='100' alt='Portada'></td>";
    echo "</tr>";
    }
    ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>