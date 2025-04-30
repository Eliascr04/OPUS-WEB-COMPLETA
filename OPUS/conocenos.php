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

    <title>Conocenos</title> <!-- Título de la página -->
    <link rel="shortcut icon" href="imagen/favicon.ico" type="image/x-icon"> <!-- Icono de la pagina -->
    <link rel="stylesheet" href="styles4.css"> <!-- Enlace a la hoja de estilos CSS --> 
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
            <a  href="">CONÓCENOS <i class="fas fa-caret-down"></i></a>
            <div class="dropdown">
              <a class="active" href="conocenos.php">Quiénes Somos</a>
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
    <div class="header1">
      <h1>¿QUIÉNES SOMOS?</h1>
  </div>
  <div class="content">
      <p>La Biblioteca de Muskiz es un espacio abierto a toda la comunidad, donde la cultura y el conocimiento se encuentran. Ofrecemos servicios presenciales en un entorno acogedor y un espacio virtual innovador para disfrutar de nuestros recursos desde cualquier lugar. ¡Te damos la bienvenida a nuestra biblioteca!</p>

      <div class="steps">
          <div class="step active">1. Análisis de la biblioteca</div>
          <div class="step">2. Planificación bibliotecaria</div>
          <div class="step">3. Organización de servicios</div>
          <div class="step">5. Innovación en Muskiz</div>
          <div class="step">6. Comunidad lectora</div>
          <div class="step">7. Crecimiento cultural</div>
          <div class="step">8. Participación ciudadana</div>
      </div>
      <div class="progress">
        <div class="progress-bar" style="width: 0%;"></div>
      </div>
      <p class="progress-text">0%</p>
      </div>
      <div class="content">
      <p>Además, contamos con un espacio virtual pionero en servicios web sociales, que permite disfrutar de los recursos de la biblioteca desde cualquier lugar y en cualquier momento. En la Biblioteca de Muskiz, la cultura y el conocimiento están al alcance de todos. ¡Te esperamos!</p>

         En la Biblioteca de Muskiz, la cultura y el conocimiento están al alcance de todos. ¡Te esperamos!</p>
        </div>
      </div>
  <script>
    // Selecciona todos los pasos y la barra de progreso
    const steps = document.querySelectorAll('.step');
    const progressBar = document.querySelector('.progress-bar');
    const progressText = document.querySelector('.progress-text');
  
    // Define el porcentaje de progreso por cada paso
    const progressPerStep = 100 / steps.length;
  
    // Añade un evento de clic a cada paso
    steps.forEach((step, index) => {
      step.addEventListener('click', () => {
        // Calcula el nuevo porcentaje de progreso
        const newProgress = (index + 1) * progressPerStep;
  
        // Actualiza el ancho de la barra de progreso
        progressBar.style.width = `${newProgress}%`;
  
        // Actualiza el texto del progreso
        progressText.textContent = `${Math.round(newProgress)}%`;
  
        // Marca el paso como activo
        steps.forEach((s, i) => {
          if (i <= index) {
            s.classList.add('active');
          } else {
            s.classList.remove('active');
          }
        });
      });
    });
  </script>
  <div class="header2 wave-background animated-wave">
    <h1>Nuestros valores</h1>
    <p>Muskiz Liburutegia</p>
</div>
<div class="content1">
  <div class="row">
    <div class="card">
      <h2>ACCESIBILIDAD</h2>
      <p>Creemos que el acceso al conocimiento debe ser universal. Por ello, nuestra biblioteca ofrece servicios gratuitos para todos los miembros de la comunidad.</p>
      <p>Desde el acceso a libros y recursos electrónicos hasta espacios inclusivos y adaptados, trabajamos para eliminar barreras y fomentar la igualdad de oportunidades en el acceso a la información.</p>
    </div>
    <div class="card">
      <h2>INNOVACIÓN</h2>
      <p>Nos mantenemos a la vanguardia tecnológica para ofrecer a nuestros usuarios una experiencia enriquecida y dinámica.</p>
      <p>Nos comprometemos a incorporar continuamente nuevas tecnologías para mejorar la experiencia del usuario y expandir el alcance de nuestros servicios.</p>
    </div>
  </div>
  <div class="row">
    <div class="card">
      <h2>COMPROMISO CON LA COMUNIDAD</h2>
      <p>Colaboramos activamente con agentes sociales y culturales locales para promover la memoria histórica y el patrimonio de Muskiz.</p>
      <p>Estamos profundamente arraigados en el tejido social y cultural de Muskiz. Colaboramos con escuelas, asociaciones y otras entidades locales para organizar actividades culturales, talleres y exposiciones que enriquecen la vida comunitaria.</p>
    </div>
    <div class="card">
      <h2>SOSTENIBILIDAD</h2>
      <p>Entendemos la importancia de proteger nuestro entorno para las generaciones futuras. Por ello, adoptamos prácticas sostenibles en todas nuestras operaciones.</p>
      <p>Fomentamos el reciclaje, utilizamos energías renovables en nuestras instalaciones y promovemos una cultura de responsabilidad ambiental entre nuestros usuarios.</p>
    </div>
  </div>
</div>
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