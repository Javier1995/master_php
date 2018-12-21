 <?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Utils
 *
 * @author Sandy
 */
class Utils {

    public static function deleteSession($name) {
        $_SESSION[$name] = null;
        unset($_SESSION[$name]);


        return $name;
    }
    
    public static function isAdmin(){
        
        if(!isset($_SESSION['admin'])){
            header("Location:".BASE_URL);
        } else {
            return true;
        }
    }
    
    public static function ShowCategories(){
        require_once 'models/Category.php';
        $categoria = new Category();
        $category =  $categoria->getAll();
        
        return $category;
    }
}
