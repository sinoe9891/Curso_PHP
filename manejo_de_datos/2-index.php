<?php

/*
echo 'Un texto de una línea 
varias líneas
comilla simple \' backslash \\ continuar con mas texto
$variable';
*/

$name = "Italo Morales";
echo "<h1>Mi nombre es $name</h1>";
//Concatenar
echo '<h1>Mi nombre es ' . $name . '</h1> <br>';

//Array
$courses = [
	'backend' => [
		'PHP',
		'Laravel'
	]
];
echo "<h1>Lenguaje: {$courses['backend'][0]} </h1><br>";

//Clase
class User{
	public $name = 'Danny';
}

//Objeto
$user = new User;

echo "<h1>$user->name quiere aprender {$courses['backend'][0]} </h1><br>";

$course = ['backend' => 'PHP'];

//echo "<h1>Lenguaje: {$courses['backend']} </h1><br>";

//variables variables
$teacher = 'italo';
$italo = 'Profesor de PHP';
echo "<h1>$teacher es ${$teacher}</h1>";

//Función
function getTeacher(){
	return 'teacher';
}

$teacher = 'Italo';

echo "<h1>{${getTeacher()}} Enseña PHP</h1>";

