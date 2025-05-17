<a href="index.php">INICIO</a>
<br>
<br>
<br>
<br>
<?php

// Datos de conexión a la base de datos
$host = 'localhost'; // Dirección del servidor
$db = 'bibliotecamuskiz'; // Nombre de la base de datos
$user = 'alumno1'; // Usuario
$pass = 'alumno1'; // Contraseña

// Crear conexión con la base de datos
$conn = new mysqli($host, $user, $pass, $db);

// Verificar si la conexión ha sido exitosa
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Eliminar todos los libros de la tabla automáticamente al cargar la página
$sql = "DELETE FROM libros_xml"; // Consulta para borrar todos los registros

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Todos los libros han sido borrados correctamente.";
} else {
    echo "Error al borrar los libros: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>