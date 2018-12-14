<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ordenador
 *
 * @author Javier Quiroga Almeida
 */
abstract class Ordenador {
    
    public $encendido;
    
    
    abstract public function encender();
    
     public function apagar(){
        $this->encendido = false;
    }
   
    
    
    
    
}

class PCAsus extends Ordenador{
    public $software;
    
    
    public function arrancarSoftware(){
        $this->software =  true;
    }

    public function encender() {
        $this->encendido = true;
    }

}

$ordenador = new PCAsus();
$ordenador->arrancarSoftware();
$ordenador->encender();
$ordenador->apagar();
var_dump($ordenador);

