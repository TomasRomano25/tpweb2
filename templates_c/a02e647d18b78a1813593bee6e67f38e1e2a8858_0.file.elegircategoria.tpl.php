<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-23 18:45:31
  from 'C:\xampp\htdocs\Inicio\templates\elegircategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f9308ab229c24_27389183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a02e647d18b78a1813593bee6e67f38e1e2a8858' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Inicio\\templates\\elegircategoria.tpl',
      1 => 1603471519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5f9308ab229c24_27389183 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container mt-5">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
<tr>
    <a href="servicio/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categorias;?>
" class="list-group-item list-group-item-action container-md"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->c_nombre;?>
</a>
</tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<div class="container col-2 mt-5">
<a href="servicios" class="btn btn-primary ">Volver</a>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
