<?php

//Programación orientadas a objetos en PHP(POO)
//Definir una clase molde para crrear mas objetocs de tipo coche con cacterisicas similares
class Coche {

    //Atributos o propiedades($variables)

    //PUBLIC: Podemos acceder desde cualquier lugar, dentro de la clase actual
    //dentro de clases que hereden esta clase o fuera de la clase
    public $color;
    //PROTECTED: Se accede desde la clse que lo definen y desde clases que hereden esta clase
    protected $marca;
    //PRIVATE: Se puede acceder desde esta clase
    private $model;

    public $velocidad;
    public $caballaje;
    public $plazas ;


    public function __construct($color = 'rojo', $marca = 'Ford', $model = 'v4', $velocidad = 11, $caballaje= 11, $plazas = 12)
    {
        $this->color  = $color;
        $this->marca  = $marca;
        $this->model = $model;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->plazas = $plazas;
    }

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

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getModel()
    {
        return $this->model;
    }
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }


    public function getMarca()
    {
        return $this->marca;
    }

    public function mostrarInformacion($miObjeto)
    {
        if ( is_object($miObjeto) ) {
            $informacion  = "<h1>Información del coche</h1>";
            $informacion .= "Modelo: ".$miObjeto->model.'<br>';
            $informacion .= "color:  ".$miObjeto->color.'<br>';
            $informacion .= "velocidad: ".$miObjeto->velocidad.'<br>';
        } else {
            $informacion ="Tu dato es este: $miObjeto";
        }
        return $informacion;
    }
}
