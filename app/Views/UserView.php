<?php
require_once 'app/Controllers/userController.php';
require_once 'app/Models/categoriasModel.php';
require_once('libs/Smarty.class.php');

class UserView {
   private $categoriasModel;
   
       function __construct()
   {
       $this->categoriasModel = new categoriasModel;
       
   }


 function LoginPage(){
    $smarty = new Smarty();
    $smarty->display("templates/loginpg.tpl");
 }

 function AdminPanel(){
   $smarty = new Smarty();
   $smarty->display("templates/paneladministrador.tpl");
 }

 function registrationpageview(){
  $smarty = new Smarty();
  $smarty->display("templates/registeruser.tpl");
}
 function ErrorPageLogin(){
   $smarty = new Smarty();
   $smarty->display("templates/error.tpl");
 }

 function PrintUsers($users)
  {
    $smarty = new Smarty();
    $smarty->assign("users", $users);
    $smarty->display("templates/editordeusuarios.tpl");
  }
  function PrintUsersEditor($users)
  {
    $smarty = new Smarty();
    $smarty->assign("users", $users);
    $smarty->display("templates/editorpermisos.tpl");
  }


}