<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Categoria
 *
 * @author Sandy
 */
class Categoria {

    public $nombre;
    public $descripcion;

    public function __construct() {
        $this->nombre = "Accion";
        $this->descripcion = "Categoria enfocada a las review de videojuegos de accion";
    }

}
