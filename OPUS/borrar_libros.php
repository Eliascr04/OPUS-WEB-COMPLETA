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
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "DELETE FROM libros_xml";

if ($conn->query($sql) === TRUE) {
    echo "Todos los libros han sido borrados correctamente.";
} else {
    echo "Error al borrar los libros: " . $conn->error;
}

$conn->close();
?>