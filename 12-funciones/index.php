<?php

/*
Funciones: Un Conjunto de instrucciones agrupados por un nombre en concreto, y puede ser llamada tantas veces como quieras, ya que es codigo que cumple con una funcionalidad repetitiva para estoy lo ideal es encapsular este codigo 

funcion nombreDeMiFuncion() {

    //Aquí todas las intrucciones
}

*/

/* function muestraNombres() {
    echo "Javier Quiroga Almeida <br>";
    echo "Mariana Hernandez Quiroga<br>";
    echo "<hr/>";
}


for($i = 1; $i <= 100; $i++){
    muestraNombres();

}
 */

 function tabla($numero){
    echo "<h3>Tabla de multiplicar del número: $numero</h3>";
    for($i = 1; $i <= 10; $i++) {
        $operacion = $numero*$i;
        echo "$numero x $i = $operacion <br>";
    }
 }

 /* if(isset($_GET['numero']) && is_numeric($_GET['numero'])){
     tabla($_GET['numero']);

 } else {

     echo "Ingrese un valor";
 } */

/* 
 for($i = 0; $i <= 10; $i++) {
    tabla($i);
 }
 */

function calculadora($valor1, $valor2, $negrita = false) {
    $suma     =  $valor1 + $valor2;
    $resta    =  $valor1 - $valor2;
    $division =  $valor1 / $valor2;
    $multi    =  $valor1 * $valor2;
    echo "Suma: ".$suma."<br/>";
    echo "resta: ".$resta."<br/>";
    echo "div: ".$division."<br/>";
    echo "multi: ".$multi."<br/>";
    echo "<hr>";
}

calculadora(23,23);
calculadora(12,213);