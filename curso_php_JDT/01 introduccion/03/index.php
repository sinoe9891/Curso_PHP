<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo PHP - Clase 03</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" media="screen" title="no title">

</head>
<body>
    <div class="contenedor">
        <h1>Aprediendo PHP - Concatenando valores</h1>
        <div class="contenido">
            <?php
                $nombre = "Danny";
                $apellido = "Velásquez";

                $edad = 31;
                echo "<hr>";

                echo $nombre . " " .$apellido . " Edad: " . $edad;
            ?>
        </div>
    </div>
</body>
</html>