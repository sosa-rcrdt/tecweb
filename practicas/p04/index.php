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

        echo '$a: '.$a;
        echo '<br>';
        echo '$b: '.$b;
        echo '<br>';
        echo '$c: '.$c;

        echo '<p> Agrega al código actual las siguientes asignaciones y Vuelve a mostrar el contenido de cada una de las variables:</p>';

        $a = "PHP server";
        $b = &$a;

        echo '$a: '.$a;
        echo '<br>';
        echo '$b: '.$b;
        echo '<br>';
        echo '$c: '.$c;

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
        echo '$a: '.$a.'<br>';

        $z[] = &$a;
        echo'$z: ';
        print_r($z);
        echo '<br>';

        $b = "5a version de PHP";
        echo '$b: '.$b.'<br>';

        $c = (int)$b * 10;
        echo '$c: '.$c.'<br>';

        $a .= $b;
        echo '$a: '.$a.'<br>';

        $b = (int)$b*$c;
        echo '$b: '.$b.'<br>';

        $z[0] = "MySQL";
        echo '$z: ';
        print_r($z);

        echo '<br>';
        echo '<br>';

        //ejercicio 4

        echo '<h2>Ejercicio 4</h2>';

        echo '<p>Lee y muestra los valores de las variables del ejercicio anterior, pero ahora con la ayuda de
        la matriz $GLOBALS o del modificador global de PHP.</p>';

        echo '$a: '.$GLOBALS['a'] . '<br>';
        echo '$b: '.$GLOBALS['b'] . '<br>';
        echo '$c: '.$GLOBALS['c'] . '<br>';
        echo '$z: ';
        print_r($GLOBALS['z']);

        unset($a);
        unset($b);
        unset($c);
        unset($z);

        //ejercicio 5

        echo '<h2>Ejercicio 5</h2>';

        echo '<p>Dar el valor de las variables $a, $b, $c al final del siguiente script:</p>';

        $a = "7 personas";
        echo '$a: '.$a.'<br>';
        $b = (integer) $a;
        echo '$b: '.$b.'<br>';
        $a = "9E3";
        echo '$a: '.$a.'<br>';
        $c = (double) $a;
        echo '$c: '.$c.'<br>';

        unset($a);
        unset($b);
        unset($c);

        //ejercicio 6

        echo '<h2>Ejercicio 6</h2>';

        echo '<p>Dar y comprobar el valor booleano de las variables $a, $b, $c, $d, $e y $f y muéstralas
        usando la función var_dump(<datos>).</p>';

        $a = "0";
        $b = "TRUE";
        $c = FALSE;
        $d = ($a OR $b);
        $e = ($a AND $c);
        $f = ($a XOR $b);

        echo '$a: ';
        var_dump($a);
        echo "<br>";
        echo '$b: ';
        var_dump($b);
        echo "<br>";
        echo '$c: ';
        var_dump($c);
        echo "<br>";
        echo '$d: ';
        var_dump($d);
        echo "<br>";
        echo '$e: ';
        var_dump($e);
        echo "<br>";
        echo '$f: ';
        var_dump($f);
        echo "<br>";

        echo '<p>Después investiga una función de PHP que permita transformar el valor booleano de $c y $e
        en uno que se pueda mostrar con un echo:</p>';

        echo '$c: ' . var_export($c, true) . '<br>';
        echo '$e: ' . var_export($e, true) . '<br>';

        unset($a);
        unset($b);
        unset($c);
        unset($d);
        unset($e);
        unset($f);

        //ejercicio 7

        echo '<h2>Ejercicio 7</h2>';

        echo '<p> Usando la variable predefinida $_SERVER, determina lo siguiente:</p>';

        echo '<p> <b> a. </b> La versión de Apache y PHP</p>';
        echo 'Version de Apache: '.$_SERVER['SERVER_SOFTWARE'].'<br>';
        echo '<p> <b> b. </b> El nombre del sistema operativo (servidor), </p>';
        echo 'Nombre del sistema operativo: '.$_SERVER['SERVER_NAME'].'<br>';
        echo '<p> <b> c. </b> El idioma del navegador (cliente).</p>';
        echo 'Idioma del navegador: '.$_SERVER['HTTP_ACCEPT_LANGUAGE'].'<br>';
    ?>
</body>
</html>