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

        <div class="contenido">
            <?php 
                $nombre =  "Juan";
                $apellido = "De la torre";
                
                echo $nombre . " " . $apellido;
                
                $edad = 29;
                echo "<hr>";
                
                echo $nombre . " edad:" . $edad;
                
             ?>
              
        </div>
    </div>




  </body>
</html>
