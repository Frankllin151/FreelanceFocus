<?php 
namespace src\controllers;




use core\Controller;
use core\Database;
use Google\Client;
use Google\Service;

class AuthController extends Controller {
 private $db;
  public function __construct()
  {
    $this->db = new Database();
  }

   public function LayoutLogin()
   {

    $client = new Client();
    $client->setClientId('1018328527099-ah1brdp326ejb70jfurq7616jsa4g37l.apps.googleusercontent.com');
    $client->setClientSecret('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');
    $client->setRedirectUri('http://localhost:2221/cadastro');
    $client->addScope('email');
    
    $authUri =  $client->createAuthUrl();

    if(isset($_GET['code'])){
      $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
     
      $client->setAccessToken($token);

// Cria uma instância do serviço Oauth2 usando o cliente
$oauth2 = new \Google\Service\Oauth2($client);

// Obtém informações do usuário
$userInfo = $oauth2->userinfo->get();

// Exibe as informações do usuário


$email = $userInfo->getEmail();


// Exibe as informações do usuário

$this->render('cadastro', ['emailgoogle' => $email]);
    } else{
      $this->render('cadastro' , ['authUri' => $authUri]); 
    }
    
   }

   public function postActionCadrastro()
   {
    $pdo = $this->db->getInstance();

    // Agora você pode usar $pdo para executar consultas ou operações no banco de dados
    $query = $pdo->query("SELECT * FROM users");
    
    // FetchAll retorna todos os resultados em um array associativo
    $userData = $query->fetchAll();

    return $userData;

   }
}