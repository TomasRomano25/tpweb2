<?php

require_once('libs/Smarty.class.php');
class ServiciosView{
 
    function showAllServicesPrint($servicios)
    {
        $smarty = new Smarty();

        $smarty->assign("servicios", $servicios);

        $smarty->display("templates/servicios.tpl");

    }
    function showAllServicesPrintAdmin($servicios)
    {
        $UserController = new UserController;
        $UserController->CheckLogged();
        $smarty = new Smarty();
        $smarty->assign("servicios", $servicios);
        $smarty->display("templates/serviciosase.tpl");
    }  
  function printEditServices($servicios, $categorias){

    $smarty = new Smarty();

    $smarty->assign("servicios", $servicios);
    $smarty->assign("categorias", $categorias);

    $smarty->display("templates/editservices.tpl");
  }

  function homeServicios(){
    $smarty = new Smarty();
    $smarty->display("templates/inicio.tpl");
}
}

