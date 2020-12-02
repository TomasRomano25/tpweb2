
{include file="templates/header.tpl"}


    {foreach from=$users item=usuario}
    <form action="modificarusuario" method="POST">

        <div class="d-flex justify-content-center ">
            <h3> ¿Que permiso te gustaria asignarle al usuario {$usuario->usuario}? </h3>
        </div>
        <div class="container col-5  ">

            {if {$usuario->permiso} eq 1}
            <td class="bg-success border border-primary text-white text-center">
                {$usuario->usuario}
                {else}
            <td class="bg-primary border text-white text-center">
                {$usuario->usuario}
                {/if}
                <p>
                    {if {$usuario->permiso} eq 1}
                    Administrador
                    {else}
                    Miembro
                    {/if}
                </p>
            </td>
            <td scope='col container-md'>
                <p> Cambiar a: </p>

                {if {$usuario->permiso} eq 1}
                <select class="btn btn-danger" name='permisosusuario'>
<option value='0'>Miembro</option>
                    
                    
                </select>
                {else}
                <select class="btn btn-danger" name='permisosusuario'>
                     <option value='1'>Administrador</option>
                
                    
                </select>
                {/if}
            </td>
        </div>
        <div class="auto" id="auto" style="display: none">

            <input name="userid" value="{$usuario->id}">

        </div>

        <td><button type='submit' class='btn btn-danger' name='modificarservicio'>Modificar</button>
       
        <a   class='btn btn-primary' href="paneladministrador">Volver al Panel</a>
    </form>
    {/foreach}


{include file="templates/footer.tpl"}
