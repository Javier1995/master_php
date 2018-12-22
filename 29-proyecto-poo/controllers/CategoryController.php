<?php

/**
 * Controller for Category type
 *
 * @author Javier
 */
require_once 'models/Product.php';
require_once 'models/Category.php';


class CategoryController {

    public function index() {
        Utils::isAdmin();
        $categoria = new Category();
        $categories = $categoria->getAll();
        require_once 'views/category/index.php';
    }

    public function show() {
        if (filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT)) {
            $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
            $category = new Category();
            $category->setId($id);
            $cat = $category->getOne();
            //Get categoria
            $product = new Product();
            $product->setCategoria_id($id);
            $products = $product->getAllByCategory();
        }
        require_once 'views/category/show.php';
    }

    public function create() {
        Utils::isAdmin();
        require_once 'views/category/create.php';
    }

    public function save() {
        Utils::isAdmin();
        if (isset($_POST) && $_POST['name']) {
            $category = new Category();
            $category->setNombre($_POST['name']);
            $var = $category->Save();
        }

        header("Location:" . BASE_URL . "category/index");
    }

}
