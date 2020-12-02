<?php 
{include file="templates/header.tpl"}

<div class="container col-4 mt-5">
<form  action="verify" method="POST" >
<div class="form-group ">
  <label >Email address</label>
  <input type="email"  name="email" class="form-control"  aria-describedby="emailHelp">
  <small id="emailHelp" class="form-text text-muted">Nunca revelaremos tu email a nadie.</small>
</div>
<div class="form-group">
  <label >Password</label>
  <input  type="password" name="contraseña" class="form-control" >
</div>
<div class="form-group form-check">
  <input type="checkbox" class="form-check-input" >
  <label class="form-check-label" >Verificacion Humana</label>
</div>
<button type="submit" class="btn btn-primary">Conectarme</button>
<a href="registeruser" class="btn btn-primary"> Crear Cuenta</a>


</form>
</div>
{include file="templates/footer.tpl" }
