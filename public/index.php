<?php
require_once __DIR__ . '/../vendor/autoload.php';

$router = new Bramus\Router\Router();

$router->get(pattern: '', fn: function (): void{
echo "Olá, sou a página inicial";
}); 

$router->run();
?>