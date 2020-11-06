<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-14 23:34:21
  from 'C:\xampp\htdocs\Inicio\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f876edd364d04_03178788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25a5d07ce751050086f9f8e5120681ed58e0172e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Inicio\\templates\\error.tpl',
      1 => 1602711254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5f876edd364d04_03178788 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container mt-5">
  <div class="row">
   
   <div class="col-sm mt-5 ">
      <h1 class="">
        LOS DATOS INGRESADOS SON INCORRECTOS...
      </h1>
      <a href="login" class="list-group-item list-group-item-action active text-center ">Volver a intentar</a>
    </div>
    
    <div class="col-sm">
      <img src="css/img/error.jpg" class="" alt="Responsive image">
    </div>
    
  </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
