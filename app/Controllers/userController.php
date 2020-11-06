<?php
require_once 'app/Models/serviciosModel.php';
require_once 'app/Views/serviciosView.php';
require_once 'app/Models/UserModel.php';
require_once 'app/Views/UserView.php';



class UserController{

    private $serviciosModel;
    private $userModel;
    private $userview;

    function __construct(){
    $this->serviciosModel = new ServiciosModel;
    $this->userModel = new UserModel;
    $this->userview = new UserView;

    }

    function loginUser(){

    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];
    $user = $this->userModel->getbyEmail($email);


    if ($user && password_verify($contraseña, $user->contraseña)){
      
        if(session_status() !== PHP_SESSION_ACTIVE){
            session_start(); 
        }
        
        $_SESSION['EMAIL_USER']  = $user->email;
       
      
        $this->userview->AdminPanel();
        

    }
    else {

        $this->userview->ErrorPageLogin();
    }
    }
    
    function CheckLogged(){
        if(session_status() !== PHP_SESSION_ACTIVE){
           session_start(); 
        }                                          
        if(!isset($_SESSION['EMAIL_USER'])){
            header("Location: /inicio/login");
        }
        else{
            header("Location: ");
    
        }

        
        
    }
 
  
}



