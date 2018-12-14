<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//Sirver para capturar excepciones, en codigo susceptuble a errores
try {

    if (isset($_GET['id'])) {
        echo "<h1>El parametro es: {$_GET['id']}</h1>";
    } else {
        throw new Exception("Faltan parametros");
    }
} catch (Exception $e) {

    echo "Ha habido un error: " . $e->getMessage();
}


