<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-30 05:13:38
  from 'C:\xampp\htdocs\Inicio\templates\crearservicio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc47172e86e14_14557740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01c6a518a180ded52e3087d798928bd2041d1ac1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Inicio\\templates\\crearservicio.tpl',
      1 => 1606614913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc47172e86e14_14557740 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container-md col-4 mt-5">
<form id="form-servicio" action="insertar" method="POST">
<div class="form-group ">

  <label for="exampleInputEmail1"> Area </label><br> 
 <select name="ingresararea" id="">
 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
   <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categorias;?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->c_nombre;?>
</option>
 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select><br> 
  <label for="exampleInputEmail1"> Servicio </label>
  <input type="text" class="form-control" id="exampleInputEmail1" name= "ingresarservicio" >
  <label for="exampleInputEmail1"> Precio </label>
  <input type="text" class="form-control" id="exampleInputEmail1" name= "ingresarprecio" >
  
  <label for="exampleInputEmail1"> Servicio Disponible </label>
  <select name="ingresardisponibilidad" id="">
<option value="SI" name= "ingresardisponibilidad">Si</option>
<option value="NO" name= "ingresardisponibilidad">No</option>
</select>
</div>
<div class="form-group form-check">
  <input type="checkbox" class="form-check-input" id="exampleCheck1">
  <label class="form-check-label" for="exampleCheck1">¿Estas seguro de querer agregar este servicio?</label>
</div>
<button type="submit" class="btn btn-primary" name ="insertar">insertar</button>
</form>
</div><?php }
}
