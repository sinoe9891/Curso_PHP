<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo PHP - Clase 12</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" media="screen" title="no title">
</head>

<body>
    <div class="contenedor">
        <h1>Aprediendo PHP - Arrays Asociativos en PHP</h1>
        <div class="contenido">
            <?php
                $persona = array(
                    'nombre' => 'Danny',
                    'pais' => 'Honduras',
                    'profesion' => 'Desarrollador web',

                )
            ?>

            <pre>
                <?php print_r($persona); ?>
            </pre>

            <?php echo $persona['nombre']; ?>
            
            <!-- Convierte a un array indexado -->
            <pre>
                <?php print_r(array_values($persona)); ?>
            </pre>

            <pre>
                <?php print_r(array_keys($persona)); ?>
            </pre>

        </div>
    </div>
</body>

</html>