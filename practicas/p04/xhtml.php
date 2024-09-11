<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Práctica 3</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Determina cuál de las siguientes variables son válidas y explica por qué:</p>
    <p>$_myvar,  $_7var,  myvar,  $myvar,  $var7,  $_element1, $house*5</p>
    <?php
        //AQUI VA MI CÓDIGO PHP
        $_myvar;
        $_7var;
        //myvar;       // Inválida
        $myvar;
        $var7;
        $_element1;
        //$house*5;     // Invalida

        echo '<h4>Respuesta:</h4>';

        echo '<ul>';
        echo '<li>$_myvar es válida porque inicia con guión bajo.</li>';
        echo '<li>$_7var es válida porque inicia con guión bajo.</li>';
        echo '<li>myvar es inválida porque no tiene el signo de dolar ($).</li>';
        echo '<li>$myvar es válida porque inicia con una letra.</li>';
        echo '<li>$var7 es válida porque inicia con una letra.</li>';
        echo '<li>$_element1 es válida porque inicia con guión bajo.</li>';
        echo '<li>$house*5 es inválida porque el símbolo * no está permitido.</li>';
        echo '</ul>';

        unset($_myvar);
        unset($_7var);
        unset($myvar);
        unset($var7);
        unset($_element1);

        //ejercicio 2

        echo '<h2>Ejercicio 2</h2>';

        echo '<p> Proporcionar los valores de $a, $b, $c como sigue y muestra el contenido de cada variable:</p>';

        $a = "ManejadorSQL";
        $b = 'MySQL';
        $c = &$a;

        echo $a;
        echo '<br>';
        echo $b;
        echo '<br>';
        echo $c;

        echo '<p> Agrega al código actual las siguientes asignaciones y Vuelve a mostrar el contenido de cada una de las variables:</p>';

        $a = "PHP server";
        $b = &$a;

        echo $a;
        echo '<br>';
        echo $b;
        echo '<br>';
        echo $c;

        echo '<p> Se reescribió la variable $a, y la variable $b se asignó por referencia a la variable $a, por lo que al cambiar el valor de $a también cambia el valor de $b. 
        <br> La variable $c se asignó por referencia a la variable $a, por lo que al cambiar el valor de $a también cambia el valor de $c.</p>';

        unset($a);
        unset($b);
        unset($c);

        //ejercicio 3

        echo '<h2>Ejercicio 3</h2>';

        echo '<p>Muestra el contenido de cada variable inmediatamente después de cada asignación,
        verificar la evolución del tipo de estas variables (imprime todos los componentes de los
        arreglo):</p>';

        $a = "PHP5 ";
        echo $a.'<br>';

        $z[] = &$a;
        print_r($z);
        echo '<br>';

        $b = "5a version de PHP";
        echo $b.'<br>';

        $c = (int)$b * 10;
        echo $c.'<br>';

        $a .= $b;
        echo $a.'<br>';

        $b = (int)$b*$c;
        echo $b.'<br>';

        $z[0] = "MySQL";
        print_r($z);

        echo '<br>';
        echo '<br>';

        echo '<h2>Ejercicio 4</h2>';

        echo '<p>Lee y muestra los valores de las variables del ejercicio anterior, pero ahora con la ayuda de
        la matriz $GLOBALS o del modificador global de PHP.</p>';

        echo $GLOBALS['a'] . '<br>';
        echo $GLOBALS['b'] . '<br>';
        echo $GLOBALS['c'] . '<br>';
        print_r($GLOBALS['z']);

        echo '<h2>Ejercicio 5</h2>';

        echo '<p>Dar el valor de las variables $a, $b, $c al final del siguiente script:</p>';

        $a = "7 personas";
        echo "$a <br>";
        $b = (integer) $a;
        echo "$b <br>";
        $a = "9E3";
        echo "$a <br>";
        $c = (double) $a;
        echo "$c <br>";

        ?>

    ?>
</body>
</html>