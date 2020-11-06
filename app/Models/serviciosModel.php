<?php
require_once 'app/Views/serviciosView.php';
require_once 'app/Controllers/serviciosController.php';

class ServiciosModel
{  

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
       
        $db = $this->connect();
        $query = $db->prepare('SELECT * FROM servicios JOIN categorias ON servicios.categorias_id = categorias.id_categorias');
        $query->execute();
        $servicios = $query->fetchall(PDO::FETCH_OBJ);
        return $servicios;
    }
    //obtiene los nombres de las categorias de los servicios segun el id que le corresponda
 
    //obtiene los servicios de marketing
    function getServiciosMarketing()
    {
        $db =  $this->connect();
        $query = $db->prepare('SELECT * FROM servicios WHERE Area = ?');
        $query->execute(['Marketing']);
        $servicios = $query->fetchall(PDO::FETCH_OBJ);
        return $servicios;
    }
    function getServicio($id)
    {
        $db =  $this->connect();
        $query = $db->prepare('SELECT * FROM servicios JOIN categorias ON servicios.categorias_id = categorias.id_categorias WHERE categorias_id = ?');
        $query->execute([$id]);
        $servicios = $query->fetchall(PDO::FETCH_OBJ);
        return $servicios;
    }
    //inserta los servicios en la base de datos
    function instertServicio($servicios, $disponibilidad, $precio, $categoria)
    {
       
        $db = $this->connect();
        $query = $db->prepare('INSERT INTO servicios (Servicios, Disponible, Precio, categorias_id) VALUES (?,?,?,?)');
        $query->execute([$servicios, $disponibilidad, $precio, $categoria]);
        //obtengo el id de la tarea nueva
        return $db->lastInsertId();
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
    function getServiciosDesarrollo()
    {
        
        $db = $this->connect();
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = $db->prepare('SELECT * FROM servicios WHERE Area = ?');
        $query->execute(['Desarrollo Web']);
        $servicios = $query->fetchall(PDO::FETCH_OBJ);
        return $servicios;
    }
    function getServiciosConsultoria()
    {
        
        $db = $this->connect();
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = $db->prepare('SELECT * FROM servicios WHERE Area = ?');
        $query->execute(['Consultoria']);
        $servicios = $query->fetchall(PDO::FETCH_OBJ);
        return $servicios;
    }

    function updateServicio($servicios, $disponibilidad, $precio, $Area, $id)
    {
        $db = $this->connect();
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = $db->prepare("UPDATE servicios SET `Servicios` = '$servicios', `Precio` = '$precio', `categorias_id` = '$Area', `Disponible` = '$disponibilidad'  WHERE id='$id';");
        $query->execute([$servicios, $disponibilidad, $precio, $Area]);
        //obtengo el id de la tarea nueva 
        return $db->lastInsertId();
    }
}
