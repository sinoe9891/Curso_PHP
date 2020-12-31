<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo PHP - Clase 07</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" media="screen" title="no title">
</head>
<body>
    <div class="contenedor">
        <h1>Aprediendo PHP - Estructuras de Control PHP</h1>
        <div class="contenido">
            <?php 
                if(1 < 2){
                    echo "1 es menor";
                }else{
                    echo "1 es mayor";
                }
                echo "<hr>";

                $edad1 = 12;
                $edad2 = 13;
                if ($edad1 < $edad2) {
                    echo "La edad 1 es menor";
                }elseif ($edad1 == $edad2) {
                    echo "Las edades son iguales";
                }else{
                    echo "La edad 2 es menor";
                }
                echo "<hr>";
                
                $numero1 = 10;
                
                if ($numero1 % 2 == 0) {
                    echo "El número es par";
                }else{
                    echo "El número es impar";
                }
            ?>
        </div>
    </div>
</body>
</html>