<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo PHP - Clase 23</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" media="screen" title="no title">
</head>

<body>
    <div class="contenedor">
        <h1>Aprendiendo PHP - Guardando datos en un arreglo mediante una función</h1>
        <div class="contenido">
            <h2>Agenda Telefónica</h2>
            <?php
                $agenda = array();

                function guardarUsuario($nombre, $tel){
                    global $agenda;
                    $agenda[] = array($nombre, $tel);
                }

                guardarUsuario("Danny Velásquez", "123456");
                guardarUsuario("Gary Velásquez", "123456");
                guardarUsuario("Shirley Velásquez", "123456");
                
                function mostrarUsuario($id){
                    global $agenda;
                    $usuario = $agenda[$id];
                    foreach ($usuario as $user) {
                        echo $user . "<br>";
                    }
                }
                
                //Imprimimos la posición que querramos.
                mostrarUsuario(0);

                // echo "<pre>";
                // var_dump($agenda);
                // echo "</pre>";
            ?>

        </div>
</body>

</html>