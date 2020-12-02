
<?php
require_once 'app/Models/serviciosModel.php';
require_once 'app/Views/serviciosView.php';
require_once 'app/Controllers/userController.php';
require_once 'app/Models/comentariosModel.php';
require_once 'app/Views/comentariosView.php';

class comentariosController
{
    private $admin;
    private $serviciosModel;
    private $viewcomentarios;
    private $authHelper;
    private $comentariosModel;

    function __construct()
    {
        $this->serviciosModel = new ServiciosModel;
        $this->viewcomentarios = new comentariosView;
        $this->authHelper = new AuthHelper;
        $this->comentariosModel = new comentariosModel;
        $this->admin = $this->authHelper->CheckAdministrator();
    }




    function verPaginaBorrarComentario($params = null)
    {
        $id = $params[':ID'];
        $comentarios = $this->comentariosModel->getCommentById($id);

        if($this->admin){
          $this->viewcomentarios->eliminarComentario($comentarios);   
        }
        else{
            header("Location: /inicio/login ");
        }
       
    }
}
