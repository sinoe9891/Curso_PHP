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
        <?php $nombre = $resultado['nombre']; ?>
        <?php $apellido = $resultado['apellido']; ?>

        <!-- Primera opción Modo estricto -->
        <?php
        if (!(filter_has_var(INPUT_POST, 'nombre') &&
            (strlen(filter_input(INPUT_POST, 'nombre')) > 0))) {
            echo "El nombre es obligatorio <br>";
        } else { ?>
            <p>Nombre: <?php echo $nombre; ?></p>
        <?php } ?>

        <!-- Segunda opción -->
        <!-- Si $apellido es false || si eliminar los espacios es distinto a vacio -->
        <?php if (!isset($apellido) || trim($apellido) != '') { ?>
            <p>Apellido: <?php echo $apellido; ?></p>
        <?php } else {
            // Si $apellido es true y la cadena esta vacía o tiene espacios vacíos
            echo "El apellido es obligatorio <br>";
        } ?>

        <hr>

        <?php //Validar Checkbox (singular)
        ?>
        <?php
        if (isset($_POST['notificaciones'])) {
            $notificaciones = $_POST['notificaciones'];
            if ($notificaciones == 'on') {
                echo "Se ha inscrito correctamente a las notificaciones<br>";
            }
        }
        ?>

        <?php //Leyendo valores de múltiples checkboxes 
        ?>
        <!-- <pre>
            <?php var_dump($_POST['curso']) ?>
        </pre> -->

        <?php
        if (isset($_POST['curso'])) {
            $cursos = $_POST['curso'];
            echo "Tus cursos son: <br>";
            foreach ($cursos as $curso) {
                echo $curso . '<br>';
            }
        } else {
            echo "No seleccionaste ningún curso";
        }
        ?>

        <hr>

        <?php
        if (isset($_POST['area'])) {
            $area = $_POST['area'];
            echo "<h2>Área de especialización</h2><br>";
            switch ($area) {
                case 'fe':
                    echo "FrontEnd";
                    break;
                case 'be':
                    echo "BackEnd";
                    break;
                case 'fs':
                    echo "Full Stack";
                    break;

                default:
                    echo "Por favor elige una área";
                    break;
            }
        }
        ?>

        <hr>

        <?php //Validar radio button 
        ?>

        <h2>Tipo de curso elegido</h2>

        <?php
        //Verifica si el índice o clave dada existe en el array
        //Revisa que exista la llave 'opciones' en el array $_POST
        //if (array_key_exists('opciones', $_POST)) {
        if (isset($_POST['opciones'])) {
            $tipoCurso = $_POST["opciones"];
            if ($tipoCurso == "pres") {
                echo "Curso es Presencial";
            }
            if ($tipoCurso == "online") {
                echo "Curso es Online";
            }
        } else {
            echo "No Seleccionaste un Curso";
        }
        ?>
        <hr>


        <!-- <pre>
            <?php var_dump($_POST) ?>
        </pre> -->
        <?php echo "<h2>Mensaje</h2>";?>


        <?php
        if (isset($_POST['mensaje'])) {
            $mensaje = $_POST['mensaje'];
            $nuevoMensaje = filter_var($mensaje, FILTER_SANITIZE_STRING);
            //Si string de mensaje es > 0 && || trim elimina espacio en blanco
            if (strlen($mensaje) > 0 &&  trim($mensaje)) {
                echo $mensaje;
                echo $nuevoMensaje;
            } else {
                
                echo "El mensaje esta vacío<br>";
            }
        } ?>
    </div>
</body>

</html>