<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of db
 *
 * @author Sandy
 */
class db {

    public static function conectar() {
        $conexion = new mysqli("localhost", "root", "", "nota_master");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }

}
