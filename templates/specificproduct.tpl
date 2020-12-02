   {include file="templates/header.tpl"}
    
    
        {foreach from=$servicios item=servicio }
        <tr>
            <td scope="col container-md"> {$servicio->Servicios} </td>
            <td scope="col container-md"> {$servicio->Disponible} </td>
            <td scope="col container-md"> {$servicio->Precio}</td>
            <td scope="col container-md"> {$servicio->c_nombre}</td>

        </tr>
        {/foreach}
    

    </table>


    <div class="d-lg-none" id='detallesdelproducto'>
        {$servicio->id}
    </div>
    <p class="d-lg-none" id='usuariologeado'>{$user}</p>
     
     <form class="container col-3 mt-1">


            <h2>deja un comentario:</h2>
            <input type="text" id="comentario-enviado" maxlength="350" value="" />
            <p>deja un puntaje del 1 al 5</p>
            <input type="number"min="0" max="5" id="estrellitas" maxlength="350" value="0" />
         
            
            <input type="submit"  id="cargar-comentario" class='btn btn-danger'>
        </form>
        <div class="mt-5">
   {include file="templates/comentarios.tpl"}
        
         </div>   
        <script src="js/servicios.js"></script>
        {include file="templates/footercopia.tpl"}
