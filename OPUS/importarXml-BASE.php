<a href="index.php">INICIO</a>
<br>
<br>
<br>
<br>

<?php

$host = 'localhost';
$db = 'bibliotecamuskiz';
$user = 'alumno1';
$pass = 'alumno1';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    exit("Conexión fallida: " . $conn->connect_error);
}

// Cargar el XML
$xml = simplexml_load_file('xml/catalogo1.xml') or exit("Error al cargar el XML.");

foreach ($xml->libro as $libro) {   
    $sql = "INSERT INTO libros_xml (titulo, fechaPublicacion, autor, numPaginas, genero, edadRecomendada, portada)
            VALUES ('" . $libro->titulo . "', '" . $libro->fechaPublicacion . "', '" . $libro->autor . "', 
            '" . $libro->numPaginas . "', '" . $libro->genero . "', '" . $libro->edadRecomendada . "',
            '" . $libro->portada . "')";

    if ($conn->query($sql) == TRUE) {
        echo "Libro '" . $libro->titulo . "' insertado exitosamente.<br>";
    } else {
        echo "Error al insertar el libro '" . $libro->titulo . "': " . $conn->error . "<br>";
    }
}

$conn->close();
echo "<br> Importación completada.";
?>