<?php
if(!is_dir('mi_carpeta')){
        mkdir('mi_carpeta', 0777) or die("No se pudo escribir la carpeta");
        echo "carpeta creada";
    
} else {
    echo "ya existe la carpeta";
}

//eliminar carpeta
/* rmdir('mi_carpeta'); */


echo "<hr>";

echo '<h1>Contenido de la carpeta</h1>';
if($gestor = opendir("./mi_carpeta")){
    while(false !== ($archivos = readdir($gestor))) {
        if($archivos != '.' && $archivos !='..'){ 
        echo $archivos."<br/>";
      } 
    }
    closedir($gestor);
}

