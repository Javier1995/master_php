<?php

/* Ejercicio 5. Hacer un programa que muestre todos los numeros IMpares entre dos numeros*/


if(isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
   if($numero1 < $numero2){
        for($i = $numero1; $i <= $numero2; $i++) {
            
            if($i%2 != 0){
                echo "<h2>".$i." es impar</h2>";
            } else {
                echo "<h2>".$i." es entero</h2>";
            } 

        }
   } else {
       echo "<p>El numero uno debe ser menor al numero 2</p>";
   }
} else {

    echo "<h1>Los parametros get no existen</h1>";
}

