<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-06 01:36:04
  from 'C:\xampp\htdocs\Inicio\templates\paneladministrador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa49a74735428_54507802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9aac697967df11609cc6a07ae3b972803908f49' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Inicio\\templates\\paneladministrador.tpl',
      1 => 1604622962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5fa49a74735428_54507802 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class=" container col-4 mt-5  ">
<h5 class="text-center">
        ¡BIENVENIDO Al PANEL DE ADMINISTRADOR!
      </h5>
<a class=" list-group-item list-group-item-action active " href="paneladministrador">Panel De Control</a>
 
  <a href="ingresarservicio" class="list-group-item list-group-item-action">Ingresar Servicio</a>
  <a href="ingresarcategoriapagina" class="list-group-item list-group-item-action">Ingresar Categoria</a>
  <a href="mostrarcategorias" class="list-group-item list-group-item-action">Mostrar Categorias</a>
  <a class=" list-group-item list-group-item-action active " href="paneladministrador">Edicion de Servicios</a>
  <a href="mostrarservicioseditareliminar" class="list-group-item list-group-item-action">
  Editar y Eliminar Servicios
  </a>
<a href="editaryeliminarcategorias" class="list-group-item list-group-item-action">
 Editar y Eliminar Categorias 
  </a>
  
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
