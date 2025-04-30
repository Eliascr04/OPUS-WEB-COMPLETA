<?php
$host = 'localhost';
$db = 'bibliotecamuskiz';
$user = 'alumno1';
$pass = 'alumno1';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM libros_xml");
if (!$result) {
    die("Error en la consulta: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Libros Importados</title>
    <link rel="stylesheet" href="libros-importados.css"> <!-- Estilos específicos para libros importados -->
</head>
<body>
    <h1>📚 Libros Importados desde XML</h1>
    <?php if ($result->num_rows > 0): ?>
    <table border="1" cellpadding="10" cellspacing="0">
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
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= htmlspecialchars($row['id']) ?></td>
            <td><?= htmlspecialchars($row['titulo']) ?></td>
            <td><?= htmlspecialchars($row['autor']) ?></td>
            <td><?= htmlspecialchars($row['fechaPublicacion']) ?></td>
            <td><?= htmlspecialchars($row['numPaginas']) ?></td>
            <td><?= htmlspecialchars($row['genero']) ?></td>
            <td><?= htmlspecialchars($row['edadRecomendada']) ?></td>
            <td><img src="<?= htmlspecialchars($row['portada']) ?>" alt="Portada" width="100"></td>
        </tr>
        <?php endwhile; ?>
    </table>
    <?php else: ?>
        <p>No hay libros importados aún.</p>
    <?php endif; ?>

    <br><br>
    <a href="index.php">← Volver al inicio</a>
</body>
</html>

<?php $conn->close(); ?>