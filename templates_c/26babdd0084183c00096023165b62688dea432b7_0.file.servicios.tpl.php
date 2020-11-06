<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-23 19:21:39
  from 'C:\xampp\htdocs\Inicio\templates\servicios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f931123215898_87902055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26babdd0084183c00096023165b62688dea432b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Inicio\\templates\\servicios.tpl',
      1 => 1603473685,
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
function content_5f931123215898_87902055 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/barradeservicios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div>

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

</div>

<div class="container col-2">


</div>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container col-2 mt-5">
<a href="mostrarcategorias" class="btn btn-primary ">Volver</a>
</div><?php }
}
