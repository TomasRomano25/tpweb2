<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-14 07:13:44
  from 'C:\xampp\htdocs\Inicio\templates\administrador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8689081b84b9_13634704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0e6d940c2f218d8c0c844d4bfc1ef137f71dc0c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Inicio\\templates\\administrador.tpl',
      1 => 1602652422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5f8689081b84b9_13634704 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['servicios']->value, 'servicio');
$_smarty_tpl->tpl_vars['servicio']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['servicio']->value) {
$_smarty_tpl->tpl_vars['servicio']->do_else = false;
?>

         <tr>
    <td scope="col container-md"> <?php echo $_smarty_tpl->tpl_vars['servicio']->value->Servicios;?>
 </td>
    <td scope="col container-md"> <?php echo $_smarty_tpl->tpl_vars['servicio']->value->Disponible;?>
 </td>
    <td scope="col container-md"> <?php echo $_smarty_tpl->tpl_vars['servicio']->value->Precio;?>
</td>
    

    <td> <a class="btn btn-danger" href='eliminarservicio/<?php echo $_smarty_tpl->tpl_vars['servicio']->value->id;?>
'> Eliminar </a> </td>
    <td> <a class="btn btn-danger" href='editarservicio/<?php echo $_smarty_tpl->tpl_vars['servicio']->value->id;?>
/'>  editar </a> </td>
 </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
