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


$tables = $conn->query("SHOW TABLES");
while ($tableRow = $tables->fetch_array()) {
    $tableName = $tableRow[0];

    $tableElement = $xml->createElement($tableName);

    $rows = $conn->query("SELECT * FROM `$tableName`");
    while ($row = $rows->fetch_assoc()) {
        $item = $xml->createElement('item');
        foreach ($row as $key => $value) {
            $node = $xml->createElement($key, htmlspecialchars($value));
            $item->appendChild($node);
        }
        $tableElement->appendChild($item);
    }

    $root->appendChild($tableElement);
}

    header('Content-type: text/xml');
    header('Content-Disposition: attachment; filename="exportacion.xml"');

    echo $xml->saveXML();
    $conn->close();
?>
