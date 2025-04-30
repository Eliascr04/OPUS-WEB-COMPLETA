<?php

$host = 'localhost';
$db = 'bibliotecamuskiz';
$user = 'alumno1';
$pass = 'alumno1';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Cargar el XML
$xml = new DOMDocument();
$xml->load('C:\Users\chris\Desktop\PAGINA WEB OPUS\importar xml\catalogo1.xml');

// Procesar cada "libro" en el XML
foreach ($xml->documentElement->childNodes as $node) {
    // Filtrar solo los elementos "libro"
    if ($node->nodeType !== XML_ELEMENT_NODE || $node->nodeName !== 'libro') {
        continue;
    }

    // Preparar los valores para insertar en la tabla 'libros_xml'
    $columns = [];
    $values = [];
    
    $titulo = '';
    $fechaPublicacion = '';
    $autor = '';
    $numPaginas = '';
    $genero = '';
    $edadRecomendada = '';
    $portada = '';
    
    foreach ($node->childNodes as $field) {
        if ($field->nodeType !== XML_ELEMENT_NODE) continue;

        $column = $field->nodeName;
        $value = $conn->real_escape_string($field->nodeValue);
        
        // Asignar los valores de cada campo
        switch ($column) {
            case 'titulo':
                $titulo = $value;
                break;
            case 'fechaPublicacion':
                $fechaPublicacion = $value;
                break;
            case 'autor':
                $autor = $value;
                break;
            case 'numPaginas':
                $numPaginas = $value;
                break;
            case 'genero':
                $genero = $value;
                break;
            case 'edadRecomendada':
                $edadRecomendada = $value;
                break;
            case 'portada':
                $portada = $value;
                break;
        }
    }

    // Insertar en la tabla 'libros_xml'
    $sql = "INSERT INTO libros_xml (titulo, fechaPublicacion, numPaginas, genero, edadRecomendada, portada) 
            VALUES ('$titulo', '$fechaPublicacion', '$numPaginas', '$genero', '$edadRecomendada', '$portada')";
    if ($conn->query($sql) === TRUE) {
        // Si tienes una tabla de autores y quieres insertar los autores también, sigue los pasos anteriores.
        $lastBookId = $conn->insert_id; // Obtener el ID del libro insertado

        // Insertar los autores, si existen en el XML
        if ($autor != '') {
            // Verificar si el autor ya está en la base de datos
            $sqlAuthorCheck = "SELECT id FROM autores WHERE nombre = '$autor'";
            $result = $conn->query($sqlAuthorCheck);
            
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $authorId = $row['id'];
            } else {
                // Si el autor no existe, insertarlo
                $sqlAuthor = "INSERT INTO autores (nombre) VALUES ('$autor')";
                if ($conn->query($sqlAuthor) === TRUE) {
                    $authorId = $conn->insert_id; // Obtener el ID del autor insertado
                }
            }

            // Insertar la relación entre el libro y el autor
            if (isset($authorId)) {
                $sqlLibroAutor = "INSERT INTO libros_autores (libro_id, autor_id) VALUES ($lastBookId, $authorId)";
                $conn->query($sqlLibroAutor);
            }
        }
    } else {
        echo "Error al insertar el libro: " . $conn->error;
    }
}

$conn->close();
echo "Importación completada.";

?>