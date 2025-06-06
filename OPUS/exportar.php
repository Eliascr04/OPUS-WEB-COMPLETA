<?php
$conexionBD = new mysqli('localhost', 'alumno1', 'alumno1', 'bibliotecamuskiz'); // Crear la conexión con Mysql

if ($conexionBD->connect_error) { // Verificar si la conexión da error
    echo "Error de conexión";
} else {
    $documentoXML = new DOMDocument('1.0', 'UTF-8'); // Crear el documento XML con versión y codificación
    $documentoXML->formatOutput = true;
    $nodoRaiz = $documentoXML->appendChild($documentoXML->createElement('base_de_datos')); // Crear el nodo raíz <base_de_datos>
    $resultadoConsulta = $conexionBD->query("SELECT * FROM libros"); // Consulta para obtener los libros

    // Recorrer cada fila del resultado
    while ($filaLibro = $resultadoConsulta->fetch_assoc()) {

        $nodoLibro = $nodoRaiz->appendChild($documentoXML->createElement('libro')); // Crear un nodo <libro> por cada registro

        // Recorrer cada campo del registro columna = el valor
        foreach ($filaLibro as $nombreCampo => $valorCampo) {
            // Sanear el nombre del campo para que sea un nombre válido de etiqueta XML
            $nombreCampoXML = preg_replace('/[^a-zA-Z0-9_\-]/', '_', $nombreCampo); // Reemplaza caracteres inválidos por "_"
            
            // Crear nodos hijos dentro de <libro> con cada dato
            $nodoLibro->appendChild($documentoXML->createElement($nombreCampoXML, htmlspecialchars($valorCampo)));
        }
    }

    // Enviar el XML al navegador como archivo descargable
    header('Content-type: text/xml');
    header('Content-Disposition: attachment; filename="libros.xml"');
    echo $documentoXML->saveXML();

    $conexionBD->close(); // Cerrar la conexión a la base de datos
}
?>

