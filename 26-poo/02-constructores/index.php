<?php
require_once 'coche.php';
/**
 * Esta es una instancia del coche
 * 
 * 
 */

$coche  = new Coche(
                   "rojo", 
                   "dogde", 
                   "vg", 
                    1212, 
                    122, 
                    122
             );

$coche2 = new Coche("verde", "dogde", "vg", 1212, 122, 122);

$coche3 = new Coche("amarillo", "dogde", "vg", 1212, 122, 122);

$coche4 = new Coche("azul", "dogde", "vg", 1212, 122, 122);

$coche5 = new Coche("morado", "dogde", "vg", 1212, 122, 122);

$coche6 = new Coche("gris", "dogde", "vg", 1212, 122, 122);

$coche->color = 'Rosa';
$coche->setMarca('nissan');
$coche->getModel();
$valor = 11;
echo $coche->mostrarInformacion(
    $valor
);

/* $array = get_object_vars($coche2);
var_dump($coche, $coche2, $coche3, $coche4, $coche5, $coche6, $array); */