
<html>
<!DOCTYPE html> <!-- Define el documento como HTML5 -->
<html lang="es"> <!-- Configura el idioma español -->
<head>
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Garantiza compatibilidad con Internet Explorer -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Diseño responsivo -->

    <title>Biblioteca Municipal Muskiz</title> <!-- Título de la página -->
    <link rel="shortcut icon" href="imagen/favicon.ico" type="image/x-icon"> <!-- Icono de la pagina -->
    <link rel="stylesheet" href="styles.css"> <!-- Enlace a la hoja de estilos CSS --> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="acciones-libros" style="margin-bottom: 30px;">
    <!-- Botón para exportar libros a XML -->
    <form action="exportar.php" method="post" style="margin-bottom: 15px;">
        <button type="submit">📤 Exportar Libros a XML</button>
    </form>

<!-- Formulario para importar libros desde un archivo XML -->
<form action="importarXml-BASE.php" method="post" enctype="multipart/form-data" style="margin-bottom: 15px;">
        <label for="archivo">📥 Selecciona un archivo XML:</label><br>
        <input type="file" name="archivo" id="archivo" required><br><br>
        <button type="submit">📥 Importar XML a la Base de Datos</button>
    </form>

    <!-- Botón para ver libros importados desde la base de datos -->
    <form action="libros-importados.php" method="get">
        <button type="submit">📚 Ver Libros Importados</button>
    </form>
    <!-- Aquí agregamos el formulario para borrar los libros de la base de datos -->
    <form method="POST" action="borrar_libros.php">
        <button type="submit" name="borrar" onclick="return confirm('¿Estás seguro de que quieres borrar todos los libros? Esta acción no se puede deshacer.')">
            🗑️ Borrar Los Libros importados desde el xml</button>
    </form>
</div>
<body>
    <div class="header">
      <img alt="Logo" src="imagen/logo1.png">
      <div class="nav">
        <a class="active" href="#">INICIO</a>
        <a href="libros.php">LIBROS</a>--
        <div class="more">
            <a href="">CONÓCENOS <i class="fas fa-caret-down"></i></a>
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
  
    <div class="rss-banner" style="width: 100%; height: 50vh; overflow-y: auto;">
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$rss_url = "https://www.eltiempo.com/rss/deportes.xml";
$rss = @simplexml_load_file($rss_url);

if ($rss) {
    foreach ($rss->channel->item as $item) {
        $title = htmlspecialchars($item->title);
        $link = htmlspecialchars($item->link);
        $desc = htmlspecialchars(strip_tags($item->description));

        echo '<div class="rss-item">';
        echo "<h3><a href=\"$link\" target=\"_blank\">$title</a></h3>";
        echo "<p>$desc</p>";
        echo '</div>';
    }
} else {
    echo "<p>No se pudo cargar el feed RSS.</p>";
}
?>
</div>



</div>
<!-- Script AL FINAL DEL BODY -->
<script>
    !function(d,s,id){
        var js,fjs=d.getElementsByTagName(s)[0];
        if(!d.getElementById(id)){
            js=d.createElement(s);
            js.id=id;
            js.src='https://weatherwidget.io/js/widget.min.js';
            fjs.parentNode.insertBefore(js,fjs);
        }
    }(document,'script','weatherwidget-io-js');
</script>


      <div class="footer1">
       <a href="Juego.html">
        ¿Estas aburrido?Juega!.
        <i class="fas fa-external-link-alt">
        </i>
       </a>
      </div>
     </div>
    <div class="novedades-container">
      <h1>
       Novedades
      </h1>
      <div class="nav">
       <a href="libros.html">
        TODOS
       </a>
       <a href="libros.html">
        EUSKERA
       </a>
       <a href="##">
        CIENCIA FICCIÓN
       </a>
       <a href="#">
        CÓMIC
       </a>
       <a href="#">
        DRAMA
       </a>
       <a href="#">
        FANTASÍA
       </a>
       <a href="#">
        FOTOGRAFÍA
       </a>
       <div class="dropdown1">
        <a href="#">
         MAS
         <i class="fas fa-caret-down">
         </i>
        </a>
        <div class="dropdown1-content">
         <a href="#">
          Histórica
         </a>
         <a href="#">
          Humor
         </a>
         <a href="#">
          Juego de rol
         </a>
         <a href="#">
          Juvenil
         </a>
         <a href="#">
          Poesía
         </a>
         <a href="#">
          Relatos
         </a>
         <a href="#">
          Romántica
         </a>
         <a href="#">
          Sin categorizar
         </a>
         <a href="#">
          Terror
         </a>
         <a href="#">
          Zombis
         </a>
        </div>
       </div>
      </div>
      <div class="books">
       <div class="book">
        <img alt="Estoicismo" src="imagen/PequeñoLib.jpg">
        <div class="book-price">
          PRESTAR
        </div>
        <div class="book-title">
          El pequeño libro del estoicismo
        </div>
        <div class="book-author">
         por JONAS SALZGEBER
        </div>
       </div>
       <div class="book">
        <img alt="El niño que perdió la guerra" src="imagen/NiñoGuerra.jpg">
        <div class="book-price">
          PRESTAR
        </div>
        <div class="book-title">
          El niño que perdió la guerra
        </div>
        <div class="book-author">
         por JULIA NAVARRO
        </div>
       </div>
       <div class="book">
        <img alt="La piedad del Primero" src="imagen/PiedadPrimero.jpg">
        <div class="book-price">
          PRESTAR
        </div>
        <div class="book-title">
          La piedad del Primero
        </div>
        <div class="book-author">
         por PABLO BUENO
        </div>
       </div>
       <div class="book">
        <img alt="12 reglas para vivir: Un antídoto al caos" src="imagen/12Reglas.jpg">
        <div class="book-price">
         PRESTAR
        </div>
        <div class="book-title">
          12 reglas para vivir: Un antídoto al caos
        </div>
        <div class="book-author">
         por JORDAN PETERSON
        </div>
       </div>
      </div>
     </div>
     <div class="fosca-section">
      <div class="card">
        <img alt="Logo muskiz" src="imagen/Logo-muskiz.png" />
        <div>
          <h2>
            ¿Que <i>Hacemos?</i>
          </h2>
          <p>
            La biblioteca de Muskiz te ofrece dos opciones para utilizar sus servicios: acudir a la segunda planta de la Casa de Cultura de lunes a viernes o abrir la puerta virtual sin restricción de horario todos los días del año.
          </p>
          <a href="#">CONÓCENOS »</a>
        </div>
      </div>
      <div class="card blue-card">
        <img alt="Imagen" src="imagen/podemoshacer.png"/>
        <div>
          <h2>
            Lo que podemos hacer <i>por ti</i>
          </h2>
          <a href="servicios.html">NUESTROS SERVICIOS »</a>
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