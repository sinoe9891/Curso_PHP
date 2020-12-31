<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo PHP - Clase 14</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" media="screen" title="no title">
</head>

<body>
    <div class="contenedor">
        <h1>Aprediendo PHP - Revisando si un valor existe en un arreglo</h1>
        <div class="contenido">
            <?php
                $tecnologia = array('CSS', 'HTML', 'JavaScript', 'jQuery');
                $existe =  in_array('HTML5', $tecnologia);
            ?>
            <pre>
            <!-- <?php print_r($existe); ?> -->
                <?php var_dump($existe); ?>
            </pre>

            <?php
                $persona = array(
                    'nombre' => 'Danny',
                    'pais' => 'Honduras',
                    'profesion' => 'Desarrollador web',

                )
            ?>
            <!-- convertimos el array asociativo a uno indexado -->
            <?php $existe2 = in_array('Danny', array_values($persona)); ?>
            <!-- output: true -->
            <pre>
                <?php var_dump($existe2); ?>
            </pre>
        </div>
    </div>
</body>

</html>