<?php


/**
 * 
 * Session: Almacenar y persistir datos del usuario mientras que navega en un sitios web hasta que cierra session o cierra le navegador
 */
session_start();

$variable_normal = 'Soy una cadena de texto';

$_SESSION['variable_persistente'] = 'Hola soy una sesion activa';

echo $_SESSION['variable_persistente'] ;
echo "<br>";
echo $variable_normal;