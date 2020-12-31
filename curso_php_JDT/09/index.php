<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo PHP - Clase 09</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" media="screen" title="no title">
</head>
<body>
    <div class="contenedor">
        <h1>Aprediendo PHP - Arreglos Indexados en PHP</h1>
        <div class="contenido">
            <?php 
                //Siempre inician de la pocisión 0
                //versiones anteriores
                $tecnologia = ['CSS', 'HTML', 'JavaScript', 'jQuery'];
                echo $tecnologia[2];
                echo "<br>";
                
                //[0][1][2][3]
                $lenguajes = array('CSS', 'jQuery', 'PHP', 'MySQL');
                echo $lenguajes[3];
            ?>
        </div>
    </div>
</body>
</html>