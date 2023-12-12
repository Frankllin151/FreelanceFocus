<?php 
namespace src\controllers;




use core\Controller;
use core\Database;
use Google\Client;
use Google\Service;
use GuzzleHttp\Client as GuzzleClient;
use src\models\Register;

use src\models\RegisterDao;

class AuthController extends  Controller implements RegisterDao {
 private $db;
  public function __construct()
  {
    $this->db = new Database();
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


  public function findByEmail($emailpost){
   
    $email = $_POST['email-register'];
    

    $pdo = $this->db->getInstance();
    
    
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    

    $stmt->bindValue(':email', $email);
    $stmt->execute();

   
    if($stmt->rowCount() > 0 ){
        
        $data = $stmt->fetch();

     
        $register = new Register();
        $register->setName($data['name']);
        $register->setEmail($data['email']);
        $register->setPassword($data['password']);
        
        
        print_r($register);
    } else {
        return false;
    }

  }

   public function postActionCadrastro()
   {
    $emailpost = $_POST['email-register'];
    //$pdo = $this->db->getInstance();
    $register = new RegisterDao();
   
   if( $register->findByEmail($emailpost) === false){
        echo 'email  já registrado';
   } else{
     print_r($_POST);
   }
     
   }

}