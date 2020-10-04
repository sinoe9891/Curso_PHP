<?php

echo "<h1>Return</h1>";
echo "---------------";
echo "<br>";
//Forma parte de cualquier función
//Necesitamos Return precisamente para devolver y entregar con éxito lo que has procesado anteriormente

function greet(){
	return "<h1>Hola</h1>"; 
}

echo greet();


//Para retornar mas de un valor o elemento utilizamos un array
function greet1(){
	return ['PDF', 'Laravel']; 
}

var_dump(greet1());

exit(); //detiene la ejecución del sistema
return; //retorna