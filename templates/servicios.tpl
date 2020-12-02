{include file="templates/header.tpl"}
{include file="templates/barradeservicios.tpl"}


<div class="container col-5 ml-5">
<form action="busquedaavanzada" method="POST">
<p> Busqueda Avanzada </p>
<input type="checkbox" name="disponible" >
<label for="disponible"> ServiciosDisponibles</label>

<select name="rangodeprecios" id="cars">
  <option value="precioseconomicos">Economicos</option>
  <option value="preciosintermedios">Intermedios</option>
  <option value="precioselevados">HighPrice</option>
</select>
        
        
<input type="submit" name="busquedaavanzada" value="buscar">

</form>
</div>
<div>

{foreach from=$servicios  item=servicio }

         <tr>
                <td scope="col container-md"> {$servicio->Servicios} </td>
                <td scope="col container-md"> {$servicio->Disponible} </td>
                <td scope="col container-md"> {$servicio->Precio}</td>
                <td scope="col container-md"> {$servicio->c_nombre}</td>
              <td scope="col container-md">  <a href="verproducto/{$servicio->id}" class="btn btn-primary ">Ver Producto</a> </td>

        </tr>

{/foreach}

</div>

<div class="container col-2">


</div>

{include file="templates/footer.tpl"}
<div class="container col-2 mt-5">
<a href="mostrarcategorias" class="btn btn-primary ">Volver</a>
</div>