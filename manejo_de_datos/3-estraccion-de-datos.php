<?php

echo "<h1>Extracción de Datos</h1>";
$data = 'Estudio PHP';
//Imprimimos la posición 0
echo '<h1>' . $data{0} . '</h1>';


$post = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum vero accusantium velit hic unde iusto aliquid nobis? Libero blanditiis repellendus deserunt perspiciatis quisquam ipsum illum ipsam! Dolorem, consectetur. Sapiente, dolorem?";
//substr() = Función para substraer String
//vamos a contar 20 caracteres desde 0
$extract = substr($post, 0, 20);

echo "$extract... [ver más]";
//Resultado: Lorem ipsum dolor si... [ver más]

$datos = 'JavaScript, PHP, Laravel'; //Campo tags
//Explode: extrae los datos por un delimitador en este caso una coma(,) o sea separarlos;

$tags = explode(', ', $datos); //array
//Para ver en detalle lo que hay en una variable y con <pre> podemos organizar mejor el resultado

echo "<pre>";
var_dump($tags);
//Resultado sin <pre>: array(3) { [0]=> string(10) "JavaScript" [1]=> string(3) "PHP" [2]=> string(7) "Laravel" }
//Resultado con <pre>: 
					/*array(3) {
					[0]=>
					string(10) "JavaScript"
					[1]=>
					string(3) "PHP"
					[2]=>
					string(7) "Laravel"
					}*/
									
#Pasar un array a string					
//Agregamos un delimitador(,) a los datos en un arreglo
$courses = ['JavaScript, PHP, Laravel'];
echo implode(', ', $courses);
//Resultado: javascript, php, laravel
echo "<br><br>";
$course = "     Curso de PHP     ";
//Hacemos que los espacios se eliminen
$course =  trim($course);
echo "<pre>";
echo "Quiero aprender $course, y otro texto";
//trim quita los espacios en tus textos, “sanea” el código para evitar inyección de caracteres. 
//Además existe: ltrim(left) y rtrim(right)
