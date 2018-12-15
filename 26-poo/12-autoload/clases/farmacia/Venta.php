<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace farmacia;

/**
 * Description of Venta
 *
 * @author Sandy
 */
class Venta {
    
    public $cantidad;
    public $producto;
    public $fecha;
    
    
    function getCantidad() {
        return $this->cantidad;
    }

    function getProducto() {
        return $this->producto;
    }

    function getFecha() {
        return $this->fecha;
    }

    function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    function setProducto($producto) {
        $this->producto = $producto;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }


}
