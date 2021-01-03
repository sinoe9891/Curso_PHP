<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo PHP - Clase 10</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" media="screen" title="no title">
</head>

<body>
    <div class="contenedor">
        <h1>Aprediendo PHP - Las funciones print_r y var_dump</h1>
        <div class="contenido">
            <?php
            //Siempre inician de la pocisión 0
            //versiones anteriores
            $tecnologia = ['CSS', 'HTML', 'JavaScript', 'jQuery'];
            ?>

            <!-- Dar formato a Arrat -->
            <pre>
                <?php
                    print_r($tecnologia);
                ?>
            </pre>

            <?php echo $tecnologia[2]; ?>

            <?php
            //Output 
            //Array ( [0] => CSS [1] => HTML [2] => JavaScript [3] => jQuery )
            echo "<br>";

            //[0][1][2][3]
            $lenguajes = array('CSS', 'jQuery', 'PHP', 'MySQL');
            echo $lenguajes[3];
            ?>
            <!-- var_dump nos muestra una mejor visualización de un array incluso cuantos elementos tiene -->
            <pre>
                <?php var_dump($tecnologia); ?>

            </pre>



        </div>
    </div>
</body>

</html>