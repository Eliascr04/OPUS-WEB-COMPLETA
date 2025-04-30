<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: Sesion.php");
    exit();
}

include 'conexion.php';

$cod_usuario = $_SESSION['usuario'];

// Obtener las reservas del usuario
$sql = "SELECT libros.TITULO, libros.URLIMG, reservas.fecha_reserva 
        FROM reservas 
        INNER JOIN libros ON reservas.isbn = libros.ISBN 
        WHERE reservas.cod_usuario = ?";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("i", $cod_usuario);
$stmt->execute();
$result = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="es">
<head>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="imagen/favicon.ico" type="image/x-icon"> <!-- Icono de la pagina -->
    <meta charset="UTF-8">
    <title>Penalizaciones</title>
    <link rel="stylesheet" href="styles12.css">
</head>
<body>
    <div class="header">
        <img alt="Logo" src="imagen/logo1.png">
        <div class="nav">
            <a  href="index.php">INICIO</a>
            <a href="libros.php">LIBROS</a>
            <div class="more">
                <a href="">CONÓCENOS <i class="fas fa-caret-down"></i></a>
                <div class="dropdown">
                    <a href="conocenos.php">Quiénes Somos</a>
                    <a href="servicios.php">Servicios</a>
                </div>
            </div>
            <a class="active" href="Sesion.php">INICIA SESIÓN</a>
            <a href="https://www.muskiz.org/es-ES/Ayuntamiento/Paginas/default.aspx">AYUNTAMIENTO</a>
            <a href="contacto.php">CONTACTO</a>
        </div>
        <div class="search">
            <i class="fas fa-search"></i>
            <i class="fas fa-bars"></i>
        </div>
    </div>
    <br><br>
    <div class="container">
    <h1>Mis Penalizaciones</h1>
    <hr>
    <table>
        <thead>
            <tr>
                <th>Motivo</th>
                <th>Fecha de inicio</th>
                <th>Fecha de fin</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Obtener las penalizaciones del usuario
            $sql = "SELECT motivo, fecha_inicio, fecha_fin 
                    FROM penalizaciones 
                    WHERE cod_usuario = ?";
            $stmt = $conexion->prepare($sql);
            $stmt->bind_param("i", $cod_usuario);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row['motivo'] . '</td>';
                    echo '<td>' . $row['fecha_inicio'] . '</td>';
                    echo '<td>' . $row['fecha_fin'] . '</td>';
                    echo '</tr>';
                }
            } else {
                echo '<tr><td colspan="3">No tienes penalizaciones.</td></tr>';
            }
            ?>
        </tbody>
    </table>
    <br>
    <a href="Micuenta.php" class="btn">Volver a Mi cuenta</a> <!-- Botón para volver a Mi cuenta -->
</div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="footer">
        <p>
            ©Libreria de Muskiz 2025. Todos los derechos reservados | 94 670 70 75 |
            liburutegia@muskiz.com
        </p>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</body>
</html>