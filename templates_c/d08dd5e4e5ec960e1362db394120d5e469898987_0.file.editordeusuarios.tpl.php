<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-24 00:45:37
  from 'C:\xampp\htdocs\Inicio\templates\editordeusuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbc49a165dd26_02402230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd08dd5e4e5ec960e1362db394120d5e469898987' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Inicio\\templates\\editordeusuarios.tpl',
      1 => 1606175130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5fbc49a165dd26_02402230 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="d-flex justify-content-center ">
<h1 >Administrador De Usuarios</h1>
</div>
<div class="d-flex justify-content-center ">

<p class="bg-success  text-white border border-dark p-1 mr-2" >Administradores </p>
<p class="bg-primary text-white border border-dark  p-1">miembros </p>

</div>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'usuario');
$_smarty_tpl->tpl_vars['usuario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
$_smarty_tpl->tpl_vars['usuario']->do_else = false;
?>
<div class="container mt-4">
<tr>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['usuario']->value->permiso;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 1) {?>
    <td scope="col container-md " class="bg-success  text-white border border-dark"> <?php echo $_smarty_tpl->tpl_vars['usuario']->value->usuario;?>
 
    <p>Administrador</p></td>
    <?php } else { ?>
<td scope="col container-md " class="bg-primary text-white border border-dark"> <?php echo $_smarty_tpl->tpl_vars['usuario']->value->usuario;?>
 <p>Miembro</p>
</td>

<?php }?>
    <form action="modificarservicio" method="POST">

    
    <td> <a class="btn btn-warning border border-dark" href='editarusuarios/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id;?>
/'> Editar Permisos </a> </td>
    <td> <a class="btn btn-danger border border-dark" href='eliminarusuarios/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id;?>
/'> Eliminar </a> </td>
  



</tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
