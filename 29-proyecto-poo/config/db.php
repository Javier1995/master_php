<?php



/**
 * Conecta a la base de datos
 *
 * @author Javier Quiroga Almeida
 */

session_start();
class Database {

    const HOST = "localhost";
    const USER = "root";
    const PASSWORD = "";
    const DB_NAME = "tienda_master";

    public static function connect() {
        $conexion = new mysqli(self::HOST, self::USER, self::PASSWORD, self::DB_NAME);
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }

}
