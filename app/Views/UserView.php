<?php
require_once 'app/Controllers/userController.php';
require_once 'app/Models/categoriasModel.php';
require_once('libs/Smarty.class.php');

class UserView {
   private $categoriasModel;
   private $categoriasView;
       function __construct()
   {
       $this->categoriasModel = new categoriasModel;
       $this->categoriasView = new categoriasView;
   }


 function LoginPage(){
   
    $smarty = new Smarty();
    $smarty->display("templates/login.tpl");


 }

 function AdminPanel(){
   $UserController = new UserController;
   $UserController->CheckLogged();
   $smarty = new Smarty();
   $smarty->display("templates/paneladministrador.tpl");
 }


 function ingresarServicio(){
  $UserController = new UserController;
   $UserController->CheckLogged();
    $smarty = new Smarty();
    $categorias = $this->categoriasModel->getCategorias();
    $smarty->assign("categorias", $categorias);
    $smarty->display("templates/ingresarservicio.tpl");
 }
 function ErrorPageLogin(){
   $smarty = new Smarty();
   $smarty->display("templates/error.tpl");
 }
}