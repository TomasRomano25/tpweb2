<?php
require_once 'routerclass.php';
require_once 'api/ApiComentariosController.php';
//Instancio router
$router = new Router();

//tabla de router Api Rest!

$router->addRoute('comentarios/:ID', 'GET', 'ApiComentariosController', 'getcommentsidProductos');
$router->addRoute('comentarios', 'GET', 'ApiComentariosController', 'getCommentarios');
$router->addRoute('comentariosid/:ID', 'GET', 'ApiComentariosController', 'getcommentsById');
$router->addRoute('comentarios/:ID', 'DELETE', 'ApiComentariosController', 'deleteComentario');
$router->addRoute('comentarios', 'POST', 'ApiComentariosController', 'insertComments');





//run
$router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);