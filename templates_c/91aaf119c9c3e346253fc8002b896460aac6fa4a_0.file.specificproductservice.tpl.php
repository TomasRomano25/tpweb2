<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-01 18:56:55
  from 'C:\xampp\htdocs\Inicio\templates\specificproductservice.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc683e7bd3874_55501718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91aaf119c9c3e346253fc8002b896460aac6fa4a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Inicio\\templates\\specificproductservice.tpl',
      1 => 1606845392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc683e7bd3874_55501718 (Smarty_Internal_Template $_smarty_tpl) {
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
            <td scope="col container-md"> <?php echo $_smarty_tpl->tpl_vars['servicio']->value->c_nombre;?>
</td>

        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    

    </table>


    <div id='detallesdelproducto'>
        <?php echo $_smarty_tpl->tpl_vars['servicio']->value->id;?>

    </div><?php }
}
