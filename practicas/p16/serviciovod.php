<?php
libxml_use_internal_errors(true);

// Cargar y validar el XML
$xml = new DOMDocument();
$documento = file_get_contents('catalogovod.xml');

if (!$documento) {
    die("No se pudo cargar el archivo XML.");
}

$xml->loadXML($documento, LIBXML_NOBLANKS);
$xsd = 'serviciovod.xsd';

if (!$xml->schemaValidate($xsd)) {
    $errors = libxml_get_errors();
    $noError = 1;
    $lista = '';

    foreach ($errors as $error) {
        $lista .= '[' . ($noError++) . ']: ' . htmlspecialchars($error->message) . '</><br/>';
    }

    $lista .= '';
    echo "<div style='color: red; font-family: Arial;'><br>Errores detectados:<br><br>$lista</div>";
    die();
}

// Aquí enviamos el XML validado al navegador para que sea procesado con el XSL en el cliente.
header('Content-Type: text/xml');
echo $xml->saveXML();
?>
