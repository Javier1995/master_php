<?php 



/**
 * Ejercicio 2. Hacer un programa con php que añada valores a un array mientras que su longitud sea menor 120 y luego mostrarlo por pantalla;
 * 
 * 
 */

 $array = array();


 for($i = 1; $i <= 120; $i++) {
   $array[] .= "Elemento".$i;
 }

 var_dump($array);

