<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Usuario {

    public $nombre;
    public $email;

    public function __construct() {
        $this->nombre = "Victor Robles";
        $this->email = "quiroga218@gmail.com";
        echo "Creando el objeto <br />";
    }
    
    public function __toString() {
     return "Hola {$this->nombre}, estas registador con {$this->email}";
 }
    
    public function __destruct() {
        echo '<br>Destruyendo el objeto';
    }

}

$usuario = new Usuario();

echo $usuario;
