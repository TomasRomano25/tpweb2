<?php
require_once 'app/Views/serviciosView.php';
require_once 'app/Controllers/serviciosController.php';
require_once 'app/Helpers/db.helper.php';

class ServiciosModel
{
    private $dbHelper;
    private $db;
    function __construct()
    {
        $this->dbHelper = new dbHelper;
        $this->db = $this->dbHelper->connect();
    }

    //se conecta a la base de datos
    private function connect()
    {
        // me contecto a la base de datos pongo el nombre de la base de datos el usuario y la contraseña en este caso vacio
        $db = new PDO('mysql: host=localhost;' . 'dbname=db_servicios; charset=utf8', 'root', '');
        return $db;
    }
    //obtiene los servicios de la base de datos
    function getServicios()
    {
        $query = $this->db->prepare('SELECT * FROM servicios
         JOIN categorias ON servicios.categorias_id = categorias.id_categorias');
        $query->execute();
        $servicios = $query->fetchall(PDO::FETCH_OBJ);
        return $servicios;
    }
    //obtiene los nombres de las categorias de los servicios segun el id que le corresponda

    //obtiene los servicios segunCategoria
    function getServicio($id)
    {

        $query = $this->db->prepare('SELECT * FROM servicios
         JOIN categorias ON servicios.categorias_id = categorias.id_categorias WHERE categorias_id = ?');
        $query->execute([$id]);
        $servicios = $query->fetchall(PDO::FETCH_OBJ);
        return $servicios;
    }

    function getServicioPrecioYDisponibilidad($precio,$precio2, $disponible)
    {

        $query = $this->db->prepare("SELECT * FROM servicios
         JOIN categorias ON servicios.categorias_id = categorias.id_categorias
          WHERE servicios.precio >= $precio and servicios.Precio <= $precio2 
          and servicios.Disponible = '$disponible'");
        $query->execute();
        $servicios = $query->fetchall(PDO::FETCH_OBJ);
        return $servicios;
    }


    function getServicioCompleto($id)
    {
        $query = $this->db->prepare('SELECT * FROM comentarios
        JOIN servicios ON comentarios.id_coments = servicios.id
        JOIN categorias ON servicios.categorias_id = categorias.id_categorias WHERE id = ?');
        $query->execute([$id]);
        $servicios = $query->fetchall(PDO::FETCH_OBJ);
        return $servicios;
    }
    

    function getServiciosbyID($id)
    {
        $query = $this->db->prepare('SELECT * FROM servicios 
        JOIN categorias ON servicios.categorias_id = categorias.id_categorias WHERE id = ?');
        $query->execute([$id]);
        $servicios = $query->fetchall(PDO::FETCH_OBJ);
        return $servicios;
    }


/*function getCommentarios(){

    $query = $this->db->prepare('SELECT * FROM comentarios');
    $query->execute();
    $comentarios = $query->fetchall(PDO::FETCH_OBJ);
    return $comentarios;


}*/

/*function insertComentario($comentario, $idproduct, $valoracion)
{
    $query = $this->db->prepare('INSERT INTO comentarios (comentario, id_coments, valoracion) VALUES (?,?,?)'); //cambiar nombre id_coments
    $query->execute([$comentario, $idproduct,$valoracion]);
    //obtengo el id de la tarea nueva
    return $this->db->lastInsertId();
}*/


    //obtener servicio por id

    function getServicioPorId($id)
    {

        $query = $this->db->prepare('SELECT * FROM servicios WHERE id = ?');
        $query->execute([$id]);
        $servicios = $query->fetchall(PDO::FETCH_OBJ);
        return $servicios;
    }

    //inserta los servicios en la base de datos
    function instertServicio($servicios, $disponibilidad, $precio, $categoria)
    {


        $query = $this->db->prepare('INSERT INTO servicios (Servicios, Disponible, Precio, categorias_id) VALUES (?,?,?,?)');
        $query->execute([$servicios, $disponibilidad, $precio, $categoria]);
        //obtengo el id de la tarea nueva
        return $this->db->lastInsertId();
    }

    function removeTask($id)
    {

        $db =  $this->connect();
        $query = $db->prepare(
            " DELETE FROM servicios WHERE id=? "
        );

        $query->execute(array($id));
    }
    function getServiciosEdit($id)
    {

        $db = $this->connect();
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = $db->prepare('SELECT * FROM servicios JOIN categorias ON servicios.categorias_id = categorias.id_categorias  WHERE id=?');
        $query->execute([$id]);
        $servicios = $query->fetchall(PDO::FETCH_OBJ);
        return $servicios;
    }

    function updateServicio($servicios, $disponibilidad, $precio, $Area, $id)
    {
        $db = $this->connect();
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = $db->prepare("UPDATE servicios SET `Servicios` = '$servicios', `Precio` = '$precio', `categorias_id` = '$Area', `Disponible` = '$disponibilidad'  WHERE id='$id';");
        $query->execute([$servicios, $disponibilidad, $precio, $Area]);
        return $db->lastInsertId();
    }
}
