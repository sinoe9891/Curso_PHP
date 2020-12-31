<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo PHP - Clase 05</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" media="screen" title="no title">
</head>
<body>
    <div class="contenedor">
        <h1>Aprediendo PHP - Comentarios en PHP</h1>
        <div class="contenido">
            <?php
                $titulo = "Aprendiendo PHP ";
            ?>
            <?php //Esto es una sola línea ?>

            <?php 
            /*
            * Esto es de varias líneas
            *
            */
            ?>
            
            <p><?php echo $titulo; ?></p>


        </div>
    </div>
</body>
</html>