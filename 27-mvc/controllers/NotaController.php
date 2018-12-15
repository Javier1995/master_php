<?php

class NotaController {

    public function listar() {
        //Modelo
        require_once 'models/nota.php';

        //Logica del controlador(action)
        $nota = new Nota();
        $notas = $nota->ConseguirTodos('notas');
        require_once 'views/nota/listar.php';
    }

    public function crear() {
        require_once 'models/nota.php';
        $nota = new Nota();
        $nota->setUsuario_id(1);
        $nota->setTitulo("NOTA DESDE PHP MVC");
        $nota->setDescripcion("ESTE ES UN EJEMPLO PARA PHM CON MYSQLI");
        $nota->guardar();
        header("Location:./?controller=nota&action=listar");
    }

    public function borrar() {
        
    }

}
