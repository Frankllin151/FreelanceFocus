<?php
namespace src\controllers;

use \core\Controller;

use Google\Client;

class HomeController extends Controller {

    public function index() 
    {
        echo 'home';
       // $code  = $_GET['code'];
       
      //  $client = new Client();
    //    $token = $client->fetchAccessTokenWithAuthCode($code);

    
    }

    public function sobre() 
    {
        $this->render('sobre');
    }

    public function sobreP($args) 
    {

        print_r($args);
    }

}