<?php

/* Ejercicio 2. Escribiri un script en PHP que nos muestre por pantalla todos los numero para que hay del 1 al 100*/

for($i = 1; $i <= 100; $i++ ){
   
    if($i % 2 == 0){
        echo $i.'<br>';
    }
}