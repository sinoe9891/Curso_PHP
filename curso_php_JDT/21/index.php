<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo PHP - Clase 21</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" media="screen" title="no title">
</head>

<body>
    <div class="contenedor">
        <h1>Aprendiendo PHP - Funciones que retornan valores en PHP</h1>
        <div class="contenido">
            <h2>Agenda Telefónica</h2>
            <?php 
                function usuario($nombre, $tel){
                    return $contacto = $nombre . " " . $tel;
                }

                $usuario = usuario("Danny Velasquez", "9450-0121");
                echo $usuario;
            ?>
        </div>
</body>

</html>