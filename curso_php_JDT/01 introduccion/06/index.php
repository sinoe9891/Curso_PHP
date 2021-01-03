<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo PHP - Clase 06</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" media="screen" title="no title">
</head>
<body>
    <div class="contenedor">
        <h1>Aprediendo PHP - Operaciones</h1>
        <div class="contenido">
            <?php 
                echo "10 + 20= " . (10+20);
                echo "<hr>";

                $numero1 = 10;
                $numero2 = 20;
                $numero3 = 30;
                $numero4 = 40;
                //Suma
                echo $numero1 + $numero2;
                echo "<hr>";
                //Resta
                echo $numero4 - $numero3;
                echo "<hr>";
                //Multiplicación
                echo $numero1 * $numero2;
                echo "<hr>";
                //Divide
                echo $numero4 / $numero1;
                echo "<hr>";
                //Parentesis
                echo ($numero1 + $numero2) * ($numero1 * .16);
                echo "<hr>";
                //Incrementos por 1
                $numero1++;
                echo $numero1;
                echo "<hr>";

                //Decremento por 1
                $numero1--;
                echo $numero1;
                echo "<hr>";

                // Incremento en la misma variable
                $total = 0;
                $total += 10;
                $total += 20;
                $total += 10;

                echo $total;

                echo "<hr>";

                // Decremento en la misma variable
                $total = 100;
                $total -= 10;
                $total -= 20;
                $total -= 10;

                echo $total;

                echo "<hr>";

                echo 20 % 3;

            ?>
        </div>
    </div>
</body>
</html>