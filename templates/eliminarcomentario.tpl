{include file="templates/header.tpl"}
 </table> 
<form id="contenedor" class="container col-5 mt-5 text-center">

{foreach from=$comentarios item=comentario }

    <h4> ¿Estas seguro que quieres eliminar este comentario? </h4>
    <p >{$comentario->comentario}</p>
    
{/foreach}
<div class="d-lg-none" id="comentarioparaeliminar">{$comentario->id_comentarios}</div>
    
<input type='submit' value="si" id='eliminatecomentario' class='btn btn-danger'>
<a href="localhost/inicio" class='btn btn-danger'>no</a>

</form>









<script src="js/delete.js"></script>
{include file="templates/footer.tpl"}