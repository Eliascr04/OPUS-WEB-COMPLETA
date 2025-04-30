<?php

$host = 'localhost';
$db = 'bibliotecamuskiz';
$user = 'alumno1';
$pass = 'alumno1';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si se presionó el botón para borrar
if (isset($_POST['borrar'])) {
    // Iniciar transacción
    $conn->begin_transaction();

    try {
        // Eliminar todos los libros de la tabla
        $sql = "DELETE FROM libros_xml";
        if ($conn->query($sql) === TRUE) {
            echo "Todos los libros han sido borrados correctamente.";
        } else {
            throw new Exception("Error al borrar los libros: " . $conn->error);
        }

        // Confirmar la transacción
        $conn->commit();
    } catch (Exception $e) {
        $conn->rollback(); // Revierte la transacción en caso de error
        echo "Hubo un error: " . $e->getMessage();
    }
}

$conn->close();

?>