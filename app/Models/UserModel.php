<?php
require_once 'app/Views/UserView.php';
require_once 'app/helpers/db.helper.php';

class UserModel
{
    private $db;



    public function __construct()
    {
        // me contecto a la base de datos pongo el nombre de la base de datos el usuario y la contraseña en este caso vacio
        $this->db = new PDO('mysql: host=localhost;' . 'dbname=db_servicios; charset=utf8', 'root', '');
    }
    function getUsersEdit($id)
    {

        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE id=?');
        $query->execute([$id]);
        $users = $query->fetchall(PDO::FETCH_OBJ);
        return $users;
    }



    function getUsers()
    {
        $query = $this->db->prepare('SELECT * FROM usuarios');
        $query->execute();
        $users = $query->fetchall(PDO::FETCH_OBJ);
        return $users;
    }

    public function getbyEmail($email)
    {

        $query = $this->db->prepare('SELECT * FROM usuarios WHERE email = ?');
        $query->execute([$email]);
        return $query->fetch(PDO::FETCH_OBJ);
    }


    function updateUser($permiso, $userid)
    {

        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = $this->db->prepare("UPDATE usuarios SET `permiso` = '$permiso' WHERE id='$userid';");
        $query->execute([$permiso]);
    }


    function instertNuevoUsuario($usuario, $email, $contraseñaencriptada)
    {
        $query = $this->db->prepare('INSERT INTO usuarios (usuario, email, contraseña) VALUES (?,?,?)');
        $query->execute([$usuario, $email, $contraseñaencriptada]);
    }
    function removeUser($id)
    {
        $query = $this->db->prepare(
            " DELETE FROM usuarios WHERE id=? "
        );

        $query->execute(array($id));
    }
}
