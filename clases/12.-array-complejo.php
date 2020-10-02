<?php

echo "<h1>Array Complejo</h1>";
echo "---------------";
echo "<br>";
#Array
//Es aquel elemento que no identificamos de manera directa.

$courses = [
	'frontend' => 'javascript', 
	'framework' => 'laravel', 
	'backend' => 'php'
];

echo '<pre>';
var_dump($courses);

echo "<br>";

foreach ($courses as $key => $value){
	echo "$key: $value <br>";
}

echo "<br>";

$contador = 1;
foreach ($courses as $course){
	echo "$contador.- $course <br>";
	$contador++; 
}

echo "<br>";
function upper($course){
	echo strtoupper("$course <br>");
}

array_walk($courses, 'upper');

echo "<br>";

function upper1($course, $key){
	echo strtoupper($course) . ": $key <br>";
}

array_walk($courses, 'upper1');

/*	
	//Existe un Key
	array_key_exists('frontend', $courses);
	//Existe un valor
	in_array('javascript', $courses);
	//Muestra todos los Key
	array_keys($courses);
	//Muestra todos los valores
	array_values($courses);
*/