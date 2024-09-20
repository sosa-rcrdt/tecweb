<?php
    function multiplo($num) {
        $num = $_GET['numero'];
        if ($num%5==0 && $num%7==0)
        {
            echo '<h3>R= El número '.$num.' SÍ es múltiplo de 5 y 7.</h3>';
        }
        else
        {
            echo '<h3>R= El número '.$num.' NO es múltiplo de 5 y 7.</h3>';
        }
    }

    function generarMatriz() {
        $matriz = array();
        $secuenciaEncontrada = false;
        $iteraciones = 0;
        $totalNumerosGenerados = 0;

        while (!$secuenciaEncontrada) {
            $fila = array();
            $fila[] = rand(1, 999); // Primer número (impar)
            $fila[] = rand(1, 999); // Segundo número (par)
            $fila[] = rand(1, 999); // Tercer número (impar)

            // Incrementamos la cuenta de números generados
            $totalNumerosGenerados += 3;
            $iteraciones++;

            // Comprobar si la secuencia es impar, par, impar
            if ($fila[0]% 2 !== 0 && $fila[1]%2 ===0 && $fila[2]% 2 !== 0) {
                $secuenciaEncontrada = true;
            }

            // Agregar la fila a la matriz
            $matriz[] = $fila;
        }

        //print_r($matriz);
        // Mostrar la matriz

        echo "Matriz generada:<br>";
        foreach ($matriz as $fila) {
            echo implode(", ", $fila) . "<br>";
        }

        // Mostrar resultados
        echo "$totalNumerosGenerados numeros obtenidos en $iteraciones iteraciones";
    }

    function multiploazar($numero) {
        $contador = 0;
        do {
            $contador++;
            $num = rand(1, 999);
        } while ($num % $numero != 0);
        echo '<h3>R= El número '.$num.' es múltiplo de '.$numero.'</h3>';
        echo '<h3>Se encontró en '.$contador.' intentos</h3>';
    }

    function generarArregloLetras() {
        $letras = array();
        for ($i = 97; $i <= 122; $i++) {
            $letras[$i] = chr($i); #chr — Devuelve un caracter específico por su código ASCII
        }
        #Lee el arreglo y crea una tabla en XHTML con echo y un ciclo foreach
        echo "<table border='1' width=100px style='text-align: center;'>";
        foreach ($letras as $key => $value) {
            echo "<tr><td>$key</td><td>$value</td></tr>";
        }
        echo "</table>";
    }

    function bienvenida($edad, $sexo) {
        if(isset($_POST["edad"]) && isset($_POST["sexo"]))
        {
            $edad = $_POST["edad"];
            $sexo = $_POST["sexo"];
            if($sexo == "femenino" && $edad >= 18 && $edad <= 35)
            {
                echo '<h3>Bienvenida, usted está en el rango de edad permitido.</h3>';
            }
            else
            {
                echo '<h3>Usted no cumple con los requisitos.</h3>';
            }
        }
    }

    $parqueVehicular = array(
        "UBN6338" => array(
            "Auto" => array(
                "marca" => "HONDA",
                "modelo" => 2020,
                "tipo" => "camioneta"
            ),
            "Propietario" => array(
                "nombre" => "Alfonzo Esparza",
                "ciudad" => "Puebla, Pue.",
                "direccion" => "C.U., Jardines de San Manuel"
            )
        ),
        "UBN6339" => array(
            "Auto" => array(
                "marca" => "MAZDA",
                "modelo" => 2019,
                "tipo" => "sedan"
            ),
            "Propietario" => array(
                "nombre" => "Ma. del Consuelo Molina",
                "ciudad" => "Puebla, Pue.",
                "direccion" => "97 oriente"
            )
        ),
        "XTY4567" => array(
            "Auto" => array(
                "marca" => "Toyota",
                "modelo" => 2018,
                "tipo" => "sedan"
            ),
            "Propietario" => array(
                "nombre" => "Carlos Gómez",
                "ciudad" => "Ciudad de México",
                "direccion" => "Av. Insurgentes Sur 123"
            )
        ),
        "ALP9087" => array(
            "Auto" => array(
                "marca" => "Nissan",
                "modelo" => 2017,
                "tipo" => "camioneta"
            ),
            "Propietario" => array(
                "nombre" => "Laura Sánchez",
                "ciudad" => "Guadalajara, Jal.",
                "direccion" => "Calle Hidalgo 234"
            )
        ),
        "DEF3456" => array(
            "Auto" => array(
                "marca" => "Ford",
                "modelo" => 2016,
                "tipo" => "sedan"
            ),
            "Propietario" => array(
                "nombre" => "Jorge López",
                "ciudad" => "Monterrey, N.L.",
                "direccion" => "Col. Obispado 333"
            )
        ),
        "GHI7890" => array(
            "Auto" => array(
                "marca" => "Volkswagen",
                "modelo" => 2021,
                "tipo" => "hachback"
            ),
            "Propietario" => array(
                "nombre" => "Mónica Díaz",
                "ciudad" => "Querétaro, Qro.",
                "direccion" => "Av. Juriquilla 444"
            )
        ),
        "JKL1234" => array(
            "Auto" => array(
                "marca" => "Chevrolet",
                "modelo" => 2019,
                "tipo" => "camioneta"
            ),
            "Propietario" => array(
                "nombre" => "Pedro Ramírez",
                "ciudad" => "Tijuana, B.C.",
                "direccion" => "Av. Revolución 555"
            )
        ),
        "MNO9876" => array(
            "Auto" => array(
                "marca" => "Hyundai",
                "modelo" => 2020,
                "tipo" => "sedan"
            ),
            "Propietario" => array(
                "nombre" => "Diego Hernández",
                "ciudad" => "Cancún, Q. Roo",
                "direccion" => "Calle Palmera 666"
            )
        ),
        "PQR4567" => array(
            "Auto" => array(
                "marca" => "Kia",
                "modelo" => 2015,
                "tipo" => "hachback"
            ),
            "Propietario" => array(
                "nombre" => "Roberto García",
                "ciudad" => "Saltillo, Coah.",
                "direccion" => "Col. San Pedro 777"
            )
        ),
        "STU6789" => array(
            "Auto" => array(
                "marca" => "BMW",
                "modelo" => 2022,
                "tipo" => "sedan"
            ),
            "Propietario" => array(
                "nombre" => "Julio Estrada",
                "ciudad" => "Morelia, Mich.",
                "direccion" => "Calle Loma Alta 888"
            )
        ),
        "VWX1234" => array(
            "Auto" => array(
                "marca" => "Audi",
                "modelo" => 2021,
                "tipo" => "camioneta"
            ),
            "Propietario" => array(
                "nombre" => "Lucía Fernández",
                "ciudad" => "León, Gto.",
                "direccion" => "Col. Jardines 999"
            )
        ),
        "YZA9876" => array(
            "Auto" => array(
                "marca" => "Jeep",
                "modelo" => 2020,
                "tipo" => "camioneta"
            ),
            "Propietario" => array(
                "nombre" => "Laura Díaz",
                "ciudad" => "Aguascalientes, Ags.",
                "direccion" => "Col. Primavera 1010"
            )
        ),
        "BCD2345" => array(
            "Auto" => array(
                "marca" => "Subaru",
                "modelo" => 2016,
                "tipo" => "hachback"
            ),
            "Propietario" => array(
                "nombre" => "Miguel Flores",
                "ciudad" => "Guadalajara, Jal.",
                "direccion" => "Calle Independencia 1212"
            )
        ),
        "EFG5678" => array(
            "Auto" => array(
                "marca" => "Tesla",
                "modelo" => 2022,
                "tipo" => "sedan"
            ),
            "Propietario" => array(
                "nombre" => "María García",
                "ciudad" => "Ciudad de México",
                "direccion" => "Av. Reforma 1313"
            )
        ),
        "HIJ3456" => array(
            "Auto" => array(
                "marca" => "Mercedes-Benz",
                "modelo" => 2018,
                "tipo" => "sedan"
            ),
            "Propietario" => array(
                "nombre" => "Felipe Calderón",
                "ciudad" => "Puebla, Pue.",
                "direccion" => "Av. Juárez 555"
            )
        )
    );

    function mostrarAutos($matricula, $todos){
        global $parqueVehicular;

        if (isset($matricula)) {
            if (isset($parqueVehicular[$matricula])) {
                echo '<pre>';
                print_r($parqueVehicular[$matricula]);
                echo '</pre>';
            } else {
                echo '<p>No se encontró el vehículo con matrícula ' . htmlspecialchars($matricula) . '.</p>';
            }
        }

        if (isset($todos)) {
            echo '<pre>';
            print_r($parqueVehicular);
            echo '</pre>';
        }
    }
?>b