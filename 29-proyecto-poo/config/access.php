<?php
//Loading first
function show_error() {
    $error = new ErrorController();
    $error->index();
}

if (isset($_GET['controller'])) {
    $controller_name = $_GET['controller'] . 'Controller';
} elseif (!isset($_GET['controller']) && !isset($_GET['action'])) {
    $controller_name = CONTROLLER_DEFAULT;
} else {
    show_error();
    exit;
}
if (isset($controller_name) && class_exists($controller_name)) {


    $controlador = new $controller_name();
    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
        $action = $_GET['action'];
        $controlador->$action();
    } elseif (!isset($_GET['controller']) && !isset($_GET['action'])) {
        $action_default = ACTION_DEFAULT;
        $controlador->$action_default();
    } else {

        show_error();
    }
} else {
    show_error();
}
