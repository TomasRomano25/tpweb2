<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-10 18:07:47
  from 'C:\xampp\htdocs\Inicio\templates\editservices.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f81dc53243b25_66875670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7a0e19d2c4fc42a281ba0c29414a2296fe22d83' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Inicio\\templates\\editservices.tpl',
      1 => 1602346063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/headereditar.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5f81dc53243b25_66875670 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/headereditar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['servicios']->value, 'servicio');
$_smarty_tpl->tpl_vars['servicio']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['servicio']->value) {
$_smarty_tpl->tpl_vars['servicio']->do_else = false;
?>
<form action="/inicio/modificarservicio/$servicio->id/" method="POST">
       
    <tr>

        <td scope='col container-md '> <input type='number' name='id' value='<?php echo $_smarty_tpl->tpl_vars['servicio']->value->id;?>
'readonly ></td>
        <td scope='col container-md'> <input type='text' name='ingresarservicio' value='<?php echo $_smarty_tpl->tpl_vars['servicio']->value->Servicios;?>
'></td>
        <td scope='col container-md'>
            <select name='ingresardisponibilidad'>
                 <option value='SI'>SI</option>
                 <option value='NO'>NO</option>
            </select>
        </td>

        <td scope='col container-md'> <input type='text' name='ingresarprecio' value='<?php echo $_smarty_tpl->tpl_vars['servicio']->value->Precio;?>
'></td>
        <td scope='col container-md'> <input type='text' name='ingresararea' value='<?php echo $_smarty_tpl->tpl_vars['servicio']->value->Area;?>
'></td>
        <td><button type='submit' class='btn btn-danger'name ='/inicio/modificarservicio'>Modificar</button></td>
    </tr>
</form>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    <?php }
}
