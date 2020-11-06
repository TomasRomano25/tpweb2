<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-10 17:05:27
  from 'C:\xampp\htdocs\Inicio\templates\paneladministrador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f81cdb71f5649_69723849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9aac697967df11609cc6a07ae3b972803908f49' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Inicio\\templates\\paneladministrador.tpl',
      1 => 1602341366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5f81cdb71f5649_69723849 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class=" pt-5 ml-4 list-group container col-2  ">
<a class=" list-group-item list-group-item-action active " href="#">Panel De Control</a>
 
  <a href="ingresarservicio" class="list-group-item list-group-item-action">Ingresar Servicio</a>
  <a href="desarrolloweb" class="list-group-item list-group-item-action">Eliminar Servicio</a>
  <a href="consultoria" class="list-group-item list-group-item-action">Actualizar Servicio</a> 
  <a href="mostrarservicios" class="list-group-item list-group-item-action">
  Ver Servicios
  </a>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
