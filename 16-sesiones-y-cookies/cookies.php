<?php

/** 
 * Cookie: Es un fichero que se almacena en el ordenador del usuario que visita la web,
 * con el fin de recordar datos o rastrear el comportamiento del misma web
 * 
*/

$time = time()+(60*60*24*365);
setcookie("micookie", "Valor de galleta", $time );


//Cookie con expiracion

setcookie("unyear","valor d mi cookie", $time );
header('Location:vercookie.php');
?>
