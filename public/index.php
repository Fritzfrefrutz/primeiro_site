<?php
require_once __DIR__ . '/../vendor/autoload.php';
define('__BASE__', realpath( __DIR__));
$router = new Bramus\Router\Router();

foreach(glob(__DIR__ . "/../src/router/*.router.php") as $routerFile){
    include_once $routerFile;
}

$router->run();
?>