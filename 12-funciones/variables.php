<?php


/**
 * Variables locales: Son las que se definen dentro de una funcion y no pueden ser usadas fuera de la funcion, solo estan disponibles dentro. A no ser que hagamos un return
 * Variables globales:Son las que se declaran fuera de una funcion y estan disponibles dentro y fuera de las funciones
 * 
 */
//Variable global
 $frase = "Ni los genios son tan genios, ni los mediocres son tan mediocres";

 echo $frase;

    function holaMundo(){
        global $frase;
        echo "<h1>$frase</h1>";
        $year = 2019;
        return $year;
    }
   /*  echo holaMundo();
     */


     //Funciones variables


     function buenasDias() {
         return "<h1>Hola! Buenas dias :)</h1>";
     }

     function buenasTardes(){
         return "<h1>Hey!! Que tal ha ido la comida??</h1>";
     }

     function buenasNoches(){
         return "<h1>¿Te vas a dormir ya? Buenas noches</h1>";
     }
//Datp gets
$horario = 'Noches';

$miFuncion = "buenas".$horario;

echo $miFuncion();

