<?php

require_once 'autoload.php';

if (isset($_GET['controller'])) {
    $controller_name = $_GET['controller'] . 'Controller';
} else {
    echo "<h1>ERROR 404 PAGE NOT FOUND</h1>";
    exit;
}
if (isset($controller_name) && class_exists($controller_name)) {


    $controlador = new $controller_name();
    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
        $action = $_GET['action'];
        $controlador->$action();
    } else {

        echo "<h1>ERROR 404 PAGE NOT FOUND</h1>";
    }
} else {
    echo "<h1>ERROR 404 PAGE NOT FOUND</h1>";
}


