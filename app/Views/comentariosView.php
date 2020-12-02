<?php
require_once('libs/Smarty.class.php');

class comentariosView{







    function eliminarComentario($comentarios )
    {
      $smarty = new Smarty();
      $smarty->assign("comentarios", $comentarios);
  
      $smarty->display("templates/eliminarcomentario.tpl");
    }   













}