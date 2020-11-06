{include file="templates/header.tpl"}
<div class="container-md col-4 mt-5">
<form  action="categoria" method="POST">
<div class="form-group ">
  <label for="exampleInputEmail1"> Categoria </label>
  <input type="text" class="form-control" id="exampleInputEmail1" name= "categoria" >
</div>

<button type="submit" class="btn btn-primary" name ="insertarCategoria">insertar</button>
<a href="paneladministrador" class="btn btn-primary ">Volver</a>
</form>
</div>
{include file="templates/footer.tpl"}