{include file="templates/header.tpl"}
{include file="templates/barradeservicios.tpl"}
<div class="container mt-5">

{foreach from=$categorias  item=categoria}

<tr>
    <td scope="col container-md"> {$categoria->Servicios}</td>
    <td scope="col container-md"> {$categoria->Disponible} </td>
    <td scope="col container-md"> {$categoria->Precio}</td>
    <td scope="col container-md"> {$categoria->c_nombre}</td>
    <p>dd
</tr>


{/foreach}
</div>
{include file="templates/footer.tpl"}