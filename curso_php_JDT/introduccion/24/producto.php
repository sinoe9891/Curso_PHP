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
        <h1>Aprendiendo PHP - Enviando valores de una página a otra con $_GET</h1>
        <div class="contenido">
            <h2>Descripción Producto</h2>
            <p>ID: <?php echo htmlspecialchars($_GET['id']); ?></p>
            <p>Nombre: <?php echo htmlspecialchars($_GET['nombre']); ?></p>

            <!-- <pre>
                <?php
                    echo var_dump($_GET);
                ?>
            </pre> -->
        </div>
</body>

</html>