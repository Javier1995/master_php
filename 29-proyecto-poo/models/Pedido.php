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
class Pedido {

    private $id;
    private $usuario_id;
    private $direccion;
    private $provincia;
    private $localidad;
    private $coste;
    private $estado;
    private $fecha;
    private $hora;

    public function __construct() {
        $this->db = Database::connect();
    }
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

        function getUsuario_id() {
        return $this->usuario_id;
    }

    function getProvincia() {
        return $this->provincia;
    }

    function getLocalidad() {
        return $this->localidad;
    }

    function getCoste() {
        return $this->coste;
    }

    function getEstado() {
        return $this->estado;
    }

    function getHora() {
        return $this->hora;
    }

    function setUsuario_id($usuario_id) {
        $this->usuario_id = $usuario_id;
    }

    function setProvincia($provincia) {
        $this->provincia = $provincia;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setCoste($coste) {
        $this->coste = $coste;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setLocalidad($localidad) {
        $this->localidad = $localidad;
    }

    function setHora($hora) {
        $this->hora = $hora;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getFecha() {
        return $this->fecha;
    }

    public function getAll() {
        $productos = $this->db->query("SELECT * FROM productos ORDER BY id DESC");

        return $productos;
    }

    public function getOne() {
        $productos = $this->db->query("SELECT * FROM pedidos WHERE id={$this->getId()}");
        return $productos->fetch_object();
    }

    public function getOneByUser() {
        $query = "SELECT p.id, p.coste FROM pedidos p";
        $query .= "INNER JOIN lineas_pedidos lp ON lp.pedidos_id = p.id ";
        $query .= "WHERE p.usuario_id={$this->getUsuario_id()} ORDER BY id DESC";
        $pedido = $this->db->query($query);
        $result = $pedido->fetch_object();
        return  $result;
    }

    public function getProductsByPedido($id) {
        $sql = "SELECT P.*, LP.* FROM productos P  ";
        $sql.= "INNER JOIN lineas_pedidos LP ON P.id = LP.producto_id ";
        $sql.= "WHERE  pedido_id={$id} ";
        $pedido = $this->db->query($sql);
        return $pedido;
    }

    public function Save() {
        $query = "INSERT INTO pedidos VALUES(NULL,{$this->getUsuario_id()},'{$this->getProvincia()}','{$this->getLocalidad()}','{$this->getDireccion()}',{$this->getCoste()},'confirm',CURDATE(), CURTIME());";
        $save = $this->db->query($query);
        $result = false;
        if ($save) {
            $result = true;
        }

        return $result;
    }

    public function saveLinea() {
        $result = false;
        $sql = "SELECT LAST_INSERT_ID() as 'pedido'";
        $query = $this->db->query($sql);
        $pedido_id = $query->fetch_object()->pedido;
        foreach ($_SESSION['car'] as $indice => $elemento) {
            $producto = $elemento['producto'];

            $insert = "INSERT INTO lineas_pedidos VALUES(NULL, {$pedido_id}, {$producto->id}, {$elemento['unidad']} )";
            $save = $this->db->query($insert);
        }

        if ($save) {
            $result = true;
        } else {
            $result = false;
        }

        return $result;
    }
    
     public function getAllByUser() {
        $query = "SELECT p.* FROM pedidos p ";
        $query.= "WHERE p.usuario_id={$this->getUsuario_id()} ORDER BY id DESC";
        $pedido = $this->db->query($query);
        return $pedido;
    }

}
