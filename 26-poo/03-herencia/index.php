<?php
require_once 'Clases.php';

$persona = new Persona();
$persona->setNombre("Javier");

var_dump($persona);

$informatico = new Informatico();
$informatico->setLenguaje("php");
var_dump($informatico);