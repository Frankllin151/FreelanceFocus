<?php 
namespace src\handlers;

use core\Controller;
use src\Config;
use ClanCats\Hydrahon\Query\Sql\Func;
use core\Database;
use Google\Service\CloudSearch\EmailAddress;
use src\controllers\AuthController;
use src\models\Login;
use src\models\Register;

class RegisterHandler 
{

    private $db;
  public function __construct()
  {
    $this->db = new Database();
  }

    public function findByEmail($emailpost){
   
        $email = $emailpost;
        
    
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
            
            
           // print_r($register);
        } else {
            return false;
        }
    
      }

      public function InserirUsers(Register  $u)
      {



         $name = 'visitante';
         $email = $u->getEmail();
         $token = $u->getToken();
         $password = '';
       $pdo = $this->db->getInstance();
         $insert = $pdo->prepare("INSERT INTO users (name, email, token , password) 
                            VALUES (:name, :email, :token , :password)");
                            
        $insert->bindValue(':name', $name);
        $insert->bindValue(':email', $email);
        $insert->bindValue(':token' , $token);
        $insert->bindValue(':password' , $password); 
        $insert->execute();
         $sucess = $insert->execute();
 print_r($sucess);

        
      }




      public function ExistEmail($emailauth)
      {
        $email = $emailauth;
        
    
        $pdo = $this->db->getInstance();
        
        
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
        
    
        $stmt->bindValue(':email', $email);
        $stmt->execute();
    
       
        if($stmt->rowCount() > 0 ){
            
            $user = $stmt->fetch();
    
            if ($user) {
              // Verifica se o token associado ao usuário está vazio
              $token = $user['token'];
          
              if (empty($token)) {
                  
                 print_r('Redireciona para a tela de login');
                  exit();
              } else {
                
                $this->ReturnArrayData($user);
                  
                  exit();
              }
          } else {
              print_r('nao encontrado email tela de cadasatro');
              exit();
          }
        } else {
            return false;
        }
      }

      public function ReturnArrayData($user)
      {
        $base = Config::BASE_DIR;
        header('Location: ' .  $base.'/'.'dashboard/' . $user['id'].'/'.$user['name'] );
       
        
         
        }
}

