<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo PHP - Clase 19</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" media="screen" title="no title">
</head>

<body>
    <div class="contenedor">
        <h1>Aprendiendo PHP - Funciones</h1>
        <div class="contenido">
            <h2>Agenda Telefónica</h2>
            <?php 
                function saludar(){
                    echo "Hola amigos <br>";
                }
                saludar();
                function suma(){
                    echo 20 + 20;
                }

                suma();

                function usuario(){
                    echo "Danny Velásquez <br>";
                    echo "+504 9450 0122";
                }

                usuario();
            ?>
        </div>
</body>

</html>