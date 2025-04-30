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

    <title>Contacto</title> <!-- Título de la página -->
    <link rel="shortcut icon" href="imagen/favicon.ico" type="image/x-icon"> <!-- Icono de la pagina -->
    <link rel="stylesheet" href="styles5.css"> <!-- Enlace a la hoja de estilos CSS --> 
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
              <a href="#">CONÓCENOS <i class="fas fa-caret-down"></i></a>
              <div class="dropdown">
                <a href="conocenos.php">Quiénes Somos</a>
                <a  href="servicios.php">Servicios</a>
              </div>
            </div>
          <a href="Sesion.php">INICIA SESIÓN</a>
          <a href="https://www.muskiz.org/es-ES/Ayuntamiento/Paginas/default.aspx">AYUNTAMIENTO</a>
          <a class="active" href="contacto.php">CONTACTO</a>
        </div>
    </div>
    <br>
    <body class="bg-gray-100">
      <div id="content">
          <div class="container mx-auto p-4">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                  <!-- Card 1 -->
                  <div class="bg-white shadow-md rounded-lg p-4">
                      <div class="flex items-center mb-4">
                          <img alt="Company Logo" class="w-12 h-12 mr-4" src="https://storage.googleapis.com/a1aa/image/Skzh4NziEtYdPN5sAPynCigRN7uSzpCcUalR7P1tbvcB53BF.jpg" />
                          <div>
                              <h2 class="text-blue-700 font-semibold">
                                  Empresa de Servicios Informáticos "Opus" S.L.
                              </h2>
                              <p class="text-gray-600">
                                BO SAN JUAN, Nº 10 48550, MUSKIZ, VIZCAYA
                              </p>
                              <p class="text-green-600">
                                  <i class="fas fa-phone-alt"></i>
                                  T. 946706045
                              </p>
                          </div>
                      </div>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2626.737105653823!2d-3.1237752999999997!3d43.3218162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4ef7b47f9006e7%3A0x4f5a33e5bfc9c88d!2sCentro%20Formacion%20Somorrostro!5e1!3m2!1ses!2ses!4v1737965909490!5m2!1ses!2ses" width="1100" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                  <!-- Card 2 -->
                  <div class="bg-white shadow-md rounded-lg p-4">
                      <div class="flex items-center mb-4">
                          <img alt="Company Logo" class="w-12 h-12 mr-4" src="https://storage.googleapis.com/a1aa/image/Skzh4NziEtYdPN5sAPynCigRN7uSzpCcUalR7P1tbvcB53BF.jpg" />
                          <div>
                              <h2 class="text-blue-700 font-semibold">
                                    Liberia de Muskiz - Muskiz Liburutegia
                              </h2>
                              <p class="text-gray-600">
                                  C/ Cendeja, 29 - 48550 Muskiz (Bizkaia).
                              </p>
                              <p class="text-green-600">
                                  <i class="fas fa-phone-alt"></i>
                                  T. 94 670 70 75 
                              </p>
                          </div>
                      </div>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d84055.34439895471!2d-3.2009014126586046!3d43.32199182436711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0xd4ef7ca0c775669%3A0x5e685606625ffe34!2sC.%20la%20Cendeja%2C%2029%2C%2048550%20Muskiz%2C%20Biscay!3m2!1d43.322021799999995!2d-3.1184971!5e1!3m2!1ses!2ses!4v1737549291960!5m2!1ses!2ses" width="1100" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="200" height="700"></iframe>   
              </div>
          </div>
    <br>  
        <div class="container1">
          <div class="text-container">
              <h2>¿Necesitas saber más?</h2>
              <p>Contacto ahora con la Biblioteca Municipal de Muskiz para sus servicios Consulta y préstamo de materiales impresos y electrónicos, consulta en línea de boletines (BOPV, BOB, BOE...) y documentos digitales, sala de lectura, servicio de fotocopia, catálogo....</p>
              <p>Harremantatu orain Muskizko Udal Liburutegiarekin bere zerbitzuetarako. Material inprimatu eta elektronikoen kontsulta eta mailegua, buletinen (BOPV, BOB, BOE...) eta dokumentu digitalen online kontsulta, irakurketa gela, fotokopia zerbitzua, katalogoa. ..</p>
            </div>
                <div class="form-container">
              <form action="process_form.php" method="POST">
                  <input type="text" name="nombre" placeholder="Nombre*" required>
                  <input type="text" name="empresa" placeholder="Codigo Postal*" required>
                  <input type="tel" name="telefono" placeholder="Teléfono*" required>
                  <input type="email" name="email" placeholder="Email*" required>
                  <textarea name="mensaje" placeholder="Mensaje*" required></textarea>
                  <label>
                      <input type="checkbox" name="comercial" required>
                      Acepto recibir información comercial, incluso por correo electrónico.
                  </label>
                  <label>
                      <input type="checkbox" name="privacidad" required>
                      He leído y acepto la <a href="#">Política de Privacidad</a>
                  </label>
                  <div class="recaptcha">
                      <div class="g-recaptcha" data-sitekey="your-site-key"></div>
                  </div>
                  <div class="privacy-info">
                      INFORMACIÓN PROTECCIÓN DE DATOS DE MUSKIZ Liburutegia Finalidades: Responder a sus solicitudes y remitirle información comercial de nuestros productos y servicios, incluso por correo electrónico. Legitimación: Consentimiento del interesado. Destinatarios: No están previstas cesiones de datos. Derechos: Puede retirar su consentimiento en cualquier momento, así como acceder, rectificar, suprimir sus datos y demás derechos en liburutegia@muskiz.com Información Adicional: Puede ampliar la información en el enlace de Avisos Legales.
                  </div>
                  <button type="submit">Contactar ahora</button>
              </form>
          </div>
      </div>
      <br><br>
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