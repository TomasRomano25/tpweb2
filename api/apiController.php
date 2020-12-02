<?php
require_once 'api/apiView.php';


abstract class ApiController
{
    protected $model; // lo instancia el hijo
    protected $view;

    private $data;

    public function __construct()
    {
        $this->view = new APIView();
        //con esto me traigo el "string" en este caso el json.
        $this->data = file_get_contents("php://input");
    }

    function getData()
    {
        return json_decode($this->data);
    }
}