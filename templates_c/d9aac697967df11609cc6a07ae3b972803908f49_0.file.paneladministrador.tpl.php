<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-23 18:40:13
  from 'C:\xampp\htdocs\Inicio\templates\paneladministrador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbbf3fdcc91a8_96927742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9aac697967df11609cc6a07ae3b972803908f49' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Inicio\\templates\\paneladministrador.tpl',
      1 => 1606153161,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5fbbf3fdcc91a8_96927742 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div>

<div class="container m-2">
  <div class="row col-10">
    <div class="col-sm">
         <a class=" list-group-item list-group-item-action active " href="paneladministrador">Panel De Control</a>

        <a href="ingresarservicio" class="list-group-item list-group-item-action">Ingresar Servicio</a>
        <a href="ingresarcategoriapagina" class="list-group-item list-group-item-action">Ingresar Categoria</a>
        <a href="mostrarcategorias" class="list-group-item list-group-item-action">Mostrar Categorias</a>
        <a class=" list-group-item list-group-item-action active " href="paneladministrador">Edicion de Servicios</a>
        <a href="mostrarservicioseditareliminar" class="list-group-item list-group-item-action">
            Editar y Eliminar Servicios
        </a>
        <a href="editaryeliminarcategorias" class="list-group-item list-group-item-action">
            Editar y Eliminar Categorias
        </a>
        <a class=" list-group-item list-group-item-action active " href="paneladministrador">Edicion de Usuarios</a>
        <a href="editarusuariosadministrador" class="list-group-item list-group-item-action">
            Editar y eliminar usuarios
        </a>

        <a href="logout" class="list-group-item list-group-item-action">
            Logout
        </a>
    </div>
    <div class="col-sm text-aling:left">
       <h5 class="">
            ¡BIENVENIDO Al PANEL DE ADMINISTRADOR!
        </h5>

        <p>
        El panel de control web de su pagina le permite iniciar sesión en su cuenta desde cualquier computadora conectada a Internet de manera segura.
        </p> <p>
        Luego de configurarlo, los dispositivos Clover que agregue a su cuenta se sincronizarán automáticamente con el panel de control web.

Necesita un correo electrónico y una contraseña con privilegios de administrador para iniciar sesión en el panel de control web. 
        </p>
    </div>
     


<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
