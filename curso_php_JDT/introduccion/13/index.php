<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo PHP - Clase 13</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" media="screen" title="no title">
</head>

<body>
    <div class="contenedor">
        <h1>Aprediendo PHP - Arrays Multidimensionales en PHP</h1>
        <div class="contenido">
            <?php
                $persona = array(
                    'datos' => array(
                        'nombre' => 'Danny',
                        'pais' => 'Honduras',
                        'profesion' => 'Desarrollador web',
                    ),
                    'lenguajes' => array(
                        'front_end' => array('css', 'html5', 'javascript', 'jquery'),
                        'back_end' => array('php', 'mysql', 'python')
                    )
                )
            ?>
            <!-- Accediendo a los arreglos -->
            <pre>
                <!-- <?php print_r($persona); ?> -->
                <hr>
                <?php print_r($persona['datos']); ?>
                <hr>
                <?php print_r($persona['lenguajes']['front_end']); ?>
                <hr>
                <?php print_r($persona['lenguajes']['front_end'][2]); ?>
            </pre>
        </div>
    </div>
</body>

</html>