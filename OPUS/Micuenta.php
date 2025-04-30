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

    <title>Biblioteca Municipal Muskiz</title> <!-- Título de la página -->
    <link rel="shortcut icon" href="imagen/favicon.ico" type="image/x-icon"> <!-- Icono de la pagina -->
    <link rel="stylesheet" href="sytles8.css"> <!-- Enlace a la hoja de estilos CSS --> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
        <img alt="Logo" src="imagen/logo1.png">
        <div class="nav">
          <a  href="index.php">INICIO</a>
          <a href="libros.php">LIBROS</a>
          <div class="more">
              <a href="conocenos.php">CONÓCENOS <i class="fas fa-caret-down"></i></a>
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
    <div class="container2">
        <h1>Mi cuenta</h1>
        <div class="grid">
            <div class="card">
                <a href="Mispedidos.php" class="card-link">
                <img alt="Icono de Mis pedidos" src="imagen/pedidos.png">
                <div>
                    <h2>Mis pedidos</h2>
                    <p>Rastrear, devolver, cancelar un pedido de un libro, ver ultimos libros adquiridos.</p>
                </div>
            </a>
            </div>
            <div class="card">
                <a href="Mis_reservas.php" class="card-link">
                <img alt="Icono de Reserva" src="imagen/reserva.png"/>
                <div>
                    <h2>Mis reservas de libros</h2>
                    <p>Aquí podrás observar la reserva de libros que has hecho.</p>
                </div>
               </a>
            </div>
            <div class="card">
                <a href="https://liburuganbara.eus/ferias-libro-euskadi/calendario-de-ferias-de-libro/" class="card-link">
                <img alt="Tus autores/libros favoritos en Euskadi" src="imagen/autores.png"/>
                <div>
                    <h2>Mis autores favoritos</h2>
                    <p>Tus autores favoritos te esperan, consultar el calendario aquí</p>
                </div>
            </a>
            </div>
            <div class="card">
                <a href="https://www.google.es/maps/place/Muskizko+Udal+Liburutegia/@43.3220252,-3.1233716,603m/data=!3m2!1e3!4b1!4m6!3m5!1s0xd4ef7ca0c775669:0x5e685606625ffe34!8m2!3d43.3220214!4d-3.1185007!16s%2Fm%2F0hph8zj?hl=es&entry=ttu&g_ep=EgoyMDI1MDEyNy4wIKXMDSoASAFQAw%3D%3D" class="card-link">
                <img alt="Icono de Direcciones" src="imagen/mapa.png"/>
                <div>
                    <h2>Direccion de la libreria</h2>
                    <p>De lunes a viernes: 10:00 - 13:00 y 16:00 - 19:45.</p>
                    <p>Sábados y domingos cerrado.</p>
                </div>
            </a>
            </div>
            <div class="card">
    <a href="cerrar_sesion.php" class="card-link"> <!-- Cambia "cuenta.php" por "cerrar_sesion.php" -->
        <img alt="Configura tu cuenta" src="imagen/cuenta.png"/>
        <div>
            <h2>Cerrar Sesión</h2>
            <p>Dandole click aquí cierras sesión automáticamente</p>
        </div>
    </a>                
</div>
            <div class="card">
                <a href="Penalizaciones.php "  class="card-link">
                <img alt="Icono de Penalizaciones" src="imagen/penal.png"/>
                <div>
                    <h2>Mis Penalizaciones</h2>
                    <p>Administrar o añadir métodos de pago y ver tus transacciones</p>
                </div>
            </a>
            </div>
            <div class="card">
                <a href="contacto.php" class="card-link">
                <img alt="Icono de Contacto" src="imagen/contacto.png"/>
                <div>
                    <h2>Contacto</h2>
                    <p>Contacta con nosotros para cualquier consulta o problema</p>
                </div>
            </a>
            </div>
            <div class="card">
                <a href="https://www.muskiz.org/es-ES/Ayuntamiento/Paginas/default.aspx target=”_blank” " class="card-link">
                <img alt="Icono de Ayuntamiento" src="imagen/logo1.png"/>
                <div>
                    <h2>Servicio de ayuntamiento</h2>
                    <p>Puedes acceder aquí al ayuntamiento de Muskiz</p>
                </div>  
            </a>              
            </div>
            <div class="card">
                <a href="https://www.muskiz.org/es-ES/Servicios/Paginas/default.aspx target=”_blank” " class="card-link">
                <img alt="Icono de mensajería" src="imagen/servicios.png"/>
                <div>
                    <h2>Servicio de Muzkiz</h2>
                    <p>Ver todos los servicios y sus telefonos para poder acceder a ellos</p>
                </div>
            </a>
            </div>
            </div>
        </div>
    </div>
</body>
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
</html>
</html>