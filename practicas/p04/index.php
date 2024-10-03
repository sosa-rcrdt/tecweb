<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Práctica 4</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Determina cuál de las siguientes variables son válidas y explica por qué:</p>
    <p>$_myvar,  $_7var,  myvar,  $myvar,  $var7,  $_element1, $house*5</p>
    <?php
        // Inicializar variables
        $_myvar = null;
        $_7var = null;
        // myvar es inválida porque no tiene el signo de dolar ($).
        $myvar = null;
        $var7 = null;
        $_element1 = null;
        // $house*5 es inválida porque el símbolo * no está permitido.

        echo '<h4>Respuesta:</h4>';
        echo '<p><ul>';
        echo '<li>$_myvar es válida porque inicia con guión bajo.</li>';
        echo '<li>$_7var es válida porque inicia con guión bajo.</li>';
        echo '<li>myvar es inválida porque no tiene el signo de dolar ($).</li>';
        echo '<li>$myvar es válida porque inicia con una letra.</li>';
        echo '<li>$var7 es válida porque inicia con una letra.</li>';
        echo '<li>$_element1 es válida porque inicia con guión bajo.</li>';
        echo '<li>$house*5 es inválida porque el símbolo * no está permitido.</li>';
        echo '</ul></p>';

        // Destrucción de variables
        unset($_myvar, $_7var, $myvar, $var7, $_element1);

        // Ejercicio 2
        echo '<h2>Ejercicio 2</h2>';
        echo '<p> Proporcionar los valores de $a, $b, $c como sigue y muestra el contenido de cada variable:</p>';

        $a = "ManejadorSQL";
        $b = 'MySQL';
        $c = &$a; // Asignación por referencia

        echo '<p>$a: '.$a.'</p>';
        echo '<p>$b: '.$b.'</p>';
        echo '<p>$c: '.$c.'</p>';

        $a = "PHP server"; // Cambiando el valor de $a
        $b = &$a; // $b ahora apunta a $a

        echo '<p>$a: '.$a.'</p>';
        echo '<p>$b: '.$b.'</p>';
        echo '<p>$c: '.$c.'</p>';

        echo '<p> Se reescribió la variable $a, y la variable $b se asignó por referencia a la variable $a, por lo que al cambiar el valor de $a también cambia el valor de $b. 
        <br/> La variable $c se asignó por referencia a la variable $a, por lo que al cambiar el valor de $a también cambia el valor de $c.</p>';

        unset($a, $b, $c);

        // Ejercicio 3
        echo '<h2>Ejercicio 3</h2>';
        echo '<p>Muestra el contenido de cada variable inmediatamente después de cada asignación,
        verificar la evolución del tipo de estas variables (imprime todos los componentes de los
        arreglo):</p>';

        $a = "PHP5 ";
        echo '<p>$a: '.$a.'</p>';

        $z[] = &$a; // Asignación por referencia
        echo '<p>$z: ';
        print_r($z);
        echo '</p>';

        $b = "5a version de PHP";
        echo '<p>$b: '.$b.'</p>';

        $c = (int)$b * 10; // Convierte $b a entero
        echo '<p>$c: '.$c.'</p>';

        $a .= $b; // Concatenación
        echo '<p>$a: '.$a.'</p>';

        $b = (int)$b * $c; // Multiplicación
        echo '<p>$b: '.$b.'</p>';

        $z[0] = "MySQL"; // Cambia el primer elemento de $z
        echo '<p>$z: ';
        print_r($z);
        echo '</p><br/>';

        // Ejercicio 4
        echo '<h2>Ejercicio 4</h2>';
        echo '<p>Lee y muestra los valores de las variables del ejercicio anterior, pero ahora con la ayuda de
        la matriz $GLOBALS o del modificador global de PHP.</p>';

        // Verifica si las variables existen antes de acceder a ellas
        echo '<p>$a: '.(isset($GLOBALS['a']) ? $GLOBALS['a'] : 'No definida').'</p>';
        echo '<p>$b: '.(isset($GLOBALS['b']) ? $GLOBALS['b'] : 'No definida').'</p>';
        echo '<p>$c: '.(isset($GLOBALS['c']) ? $GLOBALS['c'] : 'No definida').'</p>';
        echo '<p>$z: ';
        print_r(isset($GLOBALS['z']) ? $GLOBALS['z'] : 'No definida');
        echo '</p>';

        unset($a, $b, $c, $z);

        // Ejercicio 5
        echo '<h2>Ejercicio 5</h2>';
        echo '<p>Dar el valor de las variables $a, $b, $c al final del siguiente script:</p>';

        $a = "7 personas";
        echo '<p>$a: '.$a.'</p>';
        $b = (integer)$a; // Convierte a entero
        echo '<p>$b: '.$b.'</p>';
        $a = "9E3"; // Cambia el valor de $a
        echo '<p>$a: '.$a.'</p>';
        $c = (double)$a; // Convierte a doble
        echo '<p>$c: '.$c.'</p>';

        unset($a, $b, $c);

        // Ejercicio 6
        echo '<h2>Ejercicio 6</h2>';
        echo '<p>Dar y comprobar el valor booleano de las variables $a, $b, $c, $d, $e y $f y muéstralas
        usando la función var_dump(<datos>).</p>';

        $a = "0";
        $b = "TRUE";
        $c = FALSE;
        $d = ($a OR $b);
        $e = ($a AND $c);
        $f = ($a XOR $b);

        echo '<p>$a: ';
        var_dump($a);
        echo '</p>';
        echo '<p>$b: ';
        var_dump($b);
        echo '</p>';
        echo '<p>$c: ';
        var_dump($c);
        echo '</p>';
        echo '<p>$d: ';
        var_dump($d);
        echo '</p>';
        echo '<p>$e: ';
        var_dump($e);
        echo '</p>';
        echo '<p>$f: ';
        var_dump($f);
        echo '</p>';

        echo '<p>Después investiga una función de PHP que permita transformar el valor booleano de $c y $e
        en uno que se pueda mostrar con un echo:</p>';

        echo '<p>$c: ' . var_export($c, true) . '</p>';
        echo '<p>$e: ' . var_export($e, true) . '</p>';

        unset($a, $b, $c, $d, $e, $f);

        // Ejercicio 7
        echo '<h2>Ejercicio 7</h2>';
        echo '<p> Usando la variable predefinida $_SERVER, determina lo siguiente:</p>';

        echo '<p> <b> a. </b> La versión de Apache y PHP</p>';
        echo '<p>Version de Apache: '.$_SERVER['SERVER_SOFTWARE'].'</p>';
        echo '<p> <b> b. </b> El nombre del sistema operativo (servidor), </p>';
        echo '<p>Nombre del sistema operativo: '.$_SERVER['SERVER_NAME'].'</p>';
        echo '<p> <b> c. </b> El idioma del navegador (cliente).</p>';
        echo '<p>Idioma del navegador: '.$_SERVER['HTTP_ACCEPT_LANGUAGE'].'</p>';
    ?>
    <p>
        <a href="https://validator.w3.org/markup/check?uri=referer"><img
        src="https://www.w3.org/Icons/valid-xhtml11" alt="Valid XHTML 1.1" height="31" width="88" /></a>
    </p>
</body>
</html>