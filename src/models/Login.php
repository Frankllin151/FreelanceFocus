<?php
namespace src\models;
use \core\Model;

class Login extends Model {
    private $id;
    private $name;
    private $email;
    private $password;
    private $token;

    // Getter and Setter to  id
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    // Getter and Setter to name
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    // Getter and Setter to email
    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    // Getter and Setter to password
    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }


    // Getter and Setter to token
    public function getToken() {
        return $this->token;
    }

    public function setToken($token) {
        $this->token = $token;
    }
}



