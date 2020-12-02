
{include file="templates/headereditar.tpl"}


{foreach from=$servicios item=servicio}
<form action="modificarservicio" method="POST">
       
    <tr>

        <td scope='col container-md '> <input type='number' name='id' value='{$servicio->id}'readonly ></td>
        <td scope='col container-md'> <input type='text' name='ingresarservicio' value='{$servicio->Servicios}'></td>
        <td scope='col container-md'>
            <select name='ingresardisponibilidad'>
                 <option value='SI'>SI</option>
                 <option value='NO'>NO</option>
            </select>
        </td>

        <td scope='col container-md'> <input type='text' name='ingresarprecio' value='{$servicio->Precio}'></td>
       
         <td scope='col container-md'>
         
        <select name='ingresararea'>
{foreach from=$categorias item=categoria}
   <option value="{$categoria->id_categorias}">{$categoria->c_nombre}</option>
 {/foreach}
</select>
        <td><button type='submit' class='btn btn-danger' name='modificarservicio'>Modificar</button></td>
    </tr>
</form>
{/foreach}</td>
{include file="templates/footer.tpl" }
    
    