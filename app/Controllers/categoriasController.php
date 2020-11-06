<?php
require_once 'app/Models/categoriasModel.php';
require_once 'app/Views/categoriasView.php';
class categoriasController{


private $categoriasModel;
private $categoriasView;

    function __construct()
{
    $this->categoriasModel = new categoriasModel;
    $this->categoriasView = new categoriasView;
 
    
}

    function showAllINNER()
    { //muestra todos los Servicios
        $categorias = $this->categoriasModel->getCategoriasInnerCategorias();
        $this->categoriasView->showAllCategoriasPrintInner($categorias);
    }

    function DisplayAndPickCategories()
    { //muestra todos los Servicios
        $categorias = $this->categoriasModel->getCategorias();
        $this->categoriasView-> PickCategories($categorias);
    }


    function addcategorias()
    {
        $categoria = $_POST['categoria'];
        
        if (empty($categoria)) {

            echo 'ERROR DATOS NO INGRESADOS';
            die();
        }
   $this->categoriasModel->instertcategoria($categoria);
        header("Location: mostrarservicios");
    }

    function editCategorias()
    {   
        $id = $_POST['id'];
        $nombre = $_POST['ingresarnombre'];
        $this->categoriasModel->updateCategoria($nombre, $id);
        header("Location: /inicio/paneladministrador");
    }

    function showAllCategoriasEdit()
    { //muestra todos los Servicios
        $categorias = $this->categoriasModel->getCategorias();
        $this->categoriasView->showCategoriasEdit($categorias);
    }

    function showeliminaryeditarcategorias()
    { //muestra todos los Servicios
        $categorias = $this->categoriasModel->getCategorias();
        $this->categoriasView->eliminaryeditarcategorias($categorias);
    }

    function deleteCategoria($id)
    {
        $this->categoriasModel->removerCategoria($id);
        header("Location: /inicio/mostrarservicios");
    }
}