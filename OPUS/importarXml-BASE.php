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
$xml->load('xml/catalogo1.xml');


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

    // Insertar en la tabla 'libros_xml' sin necesidad de interactuar con la tabla 'autores'
    $sql = "INSERT INTO libros_xml (titulo, fechaPublicacion, autor, numPaginas, genero, edadRecomendada, portada) 
            VALUES ('$titulo', '$fechaPublicacion', '$autor', '$numPaginas', '$genero', '$edadRecomendada', '$portada')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Libro '$titulo' insertado exitosamente.<br>";
    } else {
        echo "Error al insertar el libro '$titulo': " . $conn->error . "<br>";
    }
}

$conn->close();
echo "Importación completada.";

?>