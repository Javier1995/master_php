<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once './autoload.php';



$usuario = new Usuario();

echo  $usuario->nombre;

$categoria = new Categoria();

echo  $categoria->nombre;