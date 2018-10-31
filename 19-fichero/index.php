<?php
/*
$archivo = fopen("texto.txt", "a+");

while(!feof($archivo)){
    $contenido = fgets($archivo);
    echo $contenido."<br/>";
}

$i = 1;
while( $i < 10000){
    fwrite($archivo,"Soy un texto metido en php $i \n");
    $i++;
}
fclose($archivo);
*/

//copiar archivo
//copy('texto.txt','fichero.txt') or die("Error al copiar");
//renombrar
/* rename('fichero.txt','fichero_recopiado.txt'); */
//Eliminar
//unlink("fichero_recopiado.txt") or die("Error al borrar");;


//comprobar si existe el fichero


if(file_exists("texto.txt")){
    echo "El fichero existe";
} else {
    echo "El fichero no existe";
}