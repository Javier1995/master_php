<?php


$cantantes = ['pedro','javier','naara','alea'];
$numeros = [1,4,5,1,3,5,7];
//asort($cantantes);
//rsort($cantantes);
sort($numeros);
var_dump($numeros);


//Añadir elementos a un array

$cantantes[] = "Natos";
$cantantes[] = "hola";
array_push($cantantes, "hola");

//Eliminar elementos
array_pop($cantantes);
unset($cantantes["naara"]);

//aleatorio

 $dato = array_rand($cantantes);
 echo $cantantes[$dato];
 var_dump($cantantes);


 //Buscar dentro de un array

//Te devuelve el indice del valor
 $resultado = array_search("pedro", $cantantes);
 echo $resultado;

 //contar del numero de elementos

 echo count($cantantes);
 echo sizeof($cantantes);