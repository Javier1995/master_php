<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author Sandy
 */

namespace Misclases;

class Usuario {

    public $nombre;
    public $email;

    //Primera funcion que se ejecuta cuando termina de ejecutarse
    public function __construct() {
        $this->nombre = "Javier";
        $this->email = "Javie@gmail.com";
    }

}
