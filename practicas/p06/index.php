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

    <h2>Ejercicio 2</h2>
    <p>Generar 3 números aleatorios hasta obtener una secuencia compuesta por 3 números con la estructura impar, par, impar</p>
    <?php
        include_once 'src/funciones.php';
        // Ejecutar el programa
        generarMatriz();
    ?>

    <h2>Ejercicio 3</h2>
    <p>Utiliza un ciclo while para encontrar el primer número entero obtenido aleatoriamente, pero que además sea múltiplo de un número dado.</p>
    <?php
        include_once 'src/funciones.php';
        // Ejecutar el programa
        multiploazar($_GET['numero']);
    ?>

    <h2>Ejercicio 4</h2>
    <p>Crear un arreglo cuyos índices van de 97 a 122 y cuyos valores son las letras de la ‘a’ a la ‘z’. Usa la función chr(n) que devuelve el caracter cuyo código ASCII es n para poner el valor en cada índice.</p>
    <?php
        include_once 'src/funciones.php';
        generarArregloLetras();
    ?>

    <fieldset>
        <legend><h2>Ejercicio 5</h2></legend>
        <form method="post">
            <label for="edad">Introduce tu edad</label><br>
            <input type="text" name="edad" id="edad" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required><br><br>
            <label for="sexo">Selecciona tu sexo</label><br>
            <select name="sexo" id="sexo">
                <option value="femenino">Femenino</option>
                <option value="masculino">Masculino</option>
            </select><br><br>
            <input type="submit" style="margin-bottom: 15px">
        </form>
    </fieldset>
    <?php
        include_once 'src/funciones.php';
        bienvenida($_POST["edad"], $_POST["sexo"]);
    ?>

    <fieldset>
        <legend><h2>Ejercicio 6</h2></legend>
        <form method="post">
            Matrícula: <input type="text" name="matricula">
            <input type="submit" value="Consultar">
            <br>
        </form>
        <form method="post">
            <input type="submit" name="todos" value="Mostrar Todos los Autos" style="margin-bottom: 20px">
        </form>
    </fieldset>
    <?php
    include_once 'src/funciones.php';
    $matricula = isset($_POST["matricula"]) ? $_POST["matricula"] : null;
    $todos = isset($_POST["todos"]) ? $_POST["todos"] : null;
    mostrarAutos($matricula, $todos);
    ?>
</body>
</html>