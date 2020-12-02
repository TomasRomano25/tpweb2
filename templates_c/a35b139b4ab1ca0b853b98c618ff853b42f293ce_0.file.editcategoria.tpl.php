<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-21 23:10:22
  from 'C:\xampp\htdocs\Inicio\templates\editcategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb9904ea643d7_43062386',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a35b139b4ab1ca0b853b98c618ff853b42f293ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Inicio\\templates\\editcategoria.tpl',
      1 => 1605996617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5fb9904ea643d7_43062386 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <h1 > EDITAR CATEGORIAS </h1>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
<form action="modificarCategorias" method="POST">
    <tr>
        <td scope='col container-md '> <input type='number' name='id' value='<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categorias;?>
'readonly></td>
        <td scope='col container-md'> <input type='text' name='ingresarnombre' value='<?php echo $_smarty_tpl->tpl_vars['categoria']->value->c_nombre;?>
'></td>
        <td><button type='submit' class='btn btn-danger'>Modificar</button></td>
    </tr>
</form>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    <?php }
}
