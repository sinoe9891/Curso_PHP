<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo PHP - Clase 18</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" media="screen" title="no title">
</head>

<body>
    <div class="contenedor">
        <h1>Aprendiendo PHP - While en PHP</h1>
        <div class="contenido">
            <?php $premier_league = array('Chelsea', 'Manchester City', 'Manchester United', 'Tottenham', 'Arsenal', 'Liverpool', 'Leicester'); ?>
            
            <?php $i = 0; ?>
            <?php while($i <= count($premier_league)) {
              if(count($premier_league) > 0 ) {
                    echo $premier_league[$i] . '<br/>';
                    if($i+1 === count($premier_league)) {
                        $i++;
                        echo "fin";
                    }
              } else {
                echo "no hay resultados";
              }
              $i++;
            } ?>
        </div>
</body>

</html>