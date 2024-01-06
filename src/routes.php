<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/sobre/{nome}', 'HomeController@sobreP');

$router->get('/sobre', 'HomeController@sobre');

$router->get('/cadastro' , "AuthController@LayoutCadastro");
$router->post('/cadastro' , "AuthController@postActionCadrastro");

$router->get('/login' , 'AuthController@LoginLayout');
$router->post('/login' , 'AuthController@ActionLogin');


$router->get('/dashboard/{id}' , 'AuthController@LayoutDashboard');
