<?php 
namespace src\controllers;



//require_once "./src/handlers/RegisterHandle.php";

use core\Controller;
use core\Database;
use src\Config;
use Google\Client;
use Google\Service;
use GuzzleHttp\Client as GuzzleClient;

use src\models\Register;
use src\handlers;
use src\handlers\RegisterHandler;


class AuthController extends  Controller  {
 private $db;
  public function __construct()
  {
    $this->db = new Database();
     //$pdo = $this->db->getInstance();
  }

  public function LayoutLogin()
  {
      $client = new GuzzleClient();
      $clientId = '1018328527099-ah1brdp326ejb70jfurq7616jsa4g37l.apps.googleusercontent.com';
      $clientSecret = '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';
      $redirectUri = 'http://localhost:2221/cadastro';
      $scope = 'email';
  
      $authUri = "https://accounts.google.com/o/oauth2/auth?" .
          "client_id=$clientId&" .
          "redirect_uri=$redirectUri&" .
          "scope=$scope&" .
          "response_type=code";
  
      if (isset($_GET['code'])) {
          $tokenResponse = $client->post('https://oauth2.googleapis.com/token', [
              'form_params' => [
                  'code' => $_GET['code'],
                  'client_id' => $clientId,
                  'client_secret' => $clientSecret,
                  'redirect_uri' => $redirectUri,
                  'grant_type' => 'authorization_code',
              ],
          ]);
  
          $tokenData = json_decode($tokenResponse->getBody(), true);
  
          $idToken = $tokenData['id_token'];
        $parts = explode('.', $idToken);
        $decodedPayload = json_decode(base64_decode($parts[1]), true);
        
        $email = $decodedPayload['email'];
      
          $this->render('cadastro', ['emailgoogle' =>  $email]);
      } else {
          $this->render('cadastro', ['authUri' => $authUri]);
      }
  }


  

   public function postActionCadrastro()
   {
   
    $name = $_POST['name-register'] ?? null;
    $email = $_POST['email-register'] ?? null;
    $password = $_POST['password'] ?? null;
   
   
   
    $register = new Register();
    $register = new RegisterHandler();
   
   if( $register->findByEmail($email) === false){
    $user = new Register();
    $user->setName($name);
    $user->setEmail($email);
    $user->setPassword($password);
        $register->InserirUsers($user);
   } else{
    $base = Config::BASE_DIR;
   $this->render('home');
   }
   
     
   }

}