<?php
session_start();
require '../vendor/autoload.php';
require '../src/routes.php';



use Twig\Environment;
use Twig\Loader\FilesystemLoader;


$loader = new FilesystemLoader('src/views');
$twig = new Environment($loader, [
    // opcional: configurações adicionais do Twig
]);




$router->run( $router->routes );