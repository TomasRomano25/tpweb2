{include file="templates/header.tpl"}
{foreach from=$categorias  item=categoria}

<tr>

    <td scope="col container-md"> {$categoria->c_nombre} </td>
    <td> <a class="btn btn-danger" href='eliminarcategorias/{$categoria->id_categorias}/'> Eliminar </a> </td>
    <td> <a class="btn btn-danger" href='editarcategorias/{$categoria->id_categorias}/'>  editar </a> </td>
</tr>
{/foreach}
{include file="templates/footer.tpl"}