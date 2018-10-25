<?php 



/**
 * Ejercicio 1. Hacer un programa en PHP que tenga un array con 8 numeros entero sy que haga lo siguiente
 * -Recorrerlo y mostrarlo
 * -Ordenarlo y mostrarlo
 * -Mostrar su longitud
 * -Buscar algún elemento
 * 
 */

$numerosEnteros = [1,5,3,7,2,4,6,9,8];

echo "<h1>Mostrando y recorriendo</h1>";
foreach($numerosEnteros as $numero){
    echo $numero."<br>";
}

sort($numerosEnteros);
echo "<h1>Ordenado y recorriendo</h1>";
foreach($numerosEnteros as $numero) {
    echo $numero."<br>";
}
echo "<h1>Longitud </h1>";
echo count($numerosEnteros);

echo "<h1>Buscar numero</h1>";
$busqueda = $_GET['numero'];

$search = array_search($busqueda, $numerosEnteros);

if(!empty($search)){

    echo "El numero existe en el array y esta en el indice: $search";

} else {
    echo "El numero no existe en el array";
}

