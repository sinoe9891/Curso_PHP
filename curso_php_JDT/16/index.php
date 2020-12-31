<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo PHP - Clase 16</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" media="screen" title="no title">
</head>

<body>
    <div class="contenedor">
        <h1>Aprediendo PHP - Recorriendo Arreglo Multidimensional</h1>
        <div class="contenido">
            <?php
            $persona = array(
                'datos' => array(
                    'nombre' => 'Danny',
                    'pais' => 'Honduras',
                    'profesion' => 'Desarrollador web',
                ),
                'lenguajes' => array(
                    'front_end' => array('Css', 'Html5', 'Javascript', 'jQuery'),
                    'back_end' => array('Php', 'MySql', 'Python')
                )
            )
            ?>
            <h3>Foreach arreglos Multidimensionales</h3>
            <ul>
                <?php foreach ($persona['datos'] as $personas) : ?>
                    <li><?php echo $personas ?></li>
                <?php endforeach ?>

                <hr>

                <?php foreach ($persona as $lenguajes) : ?>
                    <?php if (array_key_exists('front_end', $lenguajes)) : ?>
                        <h3>Lenguajes de Front End</h3>
                        <?php foreach ($lenguajes['front_end'] as $front) : ?>
                            <li>
                                <?php echo $front ?>
                            </li>
                        <?php endforeach ?>
                    <?php endif ?>
                <?php endforeach ?>
                <hr>

                <?php foreach ($persona as $lenguajes) : ?>
                    <?php if (array_key_exists('back_end', $lenguajes)) : ?>
                        <h3>Lenguajes de Back End</h3>
                        <?php foreach ($lenguajes['back_end'] as $back) : ?>
                            <li>
                                <?php echo $back ?>
                            </li>
                        <?php endforeach ?>
                    <?php endif ?>
                <?php endforeach ?>

            </ul>
            <pre>
                <!-- <?php print_r($persona); ?> -->
            </pre>

        </div>
</body>

</html>