<?php

//Programación orientadas a objetos en PHP(POO)
//Definir una clase molde para crrear mas objetocs de tipo coche con cacterisicas similares
class Coche {

    //Atributos o propiedades($variables)
    public $color     = 'rojo';
    public $marca     = "Ferrari";
    public $model     = "v5";
    public $velocidad = 2710;
    public $caballaje = 122;
    public $plazas    = 2;


   /*  Metodos, son acciones que hacer el objeto(Antes conocidos como funciones) */
    public function getColor()
    {
        //Busca en esta clase la propiedad x
        return $this->color;
    } 

    public function setColor($color)
    {
        //Busca en esta clase la propiedad x
        return $this->color = $color;
    }

    public function acelerar()
    {
        return $this->velocidad++;
    }

    public function frenar()
    {
        return $this->velocidad--;
    }

    public function getSpeed()
    {
        return $this->velocidad;
    }

    public function setModel($model){
        $this->model = $model;
    }
}

//Crear un objeto /instancia la clase
$coche = new Coche();

echo $coche->getSpeed();

$coche->setColor("Amarillo");

echo "El color del coche es: ".$coche->getColor().'<br>';

echo $coche->acelerar().'<br>';
echo $coche->acelerar().'<br>';
echo $coche->acelerar().'<br>';
echo $coche->acelerar().'<br>';
echo $coche->acelerar().'<br>';
echo $coche->acelerar().'<br>';
echo $coche->frenar().'<br>';

echo $coche->getSpeed();

$coche2 = new Coche();
$coche2->setColor('verde');
$coche2->setModel('v6');
var_dump($coche);
var_dump($coche2);