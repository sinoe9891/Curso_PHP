<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Aprendiendo PHP</title>
    <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

    <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
</head>

<body>

    <div class="contenedor">
        <h1>Aprendiendo PHP</h1>

        <?php $resultado = $_POST; ?>

        <p>Nombre: <?php echo $resultado['nombre']?></p>
        <p>Aprellido: <?php echo $resultado['apellido']?></p>



        <!-- <pre>
            <?php var_dump($resultado['nombre']); ?>
        </pre> -->

        <!-- <pre>
            <?php var_dump($resultado); ?>
        </pre> -->


        <!-- <pre>
            <?php
                var_dump($_POST)
            ?>
        </pre> -->

    </div>
</body>

</html>