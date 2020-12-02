<?php

class AuthHelper
{
    private $userModel;
    private $userview;
    function __construct()
    {
        $this->userview = new UserView;
        $this->userModel = new UserModel;
    }



    function CheckLogged()
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
        if (!isset($_SESSION['EMAIL_USER'])) {
            header("Location: /inicio/login");
        } else {
            header("Location: ");
        }
    }

    function CheckAdministrator()
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
        if (!isset($_SESSION['PERMISO'])) {
            header("Location:");
        } else {
            if ($_SESSION['PERMISO'] == 1) {
                return true;
            } else {
                return false;
            }
        }
    }

    function Logout()
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
        session_destroy();
    }


    function login()
    {

        $email = $_POST['email'];
        $contraseña = $_POST['contraseña'];
        $user = $this->userModel->getbyEmail($email);
        if ($user && password_verify($contraseña, $user->contraseña)) {
            if (session_status() !== PHP_SESSION_ACTIVE) {
                session_start();
            }
            $_SESSION['EMAIL_USER']  = $user->email;
            $_SESSION['PERMISO'] = $user->permiso;
            $_SESSION['USUARIO'] = $user->id;

            /*$this->userview->AdminPanel();*/
        } else {

            $this->userview->ErrorPageLogin();
        }
    }
}
