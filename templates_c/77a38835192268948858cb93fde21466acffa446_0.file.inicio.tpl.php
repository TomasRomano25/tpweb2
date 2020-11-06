<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-14 19:10:38
  from 'C:\xampp\htdocs\Inicio\templates\inicio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f87310e47e295_10410591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77a38835192268948858cb93fde21466acffa446' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Inicio\\templates\\inicio.tpl',
      1 => 1602695436,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5f87310e47e295_10410591 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="pt-5 ml-4 list-group container col-2  ">
<a class=" list-group-item list-group-item-action active " href="#">Nuestros Servicios</a>
    <a href="mostrarcategorias" class="list-group-item list-group-item-action">Ver Categorias</a> 
  <a href="mostrarservicios" class="list-group-item list-group-item-action">
   Ver Todos </a>
  
</div>


<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
