<?php 
namespace src\controllers;





use ClanCats\Hydrahon\Query\Sql\Func;
use core\Controller;
use core\Database;
use src\Config;
use Google\Client;
use Google\Service;
use GuzzleHttp\Client as GuzzleClient;
use src\models\Register;
use src\models\Login;
use src\handlers;
use src\handlers\RegisterHandler;


class AuthController extends  Controller  {
 private $db;
  public function __construct()
  {
    $this->db = new Database();
     //$pdo = $this->db->getInstance();
  }




  public function LayoutCadastro()
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
         $this->postActionCadrastro($email);
      } else {
          $this->render('cadastro', ['authUri' => $authUri]);
      }
  }


  

   public function postActionCadrastro($email)
   {
    function token($tamanho=10, $id="", $up=false) {
        $characters = $id.'abcdefghijklmnopqrstuvwxyz0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $tamanho; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        if($up === true) {
          return strtoupper($id.$randomString);
        } else {
          return $id.$randomString;
        }
      }
  $generetToken =token(30, "", true);
  
    $email = $email;
    $token = $generetToken;
    
 

   
   //$register = new Register();
    $register = new RegisterHandler();
   
   if( $register->findByEmail($email) === false){
    $user = new Register();
   // $user->setName('visitante');
    $user->setEmail($email);
    $user->setToken($token);

        $register->InserirUsers($user);
   } else{
    $base = Config::BASE_DIR;
   echo "email já exister";
   }
   
     
   }

   public function LoginLayout()
   {
    $client = new GuzzleClient();
    $clientId = '225285905007-v63d6ukqi51ogeqm40j3nfo4lkbudfo4.apps.googleusercontent.com';
    $clientSecret = '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';
    $redirectUri = 'http://localhost:2221/login';
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
      $this->authLogin($email);
     
    } else {
       

        $this->render('login', ['authUri' => $authUri]);
    }
    
     
   }

   public function authLogin($email)
   {
    $auth = new RegisterHandler();
   $data =  $auth->ExistEmail($email);
     if( $data === false){
        print_r('ir cadastro');
     } else{
    //print_r('painel');
    $args = $_SESSION['user'];
  
     }
    
   }

 public function Dashboard()
 {
 
 }

   public function LayoutDashboard($args)
   {

    $this->render('painel', [
      'id' =>  $args['id'],
     
  ]);

   }

   public function ActionLogin()
   {
   
    $email  = $_POST['email-login']; 
    $password = $_POST['password-login']; 
   
  
   }
}