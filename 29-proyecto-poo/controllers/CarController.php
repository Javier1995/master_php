<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CarController
 *
 * @author Sandy
 */
require_once 'models/product.php';

class CarController {

    public function index() {
        
        require_once 'views/cart/show.php';
        
        
    }

    /*
     * Add Product to the cart 
     * @Author Javier Quiroga Almeida+
     * @return array
     */

    public function add() {

        if (isset($_GET['id'])) {

            $product_id = $_GET['id'];
        } else {
            header("Location:" . BASE_URL);
        }


        if (isset($_SESSION['car'])) {
            $cont = 0;
            foreach ($_SESSION['car'] as $indice => $element) {
                if ($element['id_producto'] == $product_id) {
                    $_SESSION['car'][$indice]['unidad'] ++;
                    $cont++;
                }
            }
        }
        if (!isset($cont) || $cont == 0) {
            //Conseguir el producto
            $product = new Product();
            $product->setId($product_id);
            $pro = $product->getOne();
            if (is_object($pro)) {
                $_SESSION['car'][] = array(
                    "id_producto" => $pro->id,
                    "precio" => $pro->precio,
                    "unidad" => 1,
                    "producto" => $pro
                );
            }
        }

        header("Location:" . BASE_URL . "car/index");
    }

    public function remove() {
        
    }

    public function deleteAll() {
        unset($_SESSION['car']);
         header("Location:" . BASE_URL . "car/index");
    }

}
