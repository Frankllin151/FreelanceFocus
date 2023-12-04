<?php 
namespace src\controllers;

use core\Controller;

class AuthController extends Controller {

   public function LayoutLogin()
   {
     $this->render('cadastro');
   }

   public function postActionCadrastro()
   {
    print_r($_POST);
   }
}