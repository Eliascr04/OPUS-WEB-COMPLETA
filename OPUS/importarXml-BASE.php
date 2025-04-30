<?php

$host = 'localhost';
$db = 'bibliotecamuskiz';
$user = 'alumno1';
$pass = 'alumno1';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


$xml = new DOMDocument();
$xml->load('C:/Users/chris/Desktop/PAGINA WEB OPUS/importar xml/catalogo.xml');

foreach ($xml->documentElement->childNodes as $table) {
    if ($table->nodeType !== XML_ELEMENT_NODE) continue;

    $tableName = $table->nodeName;

    foreach ($table->childNodes as $item) {
        if ($item->nodeType !== XML_ELEMENT_NODE) continue;

        $columns = [];
        $values = [];

        foreach ($item->childNodes as $field) {
            if ($field->nodeType !== XML_ELEMENT_NODE) continue;

            $columns[] = $field->nodeName;
            $values[] = "'" . $conn->real_escape_string($field->nodeValue) . "'";
        }

        $sql = "INSERT INTO `$tableName` (" . implode(',', $columns) . ") VALUES (" . implode(',', $values) . ")";
        $conn->query($sql);
    }
}

$conn->close();
echo "Importación completada.";
?>