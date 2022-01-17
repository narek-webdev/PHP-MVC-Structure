<?php 

require 'autoload.php';

$scriptName = $_SERVER['SCRIPT_NAME'];

$urlName = explode('/', $scriptName);

array_pop($urlName);

$uri = $_SERVER['REQUEST_URI'];

$uriArray = explode('/', $uri);

$filteredArray = array_diff($uriArray, $urlName);

$filteredArray = array_values($filteredArray);

$controllerName = isset($filteredArray[0]) ? 'controller\\'.ucfirst($filteredArray[0]) : false;
$methodName = isset($filteredArray[1]) ? $filteredArray[1] : false;

if ($controllerName && class_exists($controllerName)) {
    if ($methodName && method_exists($controllerName, $methodName)) {
        call_user_func(array($controllerName, $methodName));
    } else {
        echo json_encode('Method is Not Found');
    }
} else {
    echo json_encode('Controller is not found');
}