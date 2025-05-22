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
    exit("Conexión fallida: ");
}

$sql = "DELETE FROM libros_xml";
//query() es un método de la clase mysqli en PHP
if ($conn->query($sql) == TRUE) {
    echo "Todos los libros han sido borrados correctamente.";
} else {
    echo "Error al borrar los libros: ";
}

$conn->close();
?>