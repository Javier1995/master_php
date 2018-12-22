<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Product
 *
 * @author Sandy
 */
class Product {

    private $id;
    private $categoria_id;
    private $nombre;
    private $descripcion;
    private $precio;
    private $stock;
    private $oferta;
    private $fecha;
    private $imagen;
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    function getId() {
        return $this->id;
    }

    function getCategoria_id() {
        return $this->categoria_id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getStock() {
        return $this->stock;
    }

    function getOferta() {
        return $this->oferta;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getImagen() {
        return $this->imagen;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCategoria_id($categoria_id) {
        $this->categoria_id = $categoria_id;
    }

    function setNombre($nombre) {
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $this->db->real_escape_string($descripcion);
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setStock($stock) {
        $this->stock = $this->db->real_escape_string($stock);
    }

    function setOferta($oferta) {
        $this->oferta = $this->db->real_escape_string($oferta);
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setImagen($imagen) {
        $this->imagen = $imagen;
    }

    public function getAll() {
        $productos = $this->db->query("SELECT * FROM productos ORDER BY id DESC");

        return $productos;
    }

    public function getOne() {
        $productos = $this->db->query("SELECT * FROM productos WHERE id={$this->getId()}");
        return $productos->fetch_object();
    }

    public function Save() {
        $query = "INSERT INTO productos VALUES(NULL,{$this->getCategoria_id()},'{$this->getNombre()}','{$this->getDescripcion()}',{$this->getPrecio()},{$this->getStock()},NULL, CURDATE(), '{$this->getImagen()}');";
        $save = $this->db->query($query);
        $result = false;
        if ($save) {
            $result = true;
        } else {
            $result = false;
            $this->DeletePicture();
        }

        return $result;
    }

    public function delete() {
        $this->DeletePicture();
        $sql = "DELETE FROM productos WHERE id={$this->getId()}";
        $del = $this->db->query($sql);
        $result = false;
        if ($del) {
            $result = true;
        }

        return $result;
    }

    public function edit() {
        $query = "UPDATE productos SET categoria_id = {$this->getCategoria_id()}, ";
        $query .= "nombre = '{$this->getNombre()}', descripcion='{$this->getDescripcion()}', ";
        $query .= "precio={$this->getPrecio()}, stock= {$this->getStock()}";
        if ($this->getImagen() != null) {
            $this->DeletePicture();
            $query .= ", imagen = '{$this->getImagen()}'";
        }
        $query .= " WHERE id={$this->getId()}";
        $query .= ";";
        $update = $this->db->query($query);
        $result = false;
        if ($update) {
            $result = true;
        }

        return $result;
    }

    private function DeletePicture() {
        if (!empty($this->getId())) {
            $query = "SELECT imagen FROM productos WHERE id={$this->getId()}";
            $sel = $this->db->query($query);
            $resul = $sel->fetch_object();
            $imagen = $resul->imagen;
            $dir = 'uploads/images/' . $imagen;
            if (is_file($dir)) {
                chmod($dir, 0755);
                unlink($dir);
            }
        }
    }

    public function getRandom($limit) {
        $productos = $this->db->query("SELECT * FROM productos ORDER BY RAND() LIMIT $limit");

        return $productos;
    }
    
    
      public function getAllByCategory() {
        $sql = "SELECT p.*, c.nombre as 'categoria' FROM productos p INNER JOIN categorias c ";
        $sql.= "ON c.id = p.categoria_id  WHERE p.categoria_id = {$this->getCategoria_id()}  ";
        $sql.= "ORDER BY id DESC";
        $productos = $this->db->query($sql);

        return $productos;
    }
    
     
}
