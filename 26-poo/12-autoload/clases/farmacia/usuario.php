<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace farmacia;

/**
 * Description of usuario
 *
 * @author Sandy
 */
class Usuario {

    public $nombre;
    public $email;
    public $edad;

    //Primera funcion que se ejecuta cuando termina de ejecutarse
    public function __construct() {
        $this->nombre = "Antonio Almeida";
        $this->email = "antonio@gmail.com";
    }

}
