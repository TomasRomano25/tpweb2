<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-23 08:36:59
  from 'C:\xampp\htdocs\Inicio\templates\categoriasinner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f927a0b21bdb4_69840687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b83dcba55d4c6df0c8945fb9215d9fcf89dd4c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Inicio\\templates\\categoriasinner.tpl',
      1 => 1603434990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/barradeservicios.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5f927a0b21bdb4_69840687 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/barradeservicios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container mt-5">

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>

<tr>
    <td scope="col container-md"> <?php echo $_smarty_tpl->tpl_vars['categoria']->value->Servicios;?>
</td>
    <td scope="col container-md"> <?php echo $_smarty_tpl->tpl_vars['categoria']->value->Disponible;?>
 </td>
    <td scope="col container-md"> <?php echo $_smarty_tpl->tpl_vars['categoria']->value->Precio;?>
</td>
    <td scope="col container-md"> <?php echo $_smarty_tpl->tpl_vars['categoria']->value->c_nombre;?>
</td>
</tr>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
