<?php 



/**
 * Ejercicio 3. Programa que compruebe que una variable esta vacia y si esta vacia rellenarla con texto en minuscula y mostrarlo en mayuscula y negretias;
 * 
 * 
 */

 $texto = "";

 if(empty($texto)){
    $texto = "tiene un texto";
 } 

 echo "<strong>".strtoupper($texto)."</strong>";