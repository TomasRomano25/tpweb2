<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-06 18:16:57
  from 'C:\xampp\htdocs\Inicio\templates\paneladmineditor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa5850993e512_53331097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eedd74b5620e2b03d94f51dd1ffe92e4405cea25' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Inicio\\templates\\paneladmineditor.tpl',
      1 => 1604683001,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5fa5850993e512_53331097 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>

<tr>

    <td scope="col container-md"> <?php echo $_smarty_tpl->tpl_vars['categoria']->value->c_nombre;?>
 </td>
    <td> <a class="btn btn-danger" href='eliminarcategorias/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categorias;?>
/'> Eliminar </a> </td>
    <td> <a class="btn btn-danger" href='editarcategorias/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categorias;?>
/'>  editar </a> </td>
</tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
