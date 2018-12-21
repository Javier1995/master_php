<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CategoryController
 *
 * @author Sandy
 */

require_once 'models/Category.php';
class CategoryController {

    public function index() {
        Utils::isAdmin();
        $categoria = new Category();
        $categories = $categoria->getAll();
        require_once 'views/category/index.php';
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
        
        header("Location:".BASE_URL."category/index");
    }
    

}
