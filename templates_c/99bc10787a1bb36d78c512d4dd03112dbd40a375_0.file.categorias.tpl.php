<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-14 21:38:42
  from 'C:\xampp\htdocs\Inicio\templates\categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8753c2b37502_65924618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99bc10787a1bb36d78c512d4dd03112dbd40a375' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Inicio\\templates\\categorias.tpl',
      1 => 1602704320,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5f8753c2b37502_65924618 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container mt-5">
<div class="row">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>

<div class="card col-sm" style="width: 18rem;">
  <img class="card-img-top" src="css/img/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</h5>
    <p class="card-text">Ver Servicios de la categoria <?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</p>
    <a href="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
" class="btn btn-primary">Entrar</a>
  </div>
</div>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
