<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once './configuracion.php';

Configuracion::setColor('rojo');
Configuracion::setEntorno('Localhost');
Configuracion::setNewsletter(true);


echo Configuracion::$color;
echo Configuracion::$entorno;
echo Configuracion::$newsletter;

$configuracion = new Configuracion();
$configuracion::$color = 'Rojo';
echo $configuracion::$color;
var_dump($configuracion);



