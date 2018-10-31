<?php

/**
 * Ejercicio 1. Crear una session que aumente su valor en uno o disminuya en uno en funcion de si el paramentro get counter está a uno o a cero 
 * 
 * 
 * * 
 */


 session_start();

if(!isset($_SESSION['numero'])){
    $_SESSION['numero'] = 0;
}

if(isset($_GET['counter']) && $_GET['counter'] == 1) {
    $_SESSION['numero']++;
}

if(isset($_GET['counter']) && $_GET['counter'] == 0) {
    $_SESSION['numero']--;
}
?>
<h1>El valor de la sesion es : <?=$_SESSION['numero']?></h1>
<a href="ejercicio1.php?counter=1">Aumentar</a><br>
<a href="ejercicio1.php?counter=0">Disminnuir</a>

<?=var_dump($_SESSION)?>