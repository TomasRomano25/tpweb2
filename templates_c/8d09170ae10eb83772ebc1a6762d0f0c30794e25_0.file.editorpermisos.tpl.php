<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-23 23:29:36
  from 'C:\xampp\htdocs\Inicio\templates\editorpermisos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbc37d0c2ad16_77849776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d09170ae10eb83772ebc1a6762d0f0c30794e25' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Inicio\\templates\\editorpermisos.tpl',
      1 => 1606170573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5fbc37d0c2ad16_77849776 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'usuario');
$_smarty_tpl->tpl_vars['usuario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
$_smarty_tpl->tpl_vars['usuario']->do_else = false;
?>
    <form action="modificarusuario" method="POST">

        <div class="d-flex justify-content-center ">
            <h3> ¿Que permiso te gustaria asignarle al usuario <?php echo $_smarty_tpl->tpl_vars['usuario']->value->usuario;?>
? </h3>
        </div>
        <div class="container col-5  ">

            <?php ob_start();
echo $_smarty_tpl->tpl_vars['usuario']->value->permiso;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 1) {?>
            <td class="bg-success border border-primary text-white text-center">
                <?php echo $_smarty_tpl->tpl_vars['usuario']->value->usuario;?>

                <?php } else { ?>
            <td class="bg-primary border text-white text-center">
                <?php echo $_smarty_tpl->tpl_vars['usuario']->value->usuario;?>

                <?php }?>
                <p>
                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['usuario']->value->permiso;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == 1) {?>
                    Administrador
                    <?php } else { ?>
                    Miembro
                    <?php }?>
                </p>
            </td>
            <td scope='col container-md'>
                <p> Cambiar a: </p>

                <?php ob_start();
echo $_smarty_tpl->tpl_vars['usuario']->value->permiso;
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == 1) {?>
                <select class="btn btn-danger" name='permisosusuario'>
<option value='0'>Miembro</option>
                    
                    
                </select>
                <?php } else { ?>
                <select class="btn btn-danger" name='permisosusuario'>
                     <option value='1'>Administrador</option>
                
                    
                </select>
                <?php }?>
            </td>
        </div>
        <div class="auto" id="auto" style="display: none">

            <input name="userid" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id;?>
">

        </div>

        <td><button type='submit' class='btn btn-danger' name='modificarservicio'>Modificar</button>
       
        <a   class='btn btn-primary' href="paneladministrador">Volver al Panel</a>
    </form>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
