<?php 
namespace src\controllers;




use core\Controller;

use Google\Client;

class AuthController extends Controller {

   public function LayoutLogin()
   {

    $client = new Client();
    $client->setClientId('434101081118-64t4ijqimtp0b1vi938mugj1q5bvtptf.apps.googleusercontent.com');
    $client->setClientSecret('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');
    $client->setRedirectUri('http://localhost:2221');
    $client->addScope('email');
    
    $authUri =  $client->createAuthUrl();

    if(isset($_GET['code'])){
      $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
      $code = $_GET['code'];
      print_r($token);

    } else{
      $this->render('cadastro' , ['authUri' => $authUri]); 
    }
    
   }

   public function postActionCadrastro()
   {
    print_r($_POST);
   }
}