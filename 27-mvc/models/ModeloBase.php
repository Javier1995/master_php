<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModeloBase
 *
 * @author Sandy
 */
require_once 'config/db.php';

class ModeloBase {

    public $db;

    public function __construct() {
        $this->db = db::conectar();
    }

    public function ConseguirTodos($table) {
        
        $query = $this->db->query("SELECT * FROM $table ORDER BY id");
        return $query;
    }

}
