<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    // Si el usuario no está logueado, redirigir a Sesion.php
    header("Location: Sesion.php");
    exit();
}
?>
<html>
<!DOCTYPE html> <!-- Define el documento como HTML5 -->
<html lang="es"> <!-- Configura el idioma español -->
<head>
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Garantiza compatibilidad con Internet Explorer -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Diseño responsivo -->

    <title>Autores</title> <!-- Título de la página -->
    <link rel="shortcut icon" href="imagen/favicon.ico" type="image/x-icon"> <!-- Icono de la pagina -->
    <link rel="stylesheet" href="sytles11.css"> <!-- Enlace a la hoja de estilos CSS --> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="header">
      <img alt="Logo" src="imagen/logo1.png">
      <div class="nav">
        <a href="index.php">INICIO</a>
        <a href="libros.php">LIBROS</a>
        <div class="more">
            <a href="">CONÓCENOS <i class="fas fa-caret-down"></i></a>
            <div class="dropdown">
              <a href="conocenos.php">Quiénes Somos</a>
              <a href="servicios.php">Servicios</a>
            </div>
          </div>
        <a  class="active" href="Sesion.php">INICIA SESIÓN</a>
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

</body>
</html>