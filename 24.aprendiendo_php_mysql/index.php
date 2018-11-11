<?php

//CONECTAR A LA BASE DE DATOS
$host = 'localhost';
$user = 'root';
$password = '';
$db       = 'aprendiendo_php_mysql';

$conexion = mysqli_connect($host,$user,$password, $db);

if(mysqli_connect_errno()) {
    echo 'La conexion a la base de datos ha fallado'.mysqli_connect_error();
} else {
    echo 'Se ha conectado la base de datos';
}

//configurar la codificacion de los caracteres

mysqli_query($conexion, "SET NAMES 'utf8'");

//consulta a SELECT

$resultado = mysqli_query($conexion, "SELECT * FROM notas");

while($fetch = mysqli_fetch_assoc($resultado)) {
    echo ' '.$fetch['titulo'].' '.$fetch['descripcion'].' '.$fetch['color'];
}
$sql =  "INSERT INTO notas VALUES(null, 'Nota de PHP', 'Esto es una nota de php', 'gree')";
//INSERTAR
$insert = mysqli_query($conexion, $sql);

if($insert) {
    echo "Datos insertados correctamente";
} else {
    echo 'Error: '.mysqli_error($conexion);
}