<?php
require_once 'app/Views/UserView.php';




class UserModel {

/*function __construct()
{
   $this->db = new PDO('mysql: host=localhost;' . 'dbname=db_servicios; charset=utf8', 'root', '');
}*/

private function connect()
{
    // me contecto a la base de datos pongo el nombre de la base de datos el usuario y la contraseña en este caso vacio
    $db = new PDO('mysql: host=localhost;' . 'dbname=db_servicios; charset=utf8', 'root', '');
    return $db;
}


        public function getbyEmail($email){
        $db = $this->connect();
        $query = $db->prepare('SELECT * FROM usuarios WHERE email = ?');
        $query->execute([$email]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
}