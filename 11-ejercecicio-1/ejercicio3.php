<?php

/* Ejercicio 3. Escribir un programa que imprima por pantalla los cuadrados(Un numero multiplicado por si mismo) de los 40 primeros numero naturales*/

$count = -1;
while( $count <= 40) {
    echo '<br>'. $count .' = '.  sqrt($count);
    $count++;
}