<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-23 10:01:24
  from 'C:\xampp\htdocs\Inicio\templates\IngresarCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f928dd47b2fe6_43967104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a22c896b84e7396cbd4f2ea2245f3f9e410c2d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Inicio\\templates\\IngresarCategoria.tpl',
      1 => 1603440082,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5f928dd47b2fe6_43967104 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-md col-4 mt-5">
<form  action="categoria" method="POST">
<div class="form-group ">
  <label for="exampleInputEmail1"> Categoria </label>
  <input type="text" class="form-control" id="exampleInputEmail1" name= "categoria" >
</div>

<button type="submit" class="btn btn-primary" name ="insertarCategoria">insertar</button>
<a href="paneladministrador" class="btn btn-primary ">Volver</a>
</form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
