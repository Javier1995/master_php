<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuarioController
 *
 * @author Sandy
 */
require_once 'models/Usuario.php';

class UsuarioController {

    public function index() {
        echo "Controllador Usuarios, Accion Index";
    }

    public function logUp() {
        require_once 'views/user/logup.php';
    }

    public function save() {
        if (isset($_POST)) {
            $name = isset($_POST['name']) ? $_POST['name'] : false;
            $last_name = isset($_POST['lastname']) ? $_POST['lastname'] : false;
            $email = isset($_POST['email']) ? $_POST['email'] : false;
            $password = isset($_POST['password']) ? $_POST['password'] : false;
            if ($name && $last_name && $email && $password) {
                $usuario = new Usuario();
                $usuario->setName($name);
                $usuario->setLast_name($last_name);
                $usuario->setEmail($email);
                $usuario->setPassword($password);
                $save = $usuario->Save();

                if ($save) {
                    $_SESSION['register'] = "complete";
                } else {
                    $_SESSION['register'] = "failed";
                }
            }
        } else {
            $_SESSION['register'] = "Failed";
        }
        return header("Location:" . BASE_URL . 'usuario/logup');
    }

    public function login() {
        if (isset($_POST)) {

            //IDENTIFICA AL USUARIO
            //CONSULTA A LA BASE DE DATOS
            $usuario = new Usuario();
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['password']);
            //CREAR SESSION
            $identity = $usuario->Login();
            if ($identity && is_object($identity)) {
                $_SESSION['identity'] = $identity;


                if ($identity->rol == 'admin') {
                    $_SESSION['admin'] = true;
                } else {
                    $_SESSION['error_login'] = "Identificacion fallidad";
                }
            }
        }

        header("Location:" . BASE_URL);
    }
    
    public function logout(){
        session_destroy();
        header("Location:".BASE_URL);
        
    }

}
