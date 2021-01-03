<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo PHP - Clase 17</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" media="screen" title="no title">
</head>

<body>
    <div class="contenedor">
        <h1>Aprediendo PHP - For en PHP</h1>
        <div class="contenido">
            <?php
                $tecnologia = array('CSS', 'HTML', 'JavaScript', 'jQuery', 'Python');
            ?>
            
            <?php for ($i=0; $i<count($tecnologia); $i++) { 
                echo $tecnologia[$i] . '<br>';
            }?>

            <hr>

            <?php for ($i=0; $i < 10; $i++) { 
               echo $i . '<br>';
            }?>

            <hr>

            <?php for ($i=0; $i <= 10; $i++) { 
                if ($i == 5) {
                    echo "Cinco <br>";
                    continue;
                }
                echo $i . '<br>';
            }?>

            <hr>

            <?php for ($i=0; $i <= 10; $i++) { 
                if ($i % 2 == 0) {
                    echo $i . " Es par <br>";
                    continue;
                }else{
                    echo $i . " Es impar <br>";
                }
                
                
            }?>

        </div>
</body>

</html>