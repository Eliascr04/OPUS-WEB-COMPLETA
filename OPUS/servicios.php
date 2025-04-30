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

    <title>Servicios</title> <!-- Título de la página -->
    <link rel="shortcut icon" href="imagen/favicon.ico" type="image/x-icon"> <!-- Icono de la pagina -->
    <link rel="stylesheet" href="styles2.css"> <!-- Enlace a la hoja de estilos CSS --> 
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
              <a class="active" href="servicios.php">Servicios</a>
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
    <div class="content">
      <div class="video-container">
        <video width="100%" height="100%" autoplay muted loop>
            <source src="imagen/videoplayback.mp4" type="video/mp4">
            Tu navegador no soporta la etiqueta de video.
        </video>
    </div>
    <br>
    <div class="page-container">
      <div class="container">
        <div class="content-section">
          <h1>Servicio de información bibliográfica</h1>
          <p>
            Mediante este servicio <strong>podemos ayudarte a obtener cualquier información</strong> 
            o documento que necesites para los estudios, el ocio, la investigación, se encuentre en la biblioteca o no. 
            <strong> También podemos ayudarte</strong> a resolver cualquier duda que tengas relacionada con el funcionamiento y uso de los servicios o recursos de la biblioteca.
          </p>
          <div class="features">Horario - Usuarios/as </div>
          <ul>
            <li>
              <i class="fas fa-check-circle"></i> De lunes a viernes: 10:00 - 13:00 y 16:00 - 19:45.
            </li>
            <li>
              <i class="fas fa-check-circle"></i> Horario de verano (24 junio - 15 septiembre): 9:00 - 14:00.
            </li>
            <li>
              <i class="fas fa-check-circle"></i> Sábados y domingos cerrado.
            </li>
            <li>
              <i class="fas fa-check-circle"></i> La Biblioteca está abierta a todos los miembros de la comunidad, sin ningún tipo de distinción.
            </li>
          </ul>
          <a class="btn" href="#">MÁS INFO</a>
        </div>
        <div class="image-section">
          <img alt="Librería Muskiz" height="600" src="imagen/Servicios1.jpg" width="450"/>
        </div>
      </div>
    </div>

    <div class="page-container">
      <div class="container">
        <div class="image-section">
          <img alt="Librería Muskiz" height="600" src="imagen/Servicios2.jpg" width="450"/>
        </div>
        <div class="content-section">
          <h1>¿Cómo utilizarlo?</h1>
          <p>
            Pregunta al bibliotecario <strong> acudiendo personalmente al mostrador de la biblioteca.</strong> 
              Utilizando el servicio de orientación al usuario electrónico de nuestro Espacio de opinión. 
              Llamando por teléfono. A través del chat. Enviándonos un correo electrónico. Utilizando 
              el servicio de información, público y gratuito<strong>"Pregunte las bibliotecas responden"</strong> que es atendido de forma cooperativa por 21 bibliotecas públicas de 17 comunidades Autónomas y coordinado por la Dirección General del Libro y Bibliotecas del Ministerio de Educación, Cultura y Deporte, a través de la Subdirección General de Coordinación Bibliotecaria.
          </p>
          <div class="features">Acceso – Prestamos – Servicios</div>
          <ul>
            <li>
              <i class="fas fa-check-circle"></i> El acceso es gratuito
            </li>
            <li>
              <i class="fas fa-check-circle"></i> Para sacar materiales en préstamo es necesario traer una fotografía para hacerse un carné de lector
            </li>
            <li>
              <i class="fas fa-check-circle"></i> Pagina web disponible 24/7
            </li>
            <li>
              <i class="fas fa-check-circle"></i> Atencion al público con personal especializado
            </li>
            <li>
              <i class="fas fa-check-circle"></i> Los mejores libros
            </li>
          </ul>
          <a class="btn" href="#">MÁS INFO</a>
        </div>
      </div>
    </div>
    <div class="contact-form-container">
        <h1>Contacta con nosotros</h1>
        <form id="contactForm">
            <div class="form-group">
                <input type="text" placeholder="Nombre" required>
                <input type="email" placeholder="Email" required>
            </div>
            <textarea placeholder="Mensaje" required></textarea>
            <button type="submit">ENVIAR</button>
            <script>
              document.getElementById('contactForm').addEventListener('submit', function(event) {
                  event.preventDefault(); // Prevent the default form submission
                  const name = this.querySelector('input[type="text"]').value;
                  const email = this.querySelector('input[type="email"]').value;
                  const message = this.querySelector('textarea').value;
      
                  if (name && email && message) {
                      alert('Formulario enviado con éxito!');
                      // Here you can add the logic to send the form data to the server
                  } else {
                      alert('Por favor, completa todos los campos.');
                  }
              });
            </script>
        </form>
    </div>
    <br>
    <br>
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
</html>