<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PedidoController
 *
 * @author Sandy
 */
require_once 'models/pedido.php';

class PedidoController {

    public function hacer() {

        require_once 'views/pedido/hacer.php';
    }

    public function add() {
        if (isset($_SESSION['identity'])) {
            $provincia = filter_input(INPUT_POST, 'provincia');
            $localidad = filter_input(INPUT_POST, 'localidad');
            $direccion = filter_input(INPUT_POST, 'direccion');
            $usuario_id = $_SESSION['identity']->id;
            $stats = Utils::statsCart();
            $coste = $stats['total'];
            if ($provincia && $localidad && $direccion) {

                $pedido = new Pedido();
                $pedido->setUsuario_id($usuario_id);
                $pedido->setProvincia($provincia);
                $pedido->setLocalidad($localidad);
                $pedido->setDireccion($direccion);
                $pedido->setCoste($coste);
                $saving = $pedido->Save();
                $save_linea = $pedido->saveLinea();

                if ($saving && $save_linea) {
                    $_SESSION['pedido'] = 'complete';
                } else {
                    $_SESSION['pedido'] = 'failed';
                }
            } else {
                $_SESSION['pedido'] = 'failed';
            }

            header("Location:" . BASE_URL . 'pedido/confirmado');
        } else {
            header("Location:" . BASE_URL);
        }
    }

    public function confirmado() {
        if (isset($_SESSION['identity'])) {
            $identity = $_SESSION['identity'];
            $pedido = new Pedido();
            $pedido->setUsuario_id($identity->id);
            $pedido = $pedido->getOneByUser();

            $pedido_productos = new Pedido();
            $productos = $pedido_productos->getProductsByPedido($pedido->id);
        }
        require_once 'views/pedido/confirmar.php';
    }

    public function mis_pedidos() {
        Utils::isIdentity();
        $usuario_id = $_SESSION['identity']->id;
        $pedido = new Pedido();
        //sacar los pedidos
        $pedido->setUsuario_id($usuario_id);
        $pedidos = $pedido->getAllByUser();
        require_once 'views/pedido/mis_pedidos.php';
    }

    public function detalles() {

        Utils::isIdentity();

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $pedido = new Pedido();
            $pedido->setId($id);
            $pedidos = $pedido->getOne();
            
           
            $pedido_productos = new Pedido();
            $productos = $pedido_productos->getProductsByPedido($id);

            require_once 'views/pedido/detalle.php';
        } else {

            header('Location:' . BASE_URL . 'pedido/mis_pedidos');
        }
    }
    
    
    public function gestion(){
        Utils::isAdmin();
        $gestion = true;
        
        $pedido = new Pedido();
        $pedidos = $pedido->getAll();
        require_once 'views/pedido/mis_pedidos.php';
    }

    
        
    public function gestion(){
        Utils::isAdmin();
        if(filter_input(INPUT_GET, 'pedido_id')){
            $id = filter_input(INPUT_GET, 'pedido_id');
            
        } else{ 
            header("Location".BASE_URL);
        }
    }

}
