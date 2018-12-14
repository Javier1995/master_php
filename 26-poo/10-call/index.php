<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Persona {

    private $nombre;
    private $edad;
    private $ciudad;

    public function __construct($nombre, $edad, $ciudad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ciudad = $ciudad;
    }

    public function __call($name, $arguments) {
        $prefix_metodo = substr($name, 0, 3);

        if ($prefix_metodo == 'get') {
            $nombre_metodo = substr(strtolower($name), 3);
             
            if(isset($this->$nombre_metodo)){
                return $this->$nombre_metodo;
            } else {
                return "Este metodo no existe";
            }
        } 
        
    }

}

$persona = new Persona('Javier', 12, 'Cardenas');
echo $persona->getEdd();
