<?php

echo "<h1>Closure</h1>";
echo "---------------";
echo "<br>";
//Función Anonima 

/*
$greet = function ($name){ //Variable que requiere lógica
	return "<h1>Hola, $name</h1>"; 
};

echo greet('Danny');
*/

function greet(Closure $lang, $name){
	return $lang($name);
}

$es = function ($name){
	return "Hola, $name";
};

$en = function ($name){
	return "Hello, $name";
};

echo greet($es, 'Danny');
echo "<br>";
echo greet($en, 'Danny');