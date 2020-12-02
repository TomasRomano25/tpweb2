<?php

class dbHelper
{
    private $userModel;
    private $userview;
    function __construct()
    {
        $this->userview = new UserView;
        $this->userModel = new UserModel;
    }

    public function connect()
    {

        $db = new PDO('mysql: host=localhost;' . 'dbname=db_servicios; charset=utf8', 'root', '');
        return $db;
    }
}
