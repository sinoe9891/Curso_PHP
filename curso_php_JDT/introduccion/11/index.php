<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo PHP - Clase 11</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" media="screen" title="no title">
</head>

<body>
    <div class="contenedor">
        <h1>Aprediendo PHP - Agregando nuevos valores a un array</h1>
        <div class="contenido">
            <?php
                //Siempre inician de la pocisión 0
                //versiones anteriores
                $tecnologia = ['CSS', 'HTML', 'JavaScript', 'jQuery'];
            ?>
            
            <pre>
                <?php print_r($tecnologia) ?>
            </pre>
            <hr>
            <!-- Sumamos un indice a un arreglo -->
            <?php
                $tecnologia[] = 'python';
                //Opción menos común porque hay que saber el tamaño del arerglo
                $tecnologia[5] = 'Java'; 
            ?>
            <pre>
                <?php print_r($tecnologia) ?>
            </pre>

            <hr>

            <?php //array_pop - Quita el último elemento y lo trae en una variable ?>
            <?php $java = array_pop($tecnologia); ?>
            <!-- Podemos verificar que ya no esta con el print_r -->
            <pre>
                <?php print_r($tecnologia) ?>
            </pre>
            <h2><?php  echo $java; ?></h2>

            <hr>

            <?php //Remover el primer elemnto del array ?>
            <?php unset($tecnologia[0]); ?>
            <!-- Retiramos CSS del array -->
            <pre>
                <?php print_r($tecnologia) ?>
            </pre>

            <hr>

            <?php //array_shift - Quita el primer elemento y lo trae en una variable ?>
            <?php $html = array_shift($tecnologia); ?>
            <!-- Podemos verificar que ya no esta con el print_r -->
            <pre>
                <?php print_r($tecnologia) ?>
            </pre>
            <h2><?php  echo $html; ?></h2>
            
            <hr>

            <?php //array_splice - Quita ciertos elementos y agrega otros ?>
            <?php //array_splice(arreglo, inicia desde, termina en, agrega) ?>
            <?php $array = array_splice($tecnologia, 1, 1, array('AngularJS', 'ReactJS')); ?>
            <!-- Podemos verificar que ya no esta con el print_r -->
            <pre>
                <?php print_r($array) ?>
            </pre>

            <pre>
                <?php print_r($tecnologia) ?>
            </pre>

        </div>
    </div>
</body>

</html>