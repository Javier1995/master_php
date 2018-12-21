<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Category
 *
 * @author Sandy
 */
require_once 'config/db.php';

class Category {

    protected $id;
    protected $nombre;
    protected $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $this->db->real_escape_string($nombre); 
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getAll() {
        $categoria = $this->db->query("SELECT * FROM categorias ORDER BY id DESC");
        return $categoria;
    }

    public function Save() {
        $query = "INSERT INTO categorias VALUES(NULL,'{$this->getNombre()}')";
        $save = $this->db->query($query);
        $result = false;
        if ($save) {
            $result = true;
        }

        return $result;
    }

}
