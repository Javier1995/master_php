<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

trait Utilidades{
    
    public function mostrarNombre(){
        echo "<h1>El nombre es ".$this->nombre."</h1>";
    }
    
    
    
}



class Coche {
    use Utilidades;
    public $nombre;
    public $marca;
    
}


class Persona {
    use Utilidades;
    public $nombre;
    public $apellido;
    
}


class VideoJuego{
    use Utilidades;
    public $nombre;
    public $anio;
}

$coche = new Coche;
$persona = new Persona;
$videojuego = new VideoJuego();


$coche->nombre ="Ferrari";
$coche->mostrarNombre();

$persona->nombre ="Javier Quiroga";
$persona->mostrarNombre();

$videojuego->nombre ="GTA 4";
$videojuego->mostrarNombre();