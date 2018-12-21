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

    protected $name;
    protected $last_name;
    protected $email;
    protected $password;
    protected $rol;
    protected $picture;
    protected $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getName() {
        return $this->db->real_escape_string($this->name);
    }

    public function getLast_name() {
        return $this->db->real_escape_string($this->last_name);
    }

    public function getEmail() {
        return $this->db->real_escape_string($this->email);
    }

    public function getPassword() {
        return password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost' => 4]);
    }

    public function getRol() {
        return $this->db->real_escape_string($this->rol);
    }

    function getPicture() {
        return $this->db->real_escape_string($this->picture);
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setLast_name($last_name) {
        $this->last_name = $last_name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setRol($rol) {
        $this->rol = $rol;
    }

    public function setPicture($picture) {
        $this->picture = $picture;
    }

    public function Save() {
        $query = "INSERT INTO usuarios VALUES(NULL,'{$this->getName()}','{$this->getLast_name()}', '{$this->getEmail()}', '{$this->getPassword()}', 'user', NULL )";
        $save = $this->db->query($query);
        $result = false;
        if ($save) {
            $result = true;
        }

        return $result;
    }

    public function Login() {
        $result = false;

        $email = $this->email;
        $password = $this->password;
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";

        $login = $this->db->query($sql);

        if ($login && $login->num_rows == 1) {
            $user = $login->fetch_object();

            //verify password

            $verify = password_verify($password, $user->password);

            if ($verify) {
                $result = $user;
            }
        }

        return $result;
    }
    
    
   

}
