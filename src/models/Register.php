<?php
namespace src\models;
use \core\Model;

class Register extends Model {
    private $id;
    private $name;
    private $email;
    private $password;

    // Getter and Setter to  id
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = trim($id);
    }

    // Getter and Setter to name
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = strtolower(trim($name));
    }

    // Getter and Setter to email
    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = strtolower(trim($email));
    }

    // Getter and Setter to password
    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }
}

interface RegisterDao {
    public function postActionCadrastro(Register $u);
   // public function findAll();
    public function findByEmail($emailpost);
   // public function findById($id);
    //public function update(Register $u);
    //public function delete($id);
}

