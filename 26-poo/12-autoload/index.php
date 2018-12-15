<?php

require_once './autoload.php';

//ESPACIOS DE NOMBRE Y PAQUETES

use Misclases\Usuario;
use MisClases\Categoria;
use MisClases\Entrada;
use farmacia\Venta;
use farmacia\Alta;
use farmacia\Usuario AS UserFarmacia;

class Principal {

    public $usuario;
    public $categoria;
    public $entrada;
    public $venta;
    public $alta;

    public function __construct() {
        $this->usuario = new Usuario();

        $this->categoria = new Categoria();

        $this->entrada = new Entrada();

        $this->venta = new Venta();

        $this->alta = new Alta();
    }
    public function anotherMethod(){
        echo "AnotherMethod";
    }
    function getUsuario() {
        return $this->usuario;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getEntrada() {
        return $this->entrada;
    }

    function getVenta() {
        return $this->venta;
    }

    function getAlta() {
        return $this->alta;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    function setEntrada($entrada) {
        $this->entrada = $entrada;
    }

    function setVenta($venta) {
        $this->venta = $venta;
    }

    function setAlta($alta) {
        $this->alta = $alta;
    }

    function informacion(){
        echo __METHOD__;
    }

}

$principal = new Principal();

$principal->informacion();
//$metodos = get_class_methods($principal);
//
//$busqueda = array_search('setAlta', $metodos);
//var_dump($busqueda);

//var_dump($principal->usuario);
//
//$usuario = new UserFarmacia();
//var_dump($usuario);


$clase = @class_exists('farmacia\Usuario');

if ($clase) {
    echo "<h1>La clase si existe</h1";
} else {
    echo "<h1>La clase no existe</h1";
}

