<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Configuracion {

    public static $color;
    public static $newsletter;
    public static $entorno;
    

    static function getColor() {
        return self::$color;
    }

    public static function getNewsletter() {
        return self::$newsletter;
    }

    public static function getEntorno() {
        return self::$entorno;
    }

    public static function setColor($color) {
        self::$color = $color;
    }

    public static function setNewsletter($newsletter) {
        self::$newsletter = $newsletter;
    }

    public static function setEntorno($entorno) {
        self::$entorno = $entorno;
    }

}
