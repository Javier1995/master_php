<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../vendor/autoload.php';

//CONEXION
$conexion = new mysqli("localhost", "root", "", "nota_master");
$conexion->query("SET NAMES 'utf8'");


//CONSULTA A PAGINAR
$consulta = $conexion->query("SELECT * FROM notas;");
$num = $consulta->num_rows;
$num_per_page = 2;
//hacer pagination


$pagination = new Zebra_Pagination();
$pagination->records($num);

//numero de elemento por pagina

$page = $pagination->get_page();
$pagination->records_per_page($num_per_page);
$offset = (($page - 1)*$num_per_page);
$sql = "SELECT * FROM notas LIMIT $offset, $num_per_page";
$notas = $conexion->query($sql);
echo '<link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css">';
while($nota = $notas->fetch_object()){
    echo "<h1>{$nota->titulo}</h1>";
    echo "<h3>{$nota->descripcion}</h3>";
}
$pagination->render();