<?php
session_start(); // Iniciar la sesión (sin redirección automática)

include 'conexion.php'; // Incluir la conexión a la base de datos

// Configuración de la paginación
$librosPorPagina = 12; // Número de libros por página
$paginaActual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1; // Página actual
$offset = ($paginaActual - 1) * $librosPorPagina; // Cálculo del offset

// Consulta para obtener los libros con paginación
$sql = "SELECT libros.*, autores.NOMBRE, autores.APE1 
        FROM libros 
        INNER JOIN libros_autores ON libros.ISBN = libros_autores.ISBN
        INNER JOIN autores ON libros_autores.DNI = autores.DNI
        LIMIT $librosPorPagina OFFSET $offset";
$result = $conexion->query($sql);

// Consulta para obtener el total de libros
$sqlTotal = "SELECT COUNT(*) as total FROM libros";
$resultTotal = $conexion->query($sqlTotal);
$totalLibros = $resultTotal->fetch_assoc()['total'];
$totalPaginas = ceil($totalLibros / $librosPorPagina); // Cálculo del total de páginas
?>
<html>
<!DOCTYPE html> <!-- Define el documento como HTML5 -->
<html lang="es"> <!-- Configura el idioma español -->
<head>
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Garantiza compatibilidad con Internet Explorer -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Diseño responsivo -->

    <title>Libros</title> <!-- Título de la página -->
    <link rel="shortcut icon" href="imagen/favicon.ico" type="image/x-icon"> <!-- Icono de la pagina -->
    <link rel="stylesheet" href="styles3.css"> <!-- Enlace a la hoja de estilos CSS --> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
  <header class="header">
    <img alt="Logo" src="imagen/logo1.png">
    <div class="nav">
        <a href="index.php">INICIO</a>
        <a class="active" href="libros.html">LIBROS</a>
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
        <i class="fas fa-search search-icon"></i>
        <i class="fas fa-bars menu-icon"></i>
       </div>
      </div>
  </header>
  <div class="content">
    <p>Mostrando 12–20 de 20 resultados</p>
    <div class="filters">
      <button id="filterButton"><i class="fas fa-filter"></i> Filters</button>
      <input id="search" placeholder="Buscar..." type="text"/>
      <select id="sort">
        <option value="latest">Ordenar por los últimos</option>
        <option value="price-asc">Ordenar por los mas solicitados</option>
        <option value="price-desc">Ordenar por los menos solicitados</option>
      </select>
      <div class="filter-box" id="filterBox">
        <h4>Ordenar por</h4>
        <ul>
          <li>Defecto</li>
          <li>Popularidad</li>
          <li>Puntuación</li>
          <li>Novedad</li>
          <li>Más baratos</li>
          <li>Más caros</li>
        </ul>
        <h4>Categorías</h4>
        <ul>
          <li>Todas</li>
          <li>Blogs (3)</li>
          <li>Ciencia ficción (2)</li>
          <li>Cómic (1)</li>
          <li>Drama (5)</li>
          <li>Fantasía (11)</li>
          <li>Fotografía (1)</li>
        </ul>
      </div>
    </div>
    <div class="books" id="books">
      <?php
      //Conectarte a la db para obtener los libros
      // generar los divs mediante php con un while o un foreach 
      
      ?>
      <div class="book" data-price="13.00" data-title="Pequeño Libro.">
        <img alt="Pequeño Libro." src="imagen/Elantris.jpg"/>
        <div class="book-price" data-isbn="9788466658843" onclick="prestarLibro(this)">PRESTAR</div>
        <div class="book-title">Elantris</div>
        <div class="book-author">por BRANDON SANDERSON</div>
      </div>
      <div class="book" data-price="10.00" data-title="La niña en el mar">
        <img alt="La niña en el mar" src="imagen/CamReyes.jpg"/>
        <div class="book-price" data-isbn="9788466658843" onclick="prestarLibro(this)">PRESTAR</div>
        <div class="book-title">El camino de los reyes</div>
        <div class="book-author">por BRANDON SANDERSON</div>
      </div>
      <div class="book" data-price="15.00" data-title="Niños del desamparo">
        <img alt="Niños del desamparo" src="imagen/impFinal.jpg"/>
        <div class="book-price" data-isbn="9788466658843" onclick="prestarLibro(this)">PRESTAR</div>
        <div class="book-title">El imperio final</div>
        <div class="book-author">por BRANDON SANDERSON </div>
      </div>
      <div class="book" data-price="2.99" data-title="Yvette">
        <img alt="Yvette" src="imagen/RuedaDelTiempo.jpg"/>
        <div class="book-price" data-isbn="9788466658843" onclick="prestarLibro(this)">PRESTAR</div>
        <div class="book-title">La Rueda del Tiempo nº 01/14 El ojo del mundo</div>
        <div class="book-author">por ROBERT JORDAN</div>
      </div>
      <div class="book" data-price="12.00" data-title="Nuevo libro 1">
        <img alt="Nuevo libro 1" src="imagen/AleaLey.jpg"/>
        <div class="book-price" data-isbn="9788466658843" onclick="prestarLibro(this)">PRESTAR</div>
        <div class="book-title">El Pozo de la Ascensión (Trilogía Original Mistborn 2)</div>
        <div class="book-author">por BRANDON SANDERSON</div>
      </div>
      <div class="book" data-price="8.00" data-title="Nuevo libro 2">
        <img alt="Nuevo libro 2" src="imagen/ArcaIlimt.jpg"/>
        <div class="book-price" data-isbn="9788466658843" onclick="prestarLibro(this)">PRESTAR</div>
        <div class="book-title">NUNCANOCHE</div>
        <div class="book-author">por JAY KRISTOFF</div>
      </div>
      <div class="book" data-price="20.00" data-title="Nuevo libro 3">
        <img alt="Nuevo libro 3" src="imagen/ColorMagia.jpg"/>
        <div class="book-price" data-isbn="9788466658843" onclick="prestarLibro(this)">PRESTAR</div>
        <div class="book-title">Palabras Radiantes. Guerra Tormentas II</div>
        <div class="book-author">por BRANDON SANDERSON</div>
      </div>
      <div class="book" data-price="5.00" data-title="Nuevo libro 4">
        <img alt="Nuevo libro 4" src="imagen/juramentada.jpg"/>
        <div class="book-price" data-isbn="9788466658843" onclick="prestarLibro(this)">PRESTAR</div>
        <div class="book-title">Promesa de sangre: 1 (Los magos de la pólvora)</div>
        <div class="book-author">por BRIAN MCCLELLAN</div>
      </div>
      
  </div>
  <div class="pagination">
    <a href="libros.php" class="active">1</a>
    <a href="libros2.php">2</a>
    <a href="libros2.php" class="next">VOLVER</a>
  </div>
