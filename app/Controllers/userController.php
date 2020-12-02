<?php
require_once 'app/Models/serviciosModel.php';
require_once 'app/Views/serviciosView.php';
require_once 'app/Models/UserModel.php';
require_once 'app/Views/UserView.php';
require_once 'app/Helpers/auth.helper.php';


class UserController
{

    private $admin;
    private $userModel;
    private $userview;
    private $authHelper;


    function __construct()
    {
        $this->serviciosModel = new ServiciosModel;
        $this->userModel = new UserModel;
        $this->userview = new UserView;
        $this->authHelper = new AuthHelper;
        $this->admin = $this->authHelper->CheckAdministrator();
    }

    function ShowAllUsers()
    {
        $users = $this->userModel->getUsers();
        $this->userview->PrintUsers($users);
    }
    function showUsersPermisos($params = null)
    {
        if ($this->admin) {
            $id = $params[':ID'];
            $users = $this->userModel->getUsersEdit($id);
            $this->userview->PrintUsersEditor($users);
        } else {
            header("Location: " . BASE_URL);
        }
    }

    function loginUser()
    {
        $this->authHelper->login();
        header("Location: " . BASE_URL);
    }
    function logoutUser()
    {
        $this->authHelper->Logout();
        header("Location: " . BASE_URL);
    }
    function Loginpagina()
    {
        $this->userview->LoginPage();
    }
    function registrationpage()
    {
        $this->userview->registrationpageview();
    }
    function MostrarPanelAdministrador()
    {
        if ($this->admin) {

            $this->userview->AdminPanel();
        } else {
            header("Location: " . BASE_URL);
        }
    }
    function addUsuarioNuevo()
    {

        $usuario = $_POST['insertarusuario'];
        $email = $_POST['insertaremail'];
        $contraseña = $_POST['insertarcontraseña'];

        $contraseñaencriptada = password_hash($contraseña, PASSWORD_DEFAULT);


        if (empty($usuario) || empty($email || empty($contraseñaencriptada))) {

            echo 'ERROR DATOS NO INGRESADOS'; //BORRRAR ECOS EN EL CONTROLLER PONER EN VIEW
            die();
        }
        $this->userModel->instertNuevoUsuario($usuario, $email, $contraseñaencriptada);
        $this->authHelper->login();
        header("Location: " . BASE_URL);
    }



    function editusuario()
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
        $permiso = $_POST['permisosusuario'];
        $userid = $_POST['userid'];
        $this->userModel->updateUser($permiso, $userid);
        if (!isset($_SESSION['USUARIO'])) {
            header("Location: " . BASE_URL);
        }
        if ($_SESSION['USUARIO'] == $userid) {
            $this->logoutUser();
        }
      unset($permiso);
        header("Location: editarusuariosadministrador");
    }
    


    function deleteUser($params = null)
    {
        $id = $params[':ID'];
        $this->userModel->removeUser($id);
        header("Location: inicio/editarusuariosadministrador");
    }
}
