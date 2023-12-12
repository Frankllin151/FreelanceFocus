<?php 
namespace src\handlers;

use core\Database;
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
         $name = $u->getName();
         $email = $u->getEmail();
         $password = password_hash($u->getPassword() , PASSWORD_DEFAULT);

         $pdo = $this->db->getInstance();
         $insert = $pdo->prepare("INSERT INTO users (name, email, password) 
                            VALUES (:name, :email, :password)");
                            
        $insert->bindValue(':name', $name);
        $insert->bindValue(':email', $email);
        $insert->bindValue(':password' , $password); 
        $insert->execute();

        print_r($password);

        
      }

}

