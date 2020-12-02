<?php
require_once 'app/Models/categoriasModel.php';
require_once 'app/Views/categoriasView.php';
class categoriasController
{


    private $categoriasModel;
    private $categoriasView;
    private $admin;
    private $authHelper;
    function __construct()
    {
        $this->categoriasModel = new categoriasModel;
        $this->categoriasView = new categoriasView;
        $this->authHelper = new AuthHelper;
        $this->admin = $this->authHelper->CheckAdministrator();
    }

    function showAllINNER()
    { //muestra todos los Servicios
        $categorias = $this->categoriasModel->getCategoriasInnerCategorias();
        $this->categoriasView->showAllCategoriasPrintInner($categorias);
    }

    function DisplayAndPickCategories()
    { //muestra todos los Servicios
        $categorias = $this->categoriasModel->getCategorias();
        $this->categoriasView->PickCategories($categorias);
    }

    //mostrar pagina de ingresar Categorias

    function MostrarPagninaIngresarCategorias()
    {
        if ($this->admin) {

            $this->categoriasView->ingresarCategoriaPagina();

        } else {
            header("Location: " . BASE_URL);
        }
        
    }

    //agregarCategorias.

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
        if ($this->admin) {

            $categorias = $this->categoriasModel->getCategorias();
            $this->categoriasView->showCategoriasEdit($categorias);

        } else {
            header("Location: " . BASE_URL);
        }
   
    }

    function showeliminaryeditarcategorias()
    { //muestra todos los Servicios
        if ($this->admin) {

            $categorias = $this->categoriasModel->getCategorias();
        $this->categoriasView->eliminaryeditarcategorias($categorias);

        } else {
            header("Location: " . BASE_URL);
        }
        
    }

    function deleteCategoria($params = null)
    {
        $id = $params[':ID'];
        $this->categoriasModel->removerCategoria($id);
        header("Location: /inicio/mostrarservicios");
    }
}
