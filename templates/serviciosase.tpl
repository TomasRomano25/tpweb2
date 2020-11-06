{include file="templates/header.tpl"}
{include file="templates/barradeserviciosedit.tpl"}


{foreach from=$servicios  item=servicio}
         <tr>
    <td scope="col container-md"> {$servicio->Servicios} </td>
    <td scope="col container-md"> {$servicio->Disponible} </td>
    <td scope="col container-md"> {$servicio->Precio}</td>
    <td> <a class="btn btn-danger" href='eliminarservicio/{$servicio->id}'> Eliminar </a> </td>
    <td> <a class="btn btn-danger" href='editarservicio/{$servicio->id}/'>  editar </a> </td>
 </tr>
{/foreach}
{include file="templates/footer.tpl"}