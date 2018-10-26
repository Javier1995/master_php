<?php 



/**
 * Ejercicio 4. Crear un script en php que tenga 4 variables, una de tipi array, otra de tipo string, otra int y otra booleana y que imprima un mensaje segun el tipi de variable que sea 
 * 
 * 
 */

 $variable1 = array("Hola");

 $variable2 = "hola";

 $variable3 = 2;

 $variable4 = true;

 /* echo 'La variable $variable1 es :'.gettype($variable1)."<br>";
 
 echo 'La variable $variable2 es :'.gettype($variable2)."<br>";
 
 echo 'La variable $variable3 es :'.gettype($variable3)."<br>";
 
 echo 'La variable $variable4 es :'.gettype($variable4)."<br>"; */

 for( $i = 1; $i <= 4; $i++ ){
      $datoString = '$variable'.$i;
      $datoValue  = ${"variable$i"};

      switch($datoValue){
            case is_numeric($datoValue):
                echo "La variable".$datoString;
                break;
            case is_array($datoValue):
                echo "La variable".$datoString;
                break;
            case is_bool($datoValue):
                echo "La variable".$datoString;
                break;
            case is_numeric($datoValue):
                echo "La variable".$datoString;
                break;
      }


 }

 var_dump($GLOBALS);