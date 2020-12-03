<?php
require_once 'app/Models/serviciosModel.php';
require_once 'apiController.php';
require_once 'app/Models/comentariosModel.php';
require_once 'app/Views/serviciosView.php';
class ApiComentariosController extends apiController
{
    protected $model;
    protected $comentariosModel;
    protected  $view;
    protected $serviciosView;
    function __construct()
    {
        parent::__construct(); //cuando haga un new, tambien lo hace de api controller y me hace un new de la vista en este caso 
        $this->model = new ServiciosModel;
        $this->comentariosModel = new comentariosModel;
        $this->view = new apiView;
        $this->serviciosview = new ServiciosView;
    }

  

    function getcommentsById($params = null)
    {
        $id = $params[':ID'];
        $comentarios = $this->comentariosModel->getCommentById($id);
        $this->view->response($comentarios, 200);
    }

    function getCommentarios()
    {

        $servicio = $this->comentariosModel->getCommentarios();
        $this->view->response($servicio, 200);
    }

    public function insertComments($params = null)
    {

        
        $body = $this->getData();
        $this->comentariosModel->insertComentario($body->comentario, $body->id_coments, $body->valoracion);
      
       
    }


    function deleteComentario($params = null)
    {

        $id = $params[':ID'];
        $this->comentariosModel->removeComentarios($id);
        $this->serviciosview->homeServicios();
    }

      public function getcommentsidProductos($params = null)
    {
        $id = $params[':ID'];
        $servicio = $this->model->getServicioCompleto($id);
        $this->view->response($servicio, 200);
    }
}
