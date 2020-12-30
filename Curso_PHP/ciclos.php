<?php
    //Ciclos

    $numero = 1;

    while ($numero <= 10) {
        echo $numero;
        $numero = $numero + 1;
    }

    do {
        echo $numero;
        $numero++;
    } while ($numero <= 15);

    for ($numero=4; $numero <= 10; $numero++) { 
        echo $numero;
    }

?>