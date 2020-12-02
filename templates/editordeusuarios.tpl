{include file="templates/header.tpl"}
<div class="d-flex justify-content-center ">
<h1 >Administrador De Usuarios</h1>
</div>
<div class="d-flex justify-content-center ">

<p class="bg-success  text-white border border-dark p-1 mr-2" >Administradores </p>
<p class="bg-primary text-white border border-dark  p-1">miembros </p>

</div>
{foreach from=$users  item=usuario}
<div class="container mt-4">
<tr>
 {if {$usuario->permiso} eq 1}
    <td scope="col container-md " class="bg-success  text-white border border-dark"> {$usuario->usuario} 
    <p>Administrador</p></td>
    {else}
<td scope="col container-md " class="bg-primary text-white border border-dark"> {$usuario->usuario} <p>Miembro</p>
</td>

{/if}
    <form action="modificarservicio" method="POST">

    
    <td> <a class="btn btn-warning border border-dark" href='editarusuarios/{$usuario->id}/'> Editar Permisos </a> </td>
    <td> <a class="btn btn-danger border border-dark" href='eliminarusuarios/{$usuario->id}/'> Eliminar </a> </td>
  



</tr>
{/foreach}
</div>
{include file="templates/footer.tpl"}