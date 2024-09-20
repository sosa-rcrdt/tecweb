<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 4</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Escribir programa para comprobar si un número es un múltiplo de 5 y 7</p>
    <?php
        include_once 'src/funciones.php';
        // Incluir el archivo que contiene la función para comprobar si un número es múltiplo de 5 y 7
        if(isset($_GET['numero'])) // Verificar si se ha enviado el número a comprobar, el GET es un array asociativo que contiene las variables enviadas por el método GET
        {
            multiplo($_GET['numero']); // Llamar a la función multiplo con el número enviado por el método GET
        }
        else
        {
            echo '<h3>Introduce un número para comprobar si es múltiplo de 5 y 7</h3>';
        }
    ?>

    <h2>Ejemplo de POST</h2>
    <form action="http://localhost/tecweb/practicas/p04/index.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>
    <br>
    <?php
        if(isset($_POST["name"]) && isset($_POST["email"]))
        {
            echo $_POST["name"];
            echo '<br>';
            echo $_POST["email"];
        }
    ?>
</body>
</html>
<!-- Ejercicio  1 multiplo de 5 y 7 -->