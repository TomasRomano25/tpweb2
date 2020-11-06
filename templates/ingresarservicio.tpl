{include file="templates/header.tpl"}
<div class="container-md col-4 mt-5">
<form  action="insertar" method="POST">
<div class="form-group ">

  <label for="exampleInputEmail1"> Area </label><br> 
 <select name="ingresararea" id="">
 {foreach from=$categorias item=categoria}
   <option value="{$categoria->id_categorias}">{$categoria->c_nombre}</option>
 {/foreach}
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
</div>
{include file="templates/footer.tpl"}