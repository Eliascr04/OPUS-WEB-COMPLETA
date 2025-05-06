<?php
$host = 'localhost';
$db = 'bibliotecamuskiz';
$user = 'alumno1';
$pass = 'alumno1';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$xml = new DOMDocument('1.0', 'UTF-8');
$xml->formatOutput = true;
$root = $xml->createElement('base_de_datos');
$xml->appendChild($root);

//exportar la tabla 'libros'
$tableName = 'libros';
$tableElement = $xml->createElement($tableName);

$rows = $conn->query("SELECT * FROM `$tableName`");
while ($row = $rows->fetch_assoc()) {
    $item = $xml->createElement('libro');
    foreach ($row as $key => $value) {
        $node = $xml->createElement($key, htmlspecialchars($value));
        $item->appendChild($node);
    }
    $tableElement->appendChild($item);
}

$root->appendChild($tableElement);

// Enviar el XML al navegador como descarga
header('Content-type: text/xml');
header('Content-Disposition: attachment; filename="libros.xml"');

echo $xml->saveXML();
$conn->close();
?>

