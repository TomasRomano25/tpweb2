<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-13 21:33:14
  from 'C:\xampp\htdocs\Inicio1\templates\inicio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8600fa0582e2_09737551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cde2d761a34cd536a3e4d2ad1774d0a0f4b3490' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Inicio1\\templates\\inicio.tpl',
      1 => 1601940240,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5f8600fa0582e2_09737551 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="pt-5 ml-4 list-group container col-2 ">
<a class=" list-group-item list-group-item-action active " href="#">Nuestros Servicios</a>
  <a href="marketing" class="list-group-item list-group-item-action">Marketing</a>
  <a href="desarrolloweb" class="list-group-item list-group-item-action">Desarrollo Web</a>
  <a href="consultoria" class="list-group-item list-group-item-action">Consultoria</a> 
  <a href="mostrarservicios" class="list-group-item list-group-item-action">
   Ver Todos </a>
  <a href="mostrarcategorias" class="list-group-item list-group-item-action"> Categorias </a>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
