<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo PHP - Clase 02</title>
</head>
<body>
    <div class="contenedor">
        <h1>Aprediendo PHP - Variables</h1>
        <div class="contenido">
            <?php
                $hola = "Hola Mundo <br>";
                $numero = 20;
                echo $hola;
                echo $numero;
                
                $saludos = "<h1>Hola</h1>";
                echo $saludos;
                
                echo "<h1>Tipos de Datos</h1>";

                // Caracter
                $letra = "c";
                // Entero
                $numero = 45;
                // Cadena
                $cadena = "Mi nombre es Danny";    
                // Flotante
                $decimal = 8.3456;
                // Booleano
                $verdadero = true;
                // Arreglos
                $carros = array("chico", "camión", "convertible");
                //nulos
                $nada = null;
                    
                echo "Caracter <br>" . $letra . "<br>";
                echo "Entero <br>" . $numero . "<br>";
                echo "String <br>" . $cadena . "<br>";
                echo "Flotante <br>" . $decimal . "<br>";
                echo "Booleano <br>" . $verdadero . "<br>";
                echo "Array <br>";
                print_r($carros);
                echo "<br>";
                echo "Null <br>" . $nada . "<br>";

                //No se pueden nombrar variables con numeros al inicio y sin guión medio
            ?>
        </div>
    </div>
</body>
</html>