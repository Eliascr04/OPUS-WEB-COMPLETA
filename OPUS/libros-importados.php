<?php
// Asegúrate de tener la conexión a la base de datos o cualquier funcionalidad que necesites.
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Municipal Muskiz - Libros Importados</title>
    <link rel="shortcut icon" href="imagen/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles.css"> <!-- Asegúrate de que el estilo se carga correctamente -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
        <img alt="Logo" src="imagen/logo1.png">
        <div class="nav">
            <a href="index.html">INICIO</a>
            <a href="libros.php">LIBROS</a>
            <div class="more">
                <a href="#">CONÓCENOS <i class="fas fa-caret-down"></i></a>
                <div class="dropdown">
                    <a href="conocenos.php">Quiénes Somos</a>
                    <a href="servicios.php">Servicios</a>
                </div>
            </div>
            <a href="Sesion.php">INICIA SESIÓN</a>
            <a href="https://www.muskiz.org/es-ES/Ayuntamiento/Paginas/default.aspx">AYUNTAMIENTO</a>
            <a href="contacto.php">CONTACTO</a>
        </div>
        <div class="search">
            <i class="fas fa-search"></i>
            <i class="fas fa-bars"></i>
        </div>
    </div>
    <br>
    <br>

    <div class="content">
        <h1>Libros Importados desde XML</h1>
        <div class="rss-banner" style="width: 100%; height: auto; overflow-y: auto;">
            <?php
            // Si ya tienes la funcionalidad de cargar los libros desde la base de datos, añade el código aquí
            // Ejemplo básico de visualización de libros importados desde la base de datos
            // Usar una consulta para obtener los libros importados de la base de datos.

            // Ejemplo ficticio de cómo se mostrarían los libros en formato HTML (puedes adaptarlo según tu estructura)
            $libros = [
                ['titulo' => 'El pequeño libro del estoicismo', 'autor' => 'Jonas Salzgeber'],
                ['titulo' => 'El niño que perdió la guerra', 'autor' => 'Julia Navarro'],
                ['titulo' => 'La piedad del Primero', 'autor' => 'Pablo Bueno'],
                ['titulo' => '12 reglas para vivir: Un antídoto al caos', 'autor' => 'Jordan Peterson'],
            ];

            foreach ($libros as $libro) {
                echo "<div class='book'>";
                echo "<div class='book-title'>" . htmlspecialchars($libro['titulo']) . "</div>";
                echo "<div class='book-author'>por " . htmlspecialchars($libro['autor']) . "</div>";
                echo "<div class='book-price'>PRESTAR</div>";
                echo "</div>";
            }
            ?>
        </div>
    </div>

    <div class="footer">
        <p>©Librería de Muskiz 2025. Todos los derechos reservados | 94 670 70 75 | liburutegia@muskiz.com</p>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>

    <!-- Script para la parte de la búsqueda y otros elementos -->
    <script>
        // Puedes incluir cualquier script necesario aquí
    </script>
</body>
</html>