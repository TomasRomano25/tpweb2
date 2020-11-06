<?php
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
require_once 'app/Controllers/serviciosController.php';
require_once 'app/Models/serviciosModel.php';
require_once 'app/Views/serviciosView.php';
require_once 'app/Views/UserView.php';
require_once 'app/Views/categoriasView.php';
require_once 'app/Controllers/userController.php';
require_once 'app/Controllers/categoriasController.php';
// lee la acción.
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'servicios'; // acción por defecto si no envían
}
// parsea la accion Ej: suma/1/2 --> ['suma', 1, 2].
$params = explode('/', $action);
// determina que camino seguir según la acción.
switch ($params[0]) {
    case 'servicios':
        $serviciosview = new ServiciosView;
        $serviciosview->homeServicios();
        break;
    case 'mostrarservicios':

        $serviciosController = new ServiciosController;
        $serviciosController->showAllServiciosMVC();
        break;

        case 'mostrarservicioseditareliminar':

            $serviciosController = new ServiciosController;
            $serviciosController->showAllServiciosMVCadmin();
            break;

        case 'mostrarcategoriaseditareliminar':
                $categoriasController = new categoriasController;
                $categoriasController->showAllCategoriasEdit();


      case 'editaryeliminarcategorias':
                $categoriasController = new categoriasController;
                $categoriasController->showeliminaryeditarcategorias();

         break;
        case 'mostrarcategorias':
            $categoriasController = new categoriasController;
            $categoriasController->DisplayAndPickCategories();
        break;
    case 'Marketing':
        $serviciosController = new ServiciosController;
        $serviciosController->showServiciosMarketingMVC();
        break;
    case 'verify':
            $userController = new userController;
            $userController->loginUser();
            break;
    case 'servicio':
        $serviciosController = new ServiciosController;
        $serviciosController->showServicio($params[1]);
        break;
    case 'Desarrollo Web':
        $serviciosController = new ServiciosController;
        $serviciosController->showServiciosDesarrollo();
        break;

    case 'Consultoria':
        $serviciosController = new ServiciosController;
        $serviciosController->showServiciosConsultoria();
        break;
    case 'login':
        $userview = new UserView;
        $userview->LoginPage();
        break;
    case 'paneladministrador':
        $userview = new UserView;
        $userview->AdminPanel();
        break;
    case 'ingresarservicio':
        $userview = new UserView;
        $userview->ingresarServicio();
        break;
        case 'ingresarcategoriapagina':
            $categoriaview = new CategoriasView;
            $categoriaview->ingresarCategoriaPagina();
            break;
    case 'insertar':
        $serviciosController = new ServiciosController;
        $serviciosController->addServicios();
        break;
    case 'categoria':
        $categoriaController = new categoriasController;
        $categoriaController->addcategorias();
      break;

    case 'eliminarservicio':
        $id = $params[1];
        $serviciosController = new ServiciosController;
        $serviciosController->deleteServicio($id);
        break;

        case 'eliminarcategorias':
            $id = $params[1];
            $categoriasController = new categoriasController;
            $categoriasController->deleteCategoria($id);
            break;

            case 'editarcategorias':
                $id = $params[1];
                $categoriasController = new categoriasController;
                $categoriasController->showAllCategoriasEdit();
                break;

    case 'editarservicio':
        $serviciosController = new ServiciosController;
        $id = $params[1];
        $serviciosController->showServiciosEdit($id);
        break;
        
    case 'modificarservicio':
        $serviciosController = new serviciosController;
        $id = $params[1];
        $serviciosController->editServicios($id);
        break;

    case 'modificarCategorias':
            $categoriasController = new categoriasController;
            $id = $params[1];
            $categoriasController->editCategorias($id);
            break;
    default:
        echo ('404 Page not found');
        break;
}