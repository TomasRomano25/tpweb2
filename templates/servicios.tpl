{include file="templates/header.tpl"}
{include file="templates/barradeservicios.tpl"}
<div>

{foreach from=$servicios  item=servicio }

         <tr>
    <td scope="col container-md"> {$servicio->Servicios} </td>
    <td scope="col container-md"> {$servicio->Disponible} </td>
    <td scope="col container-md"> {$servicio->Precio}</td>
     <td scope="col container-md"> {$servicio->c_nombre}</td>

        </tr>

{/foreach}

</div>

<div class="container col-2">


</div>

{include file="templates/footer.tpl"}
<div class="container col-2 mt-5">
<a href="mostrarcategorias" class="btn btn-primary ">Volver</a>
</div>