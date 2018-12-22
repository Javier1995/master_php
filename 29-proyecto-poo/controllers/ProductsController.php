<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProductsController
 *
 * @author Sandy
 */
require_once 'models/Product.php';

class ProductsController {

    public function index() {

        $producto = new Product();
        $productos = $producto->getRandom(6);
        require_once 'views/producto/descatacados.php';
    }

    public function show() {
        if (filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING)) {
            $id = filter_input(INPUT_GET, 'id');
            $product = new Product();
            $product->setId($id);
            $pro = $product->getOne();
           
        } 
         require_once 'views/producto/show.php';
    }

    public function gestion() {
        Utils::isAdmin();

        $producto = new Product();
        $productos = $producto->getAll();
        require_once 'views/producto/gestion.php';
    }

    public function create() {
        Utils::isAdmin();
        require_once 'views/producto/create.php';
    }

    public function save() {
        Utils::isAdmin();
        $result = false;
        if (isset($_POST)) {
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
            $precio = isset($_POST['precio']) ? $_POST['precio'] : false;
            $stock = isset($_POST['stock']) ? $_POST['stock'] : false;
            $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : false;


            if ($nombre && $descripcion && $precio && $stock && $categoria) {

                $producto = new Product();
                $producto->setNombre($nombre);
                $producto->setDescripcion($descripcion);
                $producto->setPrecio($precio);
                $producto->setStock($stock);
                $producto->setCategoria_id($categoria);


                //GUARDAR LA IMAGEN
                //             
                if (!empty($_FILES['image']['name'])) {
                    $file = $_FILES['image'];
                    $filename = $file['name'];
                    $extension = explode('.', $filename);
                    $new_filename = sha1($filename) . rand(1, 200) . '.' . $extension[1];
                    echo $new_filename;

                    $mimetype = $file['type'];
                    $dir = 'uploads/images';
                    $tmp_file = $file['tmp_name'];
                    if ($mimetype == "image/jpg" || $mimetype == "image/jpeg" || $mimetype == "image/png" || $mimetype == "image/gif") {

                        if (!is_dir($dir)) {
                            mkdir($dir, 0777, true);
                        }

                        move_uploaded_file($tmp_file, $dir . '/' . $new_filename);
                        $producto->setImagen($new_filename);
                    }
                }


                if (filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING)) {

                    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
                    $producto->setId($id);
                    $save = $producto->edit();
                } else {
                    $save = $producto->Save();
                }

                if ($save) {
                    $_SESSION['producto'] = "complete";
                } else {
                    $_SESSION['producto'] = "failed";
                }
            } else {
                $_SESSION['producto'] = "failed";
            }
        } else {
            $_SESSION['producto'] = "failed";
        }

        header("Location:" . BASE_URL . 'products/gestion');
    }

    public function edit() {
        Utils::isAdmin();
        if (filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING)) {
            $id = filter_input(INPUT_GET, 'id');
            $edit = true;
            $product = new Product();
            $product->setId($id);
            $productos = $product->getOne();
            require_once 'views/producto/create.php';
        } else {
            header("Location:" . BASE_URL . 'products/gestion');
        }
    }

    public function delete() {
        Utils::isAdmin();
        if (isset($_GET['id'])) {
            $producto = new Product();
            $producto->setId($_GET['id']);
            $dele = $producto->delete();
            if ($dele) {
                $_SESSION['delete'] = "complete";
            } else {
                $_SESSION['delete'] = "failed";
            }
        } else {
            $_SESSION['delete'] = "failed";
        }

        header("Location:" . BASE_URL . 'products/gestion');
    }

}
