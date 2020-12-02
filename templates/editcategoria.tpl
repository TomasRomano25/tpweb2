{include file="templates/header.tpl"}
 <h1 > EDITAR CATEGORIAS </h1>
{foreach from=$categorias item=categoria}
<form action="modificarCategorias" method="POST">
    <tr>
        <td scope='col container-md '> <input type='number' name='id' value='{$categoria->id_categorias}'readonly></td>
        <td scope='col container-md'> <input type='text' name='ingresarnombre' value='{$categoria->c_nombre}'></td>
        <td><button type='submit' class='btn btn-danger'>Modificar</button></td>
    </tr>
</form>
{/foreach}
{include file="templates/footer.tpl" }
    
    