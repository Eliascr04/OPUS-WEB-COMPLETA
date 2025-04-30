
<html>
<!DOCTYPE html> <!-- Define el documento como HTML5 -->
<html lang="es"> <!-- Configura el idioma español -->
<head>
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Garantiza compatibilidad con Internet Explorer -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Diseño responsivo -->

    <title>Biblioteca Municipal Muskiz</title> <!-- Título de la página -->
    <link rel="shortcut icon" href="imagen/favicon.ico" type="image/x-icon"> <!-- Icono de la pagina -->
    <link rel="stylesheet" href="styles7.css"> <!-- Enlace a la hoja de estilos CSS --> 
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
            <a href="">CONÓCENOS <i class="fas fa-caret-down"></i></a>
            <div class="dropdown">
              <a href="conocenos.php">Quiénes Somos</a>
              <a href="servicios.php">Servicios</a>
            </div>
          </div>
        <a class="active" href="Sesion.html">INICIA SESIÓN</a>
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
    <div class="container">
        <h1>Recuperar Contraseña</h1>
        <div class="underline"></div>
        <p>Introduce el e-mail con el que diste de alta tu cuenta y te enviaremos la contraseña.</p>
        <form>
            <label for="email">E-mail *</label>
            <input type="email" id="email" name="email" required>
            <div class="error-message">Completa este campo</div>
            <button type="submit">Recuperar</button>
        </form>
    </div>
    <br><br><br>
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