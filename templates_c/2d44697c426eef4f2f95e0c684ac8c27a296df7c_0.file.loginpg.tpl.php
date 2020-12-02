<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-22 18:16:29
  from 'C:\xampp\htdocs\Inicio\templates\loginpg.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fba9cedbb1170_41591811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d44697c426eef4f2f95e0c684ac8c27a296df7c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Inicio\\templates\\loginpg.tpl',
      1 => 1606065289,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5fba9cedbb1170_41591811 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php 
';
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container col-4 mt-5">
<form  action="verify" method="POST" >
<div class="form-group ">
  <label >Email address</label>
  <input type="email"  name="email" class="form-control"  aria-describedby="emailHelp">
  <small id="emailHelp" class="form-text text-muted">Nunca revelaremos tu email a nadie.</small>
</div>
<div class="form-group">
  <label >Password</label>
  <input  type="password" name="contraseña" class="form-control" >
</div>
<div class="form-group form-check">
  <input type="checkbox" class="form-check-input" >
  <label class="form-check-label" >Verificacion Humana</label>
</div>
<button type="submit" class="btn btn-primary">Conectarme</button>
<a href="registeruser" class="btn btn-primary"> Crear Cuenta</a>


</form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
