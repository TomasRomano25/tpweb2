<?php

require_once('libs/Smarty.class.php');
class ServiciosView
{
  private $categoriasModel;
  function __construct()
  {
    $this->categoriasModel = new categoriasModel;
  }
  function showAllServicesPrint($servicios)
  {
    $smarty = new Smarty();

    $smarty->assign("servicios", $servicios);

    $smarty->display("templates/servicios.tpl");
  }
  function showAllServicesPrintAdmin($servicios)
  {
    $smarty = new Smarty();
    $smarty->assign("servicios", $servicios);
    $smarty->display("templates/serviciosase.tpl");
  }
  function printEditServices($servicios, $categorias)
  {
    $smarty = new Smarty();
    $smarty->assign("servicios", $servicios);
    $smarty->assign("categorias", $categorias);

    $smarty->display("templates/editservices.tpl");
  }



  function specificProductView($servicios, $user )
  {
    $smarty = new Smarty();
    $smarty->assign("servicios", $servicios);
    $smarty->assign("user", $user);

    $smarty->display("templates/specificproduct.tpl");
  }


 /* function commentsview($comments)
  {
    $smarty = new Smarty();
    $smarty->assign("comments", $comments);
    $smarty->display("templates/specificproduct.tpl");
  }*/

  function homeServicios()
  {
    $smarty = new Smarty();
    $smarty->display("templates/inicio.tpl");
  }

  function ingresarServicio()
  {
    $smarty = new Smarty();
    $categorias = $this->categoriasModel->getCategorias();
    $smarty->assign("categorias", $categorias);
    $smarty->display("templates/ingresarservicio.tpl");
  }


  

  

}
