<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-10 17:39:52
  from 'C:\xampp\htdocs\Inicio\templates\ingresarservicio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f81d5c82af6f6_96611585',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c49343e100afbd5601469816774a186d47bb9722' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Inicio\\templates\\ingresarservicio.tpl',
      1 => 1602344389,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5f81d5c82af6f6_96611585 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-md col-4 mt-5">
<form  action="insertar" method="POST">
<div class="form-group ">

  <label for="exampleInputEmail1"> Area </label><br> 
 <select name="ingresararea" id="">
<option value="Marketing" name= "ingresararea">Marketing</option>
<option value="Desarrollo Web" name= "ingresararea">Desarrollo Web</option>
<option value="Consultoria" name= "ingresararea">Consultoria</option>
</select><br> 
  <label for="exampleInputEmail1"> Servicio </label>
  <input type="text" class="form-control" id="exampleInputEmail1" name= "ingresarservicio" ">
  <label for="exampleInputEmail1"> Precio </label>
  <input type="text" class="form-control" id="exampleInputEmail1" name= "ingresarprecio" ">
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
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
