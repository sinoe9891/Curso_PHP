
<?php
echo "<h1>Argumentos</h1>";

#Valores
//Hace referencia a que nosotros colocamos directamente una variable($name) esperando que eso se cumpla
function greet($name){
	return "<h1>Hola, $name</h1>"; 
}

echo greet('Danny');

#Referencias
//Ademas de hacer un cambio interno con la función queremos que este cambio afecte al elemento que tenemos afuera.
$course = 'PHP';
function path(&$course){
	$course = 'Laravel';
	echo $course; //Laravel
}

path($course);
echo "<br>";
echo $course; //Laravel

echo "<br>";

#Predeterminado
//Asignamos de manera fija un elemento o un valor y podemos alterar el valor con un parametro
function greet1($name = 'Danny'){
	return "Hola, $name";
}

echo greet1();
echo "<br>";
echo greet1('Abel');
