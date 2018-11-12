<?php

//HERENCIA: La posibilidad de compartir atributos y metodos entre clases


class Persona {


    public $nombre;
    public $apellido;
    public $altura;
    public $edad;


    public function setNombre($nombre) { 
        $this->nombre = $nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }
    
    public function getNombre() { 
       return $this->nombre;
    }

    public function getApellido($apellido) {
        return $this->apellido;
    }

    public function getAltura($altura) {
        return $this->altura;
    }

    public function getEdad($edad) {
        return $this->edad;
    }

    public function hablar()
    {
        return "Estoy hablando";
    }

    public function caminar()
    {
        return "Estoy caminando";
    }


}

class Informatico extends Persona {

    public $lenguaje;
    public $experienciaProgramador;

    public function __construct()
    {
        $this->lenguaje = ['html','php', 'sql'];
        $this->experienciaProgramador = 12;
    }

    public function programar() 
    {
        return "Soy programador";
    }

    public function repararOrdenador()
    {
        return "Estoy reparando una maquinda";
    }

    public function hacerOfimatica()
    {
        return "Estoy escribiendo en word";
    }
    public function sabeLenguajes(Array $lenguaje)
    {
        $this->lenguaje = $lenguaje;
    }

}

class TecnicoRedes extends Informatico {
    
    public $auditoria;

    public function __construct()
    {   parent::__construct();
        $this->auditoria = "experto";
        $this->experienciaProgramador = 12;
    }

    public function auditar()
    {   
        return $this->auditoria = "Estou auditando";
    }


}