<?php
function routeUrl() {
    $method = $_SERVER['REQUEST_METHOD'];
    $requestURI = explode('/', rtrim($_SERVER['REQUEST_URI'], '?'));
    $scriptName = explode('/', $_SERVER['SCRIPT_NAME']);

    for ($i = 0; $i < sizeof($scriptName); $i++) {
        if ($requestURI[$i] == $scriptName[$i]) {
            unset($requestURI[$i]);
        }
    }
    # continued...
    
    $entity = array_values($requestURI);
    $controller = 'controllers/' . $entity[0] . '.php';
    $func = strtolower($method) . '_' . (isset($entity[1]) ? $entity[1] : 'index');
    $params = array_slice($entity, 2);

    error_log("Looking for controller ${controller}", 0);

    if (!file_exists($controller)) {
      die("Controller '$controller' doesn't exist.");
    }
    require $controller;
    if (!function_exists($func)) {
      die("Function '$func' doesn't exist.");
    }
    $func($params);
    exit();
}

routeUrl();