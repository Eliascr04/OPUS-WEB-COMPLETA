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
  <!DOCTYPE html>
  <html lang="es">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Libros</title>
      <link rel="shortcut icon" href="imagen/favicon.ico" type="image/x-icon">
      <link rel="stylesheet" href="styles3.css">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  </head>
  <body>
    <header class="header">
      <img alt="Logo" src="imagen/logo1.png">
      <div class="nav">
          <a href="index.php">INICIO</a>
          <a class="active" href="libros.php">LIBROS</a>
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
      <p>Mostrando 1–12 de 20 resultados</p>
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
      <script>
    document.getElementById('search').addEventListener('input', function() {
      const searchValue = this.value.toLowerCase();
      const books = document.querySelectorAll('.book');
      books.forEach(book => {
        const title = book.getAttribute('data-title').toLowerCase();
        book.style.display = title.includes(searchValue) ? 'block' : 'none';
      });
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
  <div class="books" id="books">
    <?php
    // Mostrar los libros dinámicamente
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="book" data-price="13.00" data-title="' . $row['TITULO'] . '">';
            echo '<img alt="' . $row['TITULO'] . '" src="' . $row['URLIMG'] . '"/>';
            echo '<div class="book-price" data-isbn="' . $row['ISBN'] . '" onclick="prestarLibro(this)">PRESTAR</div>';
            echo '<div class="book-title">' . $row['TITULO'] . '</div>';
            echo '<div class="book-author">por ' . $row['NOMBRE'] . ' ' . $row['APE1'] . '</div>';
            echo '</div>';
        }
    } else {
        echo "No se encontraron libros.";
    }
    ?>
  </div>

  <!-- Paginación -->
  <div class="pagination">
    <?php
    for ($i = 1; $i <= $totalPaginas; $i++) {
        echo '<a href="libros.php?pagina=' . $i . '" ' . ($i == $paginaActual ? 'class="active"' : '') . '>' . $i . '</a>';
    }
    ?>
  </div>
  </body>
  </html>