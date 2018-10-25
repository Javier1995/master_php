<?php

/* Ejercicio 5. Mostrar una tabla html con las tablas de multiplicar*/


echo "<table border='1'>";
echo "<tr>";
    for($cabecera = 1; $cabecera <= 10; $cabecera++){

        echo '<th> Tabla del '.$cabecera.'</th>';

    }
echo "</tr>";


echo "<tr>";
for($i = 1; $i <= 10; $i++) {
    
        echo '<td>';
                  
        for($j = 1; $j <= 10; $j++){
            echo $i.' X '.$j.' = '.$j*$i."<br>";         
            } 
        echo '</td>';
}
 echo "</tr>";
echo "</table>";

