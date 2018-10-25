<?php

/* Ejercicio 5. Mostrar todos los numero entre el intervalo de los variables*/

if(isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
   if($numero1 < $numero2){
        for($i = $numero1; $i <= $numero2; $i++) {
            
            echo $i.'<br>';

        }
   } else {
       echo "<p>El numero uno debe ser menor al numero 2</p>";
   }
} else {

    echo "<h1>Los parametros get no existen</h1>";
}

