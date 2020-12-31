<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo PHP - Clase 08</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" media="screen" title="no title">
</head>
<body>
    <div class="contenedor">
        <h1>Aprediendo PHP - Switch en PHP</h1>
        <div class="contenido">
            <?php 
                $lenguaje = "Javascript";

                switch ($lenguaje) {
                    case 'PHP':
                        echo "Backend";
                        break;
                    case 'Javascript':
                        echo "Frontend y Backend (NodeJS)";
                        break;
                    case 'HTML5':
                        echo "Frontend";
                        break;
                    default:
                        echo "No valido";
                        break;
                }
            ?>
        </div>
    </div>
</body>
</html>