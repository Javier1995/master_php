<?php

$nombre = "Victor Robles";
//Debugger
var_dump($nombre);

//Fecha
echo date('d-m-y h:m:s');
echo "<br>";
echo time();

 //Matematicas

 echo "<br>";
 echo "Raiz Cuadrada de 10: ".sqrt(10);
 
 echo "<br>";
 echo "Número aleatorio entre 10 y 40: ".rand(10, 40);

 echo "<br />";

 echo "Número pi: ".pi();
 echo "<br />";
 echo "Redondear: ".round(7.5674);

//Más funiones generales 
echo "<br />";
echo gettype($nombre);
if(!is_float($nombre)){
    echo "<br />";
    echo "La variable nombre no es decimal";
}


if(is_string($nombre)){
    echo "<br />";
    echo "La variable nombre es string";
}

echo "<br>";

if(isset($edad)){
    echo "La variable existe";
} else {
    echo "La variable no existe";
}

echo "<br/>";
//Limpiar espacios
$frase = "   Mi contenido      ";
echo trim($frase);

//Eliminar varibles / indices

$year = 200;
//unset($year);

//comprar si esta vacia

if(empty($texto)) {
    echo "<br>";
    echo "La variable esta vacia";
} else {
    echo "<br>";
    echo "Tiene contenido";
}


$cadena = "sdfdsf";
echo "<br>";
echo strlen($cadena);

//Encontrar caracter
echo "<br>";
$frase = "La vida es bella";

echo strpos($frase, "vida");


//Reemplazar palabras de un string
echo "<br>";
$frase = str_replace("vida","moto", $frase );

echo $frase;
