<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo PHP - Clase 15</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" media="screen" title="no title">
</head>

<body>
    <div class="contenedor">
        <h1>Aprediendo PHP - Recorriendo un arreglo con foreach</h1>
        <div class="contenido">
            <?php
                $tecnologia = array('CSS', 'HTML', 'JavaScript', 'jQuery', 'Python');
            ?>
                
            <h2>Lenguajes que conozco</h2>
            <ul>
                <?php foreach ($tecnologia as $key => $tecnologias): ?>
                    <li><?php echo $tecnologias ?></li>
                <?php endforeach; ?>
            </ul>

            <?php
            //Llave y Valor
                $persona = array(
                    'Nombre' => 'Danny',
                    'Pais' => 'Honduras',
                    'Profesion' => 'Desarrollador web',
                )
            ?>

            <h2>Datos Personales</h2>
            <ul>
                <?php foreach ($persona as $key => $val): ?>
                
                    <li><?php echo $key . ' : '. $val?></li>
                    <!-- Output:
                    Nombre : Danny
                    Pais : Honduras
                    Profesion : Desarrollador web -->
                <?php endforeach; ?>

            </ul>


            

        </div>
    </div>
</body>

</html>