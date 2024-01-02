<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/sobre/{nome}', 'HomeController@sobreP');

$router->get('/sobre', 'HomeController@sobre');

$router->get('/cadastro' , "AuthController@LayoutLogin");
$router->post('/cadastro' , "AuthController@postActionCadrastro");

$router->get('/login' , 'AuthController@LoginLayout');
$router->post('/login' , 'AuthController@ActionLogin');
//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