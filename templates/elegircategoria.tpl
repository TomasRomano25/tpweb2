{include file="templates/header.tpl"}
<div class="container mt-5">
{foreach from=$categorias  item=categoria}
<tr>
    <a href="servicio/{$categoria->id_categorias}" class="list-group-item list-group-item-action container-md">{$categoria->c_nombre}</a>
</tr>
{/foreach}
</div>
<div class="container col-2 mt-5">
<a href="servicios" class="btn btn-primary ">Volver</a>
</div>
{include file="templates/footer.tpl"}