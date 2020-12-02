<?php
require_once 'app/Models/serviciosModel.php';
require_once 'app/Views/serviciosView.php';
require_once 'app/Controllers/userController.php';
class ServiciosController
{
    private $admin;
    private $serviciosModel;
    private $viewservices;
    private $authHelper;
    private $userModel;

    function __construct()
    {
        $this->serviciosModel = new ServiciosModel;
        $this->viewservices = new ServiciosView;
        $this->authHelper = new AuthHelper;
        $this->userModel = new UserModel;
        $this->admin = $this->authHelper->CheckAdministrator();
    }
    function showAllServiciosMVC()
    { //muestra todos los Servicios
        $servicios = $this->serviciosModel->getServicios();
        $this->viewservices->showAllServicesPrint($servicios);
    }

    function showAllServiciosMVCadmin()
    { //muestra todos los Servicios para eliminar
        if ($this->admin) {
            $servicios = $this->serviciosModel->getServicios();
            $this->viewservices->showAllServicesPrintAdmin($servicios);
        } else {
            header("Location: " . BASE_URL);
        }
    }

    function BusquedaAvanzada()
    {
        $user = $this->authHelper->CheckLogged();
        
            if (!isset($_POST['disponible'])) {
                $disponible = null;
            } else {
                $disponible = $_POST['disponible'];
            }

            $rangodeprecios = $_POST['rangodeprecios'];

            if ($disponible != null) {
                $disponible = "SI";
                if ($rangodeprecios == "precioseconomicos") {
                    // echo 'Servicios disponibles && economicos';
                    $precio1 = 100;
                    $precio2 = 1500;
                    $servicios = $this->serviciosModel->getServicioPrecioYDisponibilidad($precio1, $precio2, $disponible);
                    $this->viewservices->showAllServicesPrint($servicios);
                } else if ($rangodeprecios == "preciosintermedios") {
                    $precio1 = 1501;
                    $precio2 = 10000;
                    $servicios = $this->serviciosModel->getServicioPrecioYDisponibilidad($precio1, $precio2, $disponible);
                    $this->viewservices->showAllServicesPrint($servicios);
                } else if ($rangodeprecios == "precioselevados") {
                    $precio1 = 10001;
                    $precio2 = 10000000;
                    $servicios = $this->serviciosModel->getServicioPrecioYDisponibilidad($precio1, $precio2, $disponible);
                    $this->viewservices->showAllServicesPrint($servicios);
                }
            } else if ($disponible == null) {
                $disponible = "NO";
                if ($rangodeprecios == "precioseconomicos") {
                    // echo 'Servicios disponibles && economicos';
                    $precio1 = 100;
                    $precio2 = 1500;
                    $servicios = $this->serviciosModel->getServicioPrecioYDisponibilidad($precio1, $precio2, $disponible);
                    $this->viewservices->showAllServicesPrint($servicios);
                } else if ($rangodeprecios == "preciosintermedios") {
                    $precio1 = 1501;
                    $precio2 = 10000;
                    $servicios = $this->serviciosModel->getServicioPrecioYDisponibilidad($precio1, $precio2, $disponible);
                    $this->viewservices->showAllServicesPrint($servicios);
                } else if ($rangodeprecios == "precioselevados") {
                    $precio1 = 10001;
                    $precio2 = 10000000;
                    $servicios = $this->serviciosModel->getServicioPrecioYDisponibilidad($precio1, $precio2, $disponible);
                    $this->viewservices->showAllServicesPrint($servicios);
                }
            }
        
    }

    function addServicios()
    {
        $servicio = $_POST['ingresarservicio'];
        $categoria = $_POST['ingresararea'];
        $precio = $_POST['ingresarprecio'];
        $disponibilidad = $_POST['ingresardisponibilidad'];


        if (empty($servicio) || empty($precio || empty($disponibilidad))) {

            header("Location: /Inicio/ingresarservicio ");
            die();
        }
        $this->serviciosModel->instertServicio($servicio, $disponibilidad, $precio, $categoria);
        header("Location: mostrarservicios");
    }
    //eliminaServicios
    function deleteServicio($params = null)
    {
        $id = $params[':ID'];
        $this->serviciosModel->removeTask($id);
        header("Location: /inicio/mostrarservicios");
    }

    function editServicios()
    {

        $id = $_POST['id'];
        $servicio = $_POST['ingresarservicio'];
        $area = $_POST['ingresararea'];
        $precio = $_POST['ingresarprecio'];
        $disponibilidad = $_POST['ingresardisponibilidad'];
        if (empty($servicio) || empty($precio) || empty($disponibilidad || empty($area))) {

            header("Location: /inicio/paneladministrador ");
            die();
        }
        $this->serviciosModel->updateServicio($servicio, $disponibilidad, $precio, $area, $id);
        header("Location: /inicio/mostrarservicios");
    }

    function showServicio($params = null)
    {
        $id = $params[':ID'];
        $servicios =  $this->serviciosModel->getServicio($id);
        $this->viewservices->showAllServicesPrint($servicios);
    }



    //TRAE SERVICIOS EDITAR
    function showServiciosEdit($params = null)
    {
        if ($this->admin) {
            $id = $params[':ID'];
            $categoriasModel = new categoriasModel;
            $servicios = $this->serviciosModel->getServiciosEdit($id);
            $categorias = $categoriasModel->getCategorias();
            $this->viewservices->printEditServices($servicios, $categorias);
        } else {
            header("Location: " . BASE_URL);
        }
    }


    // MUESTRA INICIO
    function home()
    {
        $this->viewservices->homeServicios();
    }


    // PAGINA PARA INGRESAR SERVICIOS
    function MostrarPaginaIngresarServicio()
    {
        if ($this->admin) {
            $this->viewservices->ingresarServicio();
        } else {
            header("Location: " . BASE_URL);
        }
    }


    function verPaginaProducto($params = null)
    {

        $id = $params[':ID'];
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
        $servicios =  $this->serviciosModel->getServiciosbyID($id);

        if (isset($_SESSION['EMAIL_USER'])) {

            $user = $_SESSION['EMAIL_USER'];
        } else {

            $user = "";
        }
        $this->viewservices->specificProductView($servicios, $user);
    }
}
