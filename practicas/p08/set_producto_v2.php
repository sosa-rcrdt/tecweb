<?php
// Obtener los datos del formulario (se asume que provienen de un método POST)
$nombre = $_POST['nombre'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$precio = $_POST['precio'];
$detalles = $_POST['detalles'];
$unidades = $_POST['unidades'];
$imagen = '0';

/** SE CREA EL OBJETO DE CONEXION */
@$link = new mysqli('localhost', 'root', 'changocome', 'marketzone', 3307);

/** comprobar la conexión */
if ($link->connect_errno) {
    die('Falló la conexión: ' . $link->connect_error . '<br/>');
    /** NOTA: con @ se suprime el Warning para gestionar el error por medio de código */
}

$sql = "SELECT * FROM productos WHERE nombre = '{$nombre}' AND marca = '{$marca}' AND modelo = '{$modelo}'";
    $result = $link->query($sql); // Ejecuta la consulta y guarda el resultado

    if ($result->num_rows > 0) { // Si hay al menos un registro
        echo '<h1>El producto ya se encuentra registrado</h1>';
        echo '<p><strong>Nombre:</strong> '.$nombre.'</p>';
        echo '<p><strong>Marca:</strong> '.$marca.'</p>';
        echo '<p><strong>Modelo:</strong> '.$modelo.'</p>';
    } else {
        $sql = "INSERT INTO productos VALUES (null, '{$nombre}', '{$marca}', '{$modelo}', {$precio}, '{$detalles}', {$unidades}, '{$imagen}', 0)";
        if ($link->query($sql)) { // Ejecuta la consulta y guarda el resultado
            echo '<h1>Producto Insertado</h1>';
            echo '<p><strong>Nombre:</strong> '.$nombre.'</p>';
            echo '<p><strong>Marca:</strong> '.$marca.'</p>';
            echo '<p><strong>Modelo:</strong> '.$modelo.'</p>';
            echo '<p><strong>Precio:</strong> '.$precio.'</p>';
            echo '<p><strong>Detalles:</strong> '.$detalles.'</p>';
            echo '<p><strong>Unidades:</strong> '.$unidades.'</p>';
            echo '<p><strong>ID del Producto:</strong> '.$link->insert_id.'</p>';
        } else {
            echo '<p>El Producto no pudo ser insertado =(</p>';
        }
    }

// Cerrar la conexión
$link->close();
?>
