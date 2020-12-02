<?php
require_once 'app/Controllers/serviciosController.php';
require_once 'app/Controllers/userController.php';
require_once 'app/Controllers/categoriasController.php';
require_once 'app/Controllers/comentariosController.php';
require_once 'RouterClass.php';

// CONSTANTES PARA RUTEO:
define("BASE_URL", 'http://' . $_SERVER["SERVER_NAME"] . ':' . $_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/');
define("LOGIN", 'http://' . $_SERVER["SERVER_NAME"] . ':' . $_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/login');
define("LOGOUT", 'http://' . $_SERVER["SERVER_NAME"] . ':' . $_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/logout');


$r = new Router();

// rutas:
$r->addRoute("servicios", "GET", "serviciosController", "home");
$r->addRoute("mostrarservicios", "GET", "serviciosController", "showAllServiciosMVC");
$r->addRoute("mostrarservicioseditareliminar", "GET", "serviciosController", "showAllServiciosMVCadmin");
$r->addRoute("editarusuariosadministrador", "GET", "userController", "ShowAllUsers");

$r->addRoute("mostrarcategoriaseditareliminar", "GET", "categoriasController", "showAllCategoriasEdit");

$r->addRoute("editaryeliminarcategorias", "GET", "categoriasController", "showeliminaryeditarcategorias");



$r->addRoute("mostrarcategorias", "GET", "categoriasController", "DisplayAndPickCategories");

//verifico datos de login:

$r->addRoute("verify", "POST", "userController", "LoginUser");

//muestro servicios de categorias:

$r->addRoute("servicio/:ID", "GET", "serviciosController", "showServicio");

//muestra login Page:

$r->addRoute("login", "GET", "userController", "Loginpagina");

//te lleva al panel de administrador:

$r->addRoute("paneladministrador", "GET", "userController", "MostrarPanelAdministrador");

//el usuario puede deslogearse:

$r->addRoute("logout", "GET", "userController", "LogoutUser");


//Ingresar un servicio Pagina:

$r->addRoute("ingresarservicio", "GET", "serviciosController", "MostrarPaginaIngresarServicio");

//ingresar Categorias Pagina:

$r->addRoute("ingresarcategoriapagina", "GET", "categoriasController", "MostrarPagninaIngresarCategorias");

//insertar Servicios:

$r->addRoute("insertar", "POST", "serviciosController", "addServicios");

//insertar Categorias:

$r->addRoute("categoria", "POST", "categoriasController", "addCategorias");


//eliminar Servicios:
$r->addRoute("eliminarservicio/:ID", "GET", "serviciosController", "deleteServicio");

//Elminar Categorias:
$r->addRoute("eliminarcategorias/:ID", "GET", "categoriasController", "deleteCategoria");
//Elminar Usuarios:
$r->addRoute("eliminarusuarios/:ID", "GET", "userController", "deleteUser");

//editarCategorias:

$r->addRoute("editarcategorias/:ID", "GET", "categoriasController", "showAllCategoriasEdit");

//editarServicios(los traigo y los muestro):

$r->addRoute("editarservicio/:ID", "GET", "serviciosController", "showServiciosEdit");

// TRAIGO DATOS Y EDITO USUARIOS
$r->addRoute("editarusuarios/:ID", "GET", "userController", "showUsersPermisos");

//modificarElServicio:

$r->addRoute("editarservicio/:ID/modificarservicio", "POST", "serviciosController", "editServicios");

//Modificar la categoria:
$r->addRoute("modificarCategorias", "POST", "categoriasController", "editCategorias");

//UpdateUSER

$r->addRoute("modificarusuario", "POST", "userController", "editusuario");

//envia a crear cuenta
$r->addRoute("registeruser", "GET", "userController", "registrationpage");


//crea una nueva cuenta
$r->addRoute("insertarusuarios", "POST", "userController", "addUsuarioNuevo");


//ver comentariosporid
$r->addRoute("vercomentario/:ID", "GET", "comentariosController", "verPaginaBorrarComentario");


//Verproductosporid
$r->addRoute("verproducto/:ID", "GET", "serviciosController", "verPaginaProducto");



//busquedaAvanzada
$r->addRoute("busquedaavanzada", "POST", "serviciosController", "busquedaAvanzada");


//Ruta por defecto.
$r->setDefaultRoute("serviciosController", "home");

//Advance
/*$r->addRoute("autocompletar", "GET", "TasksAdvanceController", "AutoCompletar");*/

//run
$r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);
