<?php

function app_autoloader($className) {
    include 'controllers/' . $className . '.php';
}

spl_autoload_register('app_autoloader');
