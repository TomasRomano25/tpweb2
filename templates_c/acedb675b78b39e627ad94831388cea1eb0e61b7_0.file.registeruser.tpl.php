<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-22 19:08:28
  from 'C:\xampp\htdocs\Inicio\templates\registeruser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbaa91cb0a288_83201025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acedb675b78b39e627ad94831388cea1eb0e61b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Inicio\\templates\\registeruser.tpl',
      1 => 1606068273,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5fbaa91cb0a288_83201025 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container col-4 mt-5">

        <form action="insertarusuarios" method="POST">

            <div class="form-group">
                <h1> CREAR CUENTA </h1>
            </div>
            <div class="form-group">
                <p>Nombre de usuario</p>
            <input type="text" name="insertarusuario">
            </div>
            <div class="form-group ">
                <p>Email</p>
                <input type="email" name="insertaremail">
            </div>
            <div class="form-group ">
                <p>Contraseña</p>
                <input type="password" name="insertarcontraseña">
            </div>

        <button type="submit" class="btn btn-primary" >Crear</button>
        </form>
 
        
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }
}