</body>
</html>

  <script>
    const pagination = document.querySelector('.pagination');
const pages = document.querySelectorAll('.pagination a');
const currentPage = document.querySelector('.pagination a.active');

let currentPageNumber = parseInt(currentPage.textContent);

pages.forEach((page) => {
  page.addEventListener('click', (e) => {
    e.preventDefault();
    const pageNumber = parseInt(page.textContent);
    if (pageNumber === currentPageNumber) return;
    currentPage.classList.remove('active');
    page.classList.add('active');
    currentPageNumber = pageNumber;
    // Aquí puedes agregar la logica para cambiar la página
  });
});

document.querySelector('.pagination .prev').addEventListener('click', (e) => {
  e.preventDefault();
  if (currentPageNumber === 1) {
    window.location.href = 'libros.php';
  } else {
    currentPage.classList.remove('active');
    pages[currentPageNumber - 2].classList.add('active');
    currentPageNumber--;
  }
});

document.querySelector('.pagination .next').addEventListener('click', (e) => {
  e.preventDefault();
  if (currentPageNumber === pages.length - 1) {
    window.location.href = 'libros.php';
  } else {
    currentPage.classList.remove('active');
    pages[currentPageNumber].classList.add('active');
    currentPageNumber++;
  }
});
  </script>
  <script>
  function prestarLibro(element) {
    const libroISBN = element.getAttribute('data-isbn'); // Obtener el ISBN del libro

    // Enviar una solicitud POST a prestar_libro.php
    fetch('prestar_libro.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ isbn: libroISBN }) // Enviar el ISBN en el cuerpo de la solicitud
    })
    .then(response => response.json()) // Convertir la respuesta a JSON
    .then(data => {
        if (data.success) {
            alert(data.message); // Mostrar mensaje de éxito
            window.location.href = 'Mis_reservas.php'; // Redirigir a Mis_reservas.php
        } else {
            alert(data.message); // Mostrar mensaje de error
        }
    })
    .catch(error => {
        console.error('Error:', error); // Mostrar errores en la consola
    });
  }
</script>
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