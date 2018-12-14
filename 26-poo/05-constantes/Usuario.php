<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author Sandy
 */
class Usuario {
    const URL_COMPLETA = "http://localhost";
    public $email;
    public $password;
    
    
    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }


}


//Self se usa a nivel de clase
//this a nivel de objeto



echo usuario::URL_COMPLETA;