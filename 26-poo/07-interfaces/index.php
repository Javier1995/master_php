<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

interface Ordenador {
    const b = "Eror";
    public function encender();

    public function apagar();

    public function reiniciar();

    public function desfragmentar();

    public function detectarUSB();
}

class iMac implements Ordenador {

    public $modelo;

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function apagar() {
        
    }

    public function desfragmentar() {
        
    }

    public function detectarUSB() {
        
    }

    public function encender() {
        
    }

    public function reiniciar() {
        
    }

}

$mauintos = new iMac();

$mauintos->setModelo('MacBook pro 2019');
echo $mauintos->getModelo();

