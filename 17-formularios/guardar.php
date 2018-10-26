<?php

if(isset($_GET['titulo']) && $_GET['descripcion']){
    echo "<h1>".$_GET['titulo']."</h1>";

    echo "<p>".$_GET['descripcion']."</p>";
} else {
    header('Location:formulario.html');
} 
