
<?php


require_once 'app/Controllers/categoriasController.php';

class categoriasModel{
    
    private function connect(){
      // me contecto a la base de datos pongo el nombre de la base de datos el usuario y la contraseña en este caso vacio
      $db = new PDO('mysql: host=localhost;' . 'dbname=db_servicios; charset=utf8', 'root', '');
      return $db;
  }
function getCategoriasInnerCategorias()
{
    $db = $this->connect();
 //SELECT categorias.c_nombre FROM categorias JOIN servicios ON servicios.categorias_id = categorias.id_categorias WHERE categorias_id=1
    $query = $db->prepare('SELECT categorias.c_nombre, servicios.Servicios, servicios.Disponible ,servicios.Precio  FROM categorias JOIN servicios ON servicios.categorias_id = categorias.id_categorias');
     $query->execute();
    $categorias = $query->fetchall(PDO::FETCH_OBJ);
    return $categorias;
}


function removerCategoria($id)
{
   
    $db =  $this->connect();
    $query = $db->prepare(" DELETE FROM categorias WHERE id_categorias=? ");
    $query->execute(array($id));
}
function getCategorias()
{
    $db = $this->connect();
    $query = $db->prepare('SELECT *  FROM categorias');
     $query->execute();
    $categorias = $query->fetchall(PDO::FETCH_OBJ);
    return $categorias;
}


function instertcategoria($categorias)
    {
       
        $db = $this->connect();
        $query = $db->prepare('INSERT INTO categorias (c_nombre) VALUES (?)');
        $query->execute([$categorias]);
        //obtengo el id de la tarea nueva
        return $db->lastInsertId();
    }

    function updateCategoria($nombre, $id)
    {
        $db = $this->connect();
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = $db->prepare("UPDATE categorias SET `c_nombre` = '$nombre' WHERE id_categorias='$id'");
        $query->execute([$nombre]);
        //obtengo el id de la tarea nueva 
        return $db->lastInsertId();
    }



}


