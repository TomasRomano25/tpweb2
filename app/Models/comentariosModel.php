<?php
require_once 'app/Views/serviciosView.php';
require_once 'app/Controllers/serviciosController.php';
require_once 'app/Helpers/db.helper.php';

class comentariosModel
{
    private $dbHelper;
    private $db;
    function __construct()
    {
        $this->dbHelper = new dbHelper;
        $this->db = $this->dbHelper->connect();
    }






    function getCommentById($id)
    {

        $query = $this->db->prepare('SELECT comentarios.comentario, comentarios.id_comentarios FROM comentarios WHERE id_comentarios = ?');
        $query->execute([$id]);
        $comentarios = $query->fetchall(PDO::FETCH_OBJ);
        return $comentarios;
    }


    function removeComentarios($id){

        $query = $this->db->prepare( " DELETE FROM comentarios WHERE id_comentarios=? ");

        $query->execute(array($id));
    
    }

    function getCommentarios(){

        $query = $this->db->prepare('SELECT * FROM comentarios');
        $query->execute();
        $comentarios = $query->fetchall(PDO::FETCH_OBJ);
        return $comentarios;
    
    
    }

    function insertComentario($comentario, $idproduct, $valoracion)
{
    $query = $this->db->prepare('INSERT INTO comentarios (comentario, id_coments, valoracion) VALUES (?,?,?)'); //cambiar nombre id_coments
    $query->execute([$comentario, $idproduct,$valoracion]);
    //obtengo el id de la tarea nueva
    return $this->db->lastInsertId();
}

}
