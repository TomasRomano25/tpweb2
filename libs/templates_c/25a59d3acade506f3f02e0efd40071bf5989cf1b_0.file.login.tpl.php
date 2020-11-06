<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-10 17:40:29
  from 'C:\xampp\htdocs\Inicio\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f81d5ed3197d3_91679932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25a59d3acade506f3f02e0efd40071bf5989cf1b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Inicio\\templates\\login.tpl',
      1 => 1602344425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5f81d5ed3197d3_91679932 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php 
';
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container col-4 mt-5">
<form  action="servicios" method="POST" >
<div class="form-group ">
  <label >Email address</label>
  <input type="email" class="form-control"  aria-describedby="emailHelp">
  <small id="emailHelp" class="form-text text-muted">Nunca revelaremos tu email a nadie.</small>
</div>
<div class="form-group">
  <label >Password</label>
  <input type="password" class="form-control" >
</div>
<div class="form-group form-check">
  <input type="checkbox" class="form-check-input" >
  <label class="form-check-label" >Verificacion Humana</label>
</div>
<a class="btn btn-primary" href="paneladministrador"> Conectarme</a>

</form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
