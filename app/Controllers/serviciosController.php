<?php
require_once 'app/Models/serviciosModel.php';
require_once 'app/Views/serviciosView.php';
require_once 'app/Controllers/userController.php';
class ServiciosController
{
private $serviciosModel;
private $viewservices;

function __construct()
{
    $this->serviciosModel = new ServiciosModel;
    $this->viewservices = new ServiciosView;
 
    
}
    function showAllServiciosMVC()
    { //muestra todos los Servicios
        $servicios = $this->serviciosModel->getServicios();
        $this->viewservices->showAllServicesPrint($servicios);
    }

    function showAllServiciosMVCadmin()
    { //muestra todos los Servicios
        $servicios = $this->serviciosModel->getServicios();
        $this->viewservices->showAllServicesPrintAdmin($servicios);
    }
    //Muestra los servicios de marketing
    function showServiciosMarketingMVC()
    {
        $servicios = $this->serviciosModel->getServiciosMarketing();
        $this->viewservices->showAllServicesPrint($servicios);
    }
 
    //muestra Servicios de consultoria
    function showServiciosConsultoria()
    {
        $servicios = $this->serviciosModel->getServiciosConsultoria();
        $this->viewservices->showAllServicesPrint($servicios);
    }
    function addServicios()
    {
        $servicio = $_POST['ingresarservicio'];
        $categoria = $_POST['ingresararea'];
        $precio = $_POST['ingresarprecio'];
        $disponibilidad = $_POST['ingresardisponibilidad'];
        

        if (empty($servicio) || empty($precio || empty($disponibilidad))) {

            echo 'ERROR DATOS NO INGRESADOS';
            die();
        }
        $this->serviciosModel->instertServicio($servicio, $disponibilidad, $precio, $categoria);
        header("Location: mostrarservicios");
    }
    //eliminaServicios
    function deleteServicio($id)
    {
        $this->serviciosModel->removeTask($id);
        header("Location: /inicio/mostrarservicios");
    }
    //Recibeinfoparaeliminaryelimina
    function editServicios()
    {   
        
        $id = $_POST['id'];
        $servicio = $_POST['ingresarservicio'];
        $area = $_POST['ingresararea'];
        $precio = $_POST['ingresarprecio'];
        $disponibilidad = $_POST['ingresardisponibilidad'];
        $this->serviciosModel->updateServicio($servicio, $disponibilidad, $precio, $area, $id);
        header("Location: /inicio/mostrarservicios");
    }


    function showServiciosDesarrollo()
    {
    
        $servicios =  $this->serviciosModel->getServiciosDesarrollo();
        $this->viewservices->showAllServicesPrint($servicios);
    }

    function showServicio($id)
    {
        $servicios =  $this->serviciosModel->getServicio($id);
        $this->viewservices->showAllServicesPrint($servicios);
    }

    
    function showServiciosEdit($id)
    {
        $user = new UserController;
        $categoriasModel = new categoriasModel;
        $user->CheckLogged();
        $servicios = $this->serviciosModel->getServiciosEdit($id);
        $categorias = $categoriasModel->getCategorias();
        $this->viewservices->printEditServices($servicios, $categorias);
    }
}
