<?php


$numero = 0;

while($numero <= 100) {
    echo $numero;
    if($numero != 100){
        echo ", ";
    }
    $numero++;
}

echo "<hr />";

if(isset($_GET['numero'])) {
    //cambir tipo de datos
    $numero = (int)$_GET['numero'];

}else {

    $numero = 1;
}

$count = 1;
while($count <=10 ) {
    echo $numero .' X '. $count .' = '. ($numero*$count).'<br/>'; 
    $count++;
}


//do-while

echo "<hr/>";
$edad = 17;
$contador = 1;
do{
    echo 'Tienes acceso al local privado '.$contador. "<br>";
    $contador++;
}while($edad >=18 && $contador <= 10);


