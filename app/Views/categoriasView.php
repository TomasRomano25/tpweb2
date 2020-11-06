<?php
require_once 'app/Controllers/userController.php';
require_once('libs/Smarty.class.php');

class categoriasView{
   

    function showAllCategoriasPrint($cateogrias)
    {
        $smarty = new Smarty();

        $smarty->assign("categorias", $cateogrias);

        $smarty->display("templates/categorias.tpl");

    }
    function showAllCategoriasPrintInner($categorias)
    {
        
        $smarty = new Smarty();
        $smarty->assign("categorias", $categorias);
        $smarty->display("templates/categoriasinner.tpl");

    }    
    function PickCategories($categorias)
    {
        
        $smarty = new Smarty();
        $smarty->assign("categorias", $categorias);
        $smarty->display("templates/elegircategoria.tpl");
    }
    function ingresarCategoriaPagina(){
        $UserController = new UserController;
        $UserController->CheckLogged();
        $smarty = new Smarty();
        $smarty->display("templates/IngresarCategoria.tpl");
    
     }
    
     function showCategoriasEdit($categorias)

     {
        $UserController = new UserController;
        $UserController->CheckLogged();
         $smarty = new Smarty();
         $smarty->assign("categorias", $categorias);
         $smarty->display("templates/editcategoria.tpl");
     }  

     function eliminaryeditarcategorias($categorias)
     {
        $UserController = new UserController;
        $UserController->CheckLogged();
         $smarty = new Smarty();
         $smarty->assign("categorias", $categorias);
         $smarty->display("templates/paneladmineditor.tpl");
     }  




}