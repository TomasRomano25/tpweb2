<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-02 15:01:15
  from 'C:\xampp\htdocs\Inicio\templates\eliminarcomentario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc79e2bc92944_94816351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4e20b1ba6b9eea3e8b2d714a32eebbdfb2ee617' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Inicio\\templates\\eliminarcomentario.tpl',
      1 => 1606917674,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5fc79e2bc92944_94816351 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 </table> 
<form id="contenedor" class="container col-5 mt-5 text-center">

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comentarios']->value, 'comentario');
$_smarty_tpl->tpl_vars['comentario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comentario']->value) {
$_smarty_tpl->tpl_vars['comentario']->do_else = false;
?>

    <h4> ¿Estas seguro que quieres eliminar este comentario? </h4>
    <p ><?php echo $_smarty_tpl->tpl_vars['comentario']->value->comentario;?>
</p>
    
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<div class="d-lg-none" id="comentarioparaeliminar"><?php echo $_smarty_tpl->tpl_vars['comentario']->value->id_comentarios;?>
</div>
    
<input type='submit' value="si" id='eliminatecomentario' class='btn btn-danger'>
<a href="localhost/inicio" class='btn btn-danger'>no</a>

</form>









<?php echo '<script'; ?>
 src="js/delete.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
