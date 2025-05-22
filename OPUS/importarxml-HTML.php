<?php

$host = 'localhost';
$db = 'bibliotecamuskiz';
$user = 'alumno1';
$pass = 'alumno1';

//mysqli permite conectar a la base de datos mediante php
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    exit("Conexión fallida: ");
}
//ejecuta una consulta sql que selecciona todas ls columnas
//de todas las filas de la tabla y las guardamos en la variable result
$result = $conn->query("SELECT * FROM libros_xml");
//fetch_all recupera todas las filas
$libros = $result->fetch_all(MYSQLI_ASSOC);

$conn->close();
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
        <?php foreach ($libros as $row): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['titulo'] ?></td>
                <td><?= $row['autor'] ?></td>
                <td><?= $row['fechaPublicacion'] ?></td>
                <td><?= $row['numPaginas'] ?></td>
                <td><?= $row['genero'] ?></td>
                <td><?= $row['edadRecomendada'] ?></td>
                <td><img src="<?= $row['portada'] ?>" width="100" alt="Portada"></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>