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
    
    public static  function statsCart(){
        $stats = [
            'count'=>0,
            'total'=>0
        ];
        if(isset($_SESSION['car'])){
            
            $stats['count'] = count($_SESSION['car']);
            
            foreach ($_SESSION['car'] as $index=> $value){
            
                $stats['total']+= $value['precio'] * $value['unidad'];
                
            }
            
            
        }
        
        return $stats;
    }
    
      public static function isIdentity(){
        
        if(!isset($_SESSION['identity'])){
            header("Location:".BASE_URL);
        } else {
            return true;
        }
    }
    
    public static function showEstado($status){
        $value = 'Pediente';
        if($status == 'confirm'){
             $value = 'Pediente';
        }elseif($status == 'preparation'){
              $value = 'En preparación';
        }elseif($status == 'ready'){
              $value = 'Preparado Para enviar';
        }elseif($status=='sent'){
            $value = 'Enviado';
        }
        return $value;
    }
}
