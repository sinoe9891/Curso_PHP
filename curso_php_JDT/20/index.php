<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo PHP - Clase 20</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" media="screen" title="no title">
</head>

<body>
    <div class="contenedor">
        <h1>Aprendiendo PHP - Función con argumentos</h1>
        <div class="contenido">
            <h2>Agenda Telefónica</h2>
            <?php 
                function usuario($nombre, $tel){
                    echo $nombre . "<br>";
                    echo $tel . "<br>";
                    echo "<hr>";
                }

                usuario("Danny Velasquez", "9450-0121");

                usuario("Juan Pablo", "9450-0122");

                usuario("Alma", "5340-0122");
            ?>
        </div>
</body>

</html>