<?php
require_once 'app/Controllers/userController.php';
require_once('libs/Smarty.class.php');

class categoriasView{
    private $newsmarty;

    function __construct()
    {   
       
       $this->newsmarty = new Smarty();
 
    }
    function showAllCategoriasPrint($cateogrias)
    {
       
        $this->newsmarty->assign("categorias", $cateogrias);

        $this->newsmarty->display("templates/categorias.tpl");

    }
    function showAllCategoriasPrintInner($categorias)
    {
        
        $smarty = new Smarty();
        $this->newsmarty->assign("categorias", $categorias);
        $this->newsmarty->display("templates/categoriasinner.tpl");

    }    
    function PickCategories($categorias)
    {
        
        $smarty = new Smarty();
        $this->newsmarty->assign("categorias", $categorias);
        $this->newsmarty->display("templates/elegircategoria.tpl");
    }
    function ingresarCategoriaPagina(){
       
        $smarty = new Smarty();
        $this->newsmarty->display("templates/IngresarCategoria.tpl");
    
     }
    
     function showCategoriasEdit($categorias)

     {
        
         $smarty = new Smarty();
         $this->newsmarty->assign("categorias", $categorias);
         $this->newsmarty->display("templates/editcategoria.tpl");
     }  

     function eliminaryeditarcategorias($categorias)
     {
    
         $smarty = new Smarty();
         $this->newsmarty->assign("categorias", $categorias);
         $this->newsmarty->display("templates/paneladmineditor.tpl");
     }  




}