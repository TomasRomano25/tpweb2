<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-02 15:05:57
  from 'C:\xampp\htdocs\Inicio\templates\specificproduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc79f45dbe036_41580975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8476bd11d7baac90135d7573f7728dec9229426' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Inicio\\templates\\specificproduct.tpl',
      1 => 1606917946,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/comentarios.tpl' => 1,
    'file:templates/footercopia.tpl' => 1,
  ),
),false)) {
function content_5fc79f45dbe036_41580975 (Smarty_Internal_Template $_smarty_tpl) {
?>   <?php $_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['servicios']->value, 'servicio');
$_smarty_tpl->tpl_vars['servicio']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['servicio']->value) {
$_smarty_tpl->tpl_vars['servicio']->do_else = false;
?>
        <tr>
            <td scope="col container-md"> <?php echo $_smarty_tpl->tpl_vars['servicio']->value->Servicios;?>
 </td>
            <td scope="col container-md"> <?php echo $_smarty_tpl->tpl_vars['servicio']->value->Disponible;?>
 </td>
            <td scope="col container-md"> <?php echo $_smarty_tpl->tpl_vars['servicio']->value->Precio;?>
</td>
            <td scope="col container-md"> <?php echo $_smarty_tpl->tpl_vars['servicio']->value->c_nombre;?>
</td>

        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    

    </table>


    <div class="d-lg-none" id='detallesdelproducto'>
        <?php echo $_smarty_tpl->tpl_vars['servicio']->value->id;?>

    </div>
    <p class="d-lg-none" id='usuariologeado'><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</p>
     
     <form class="container col-3 mt-1">


            <h2>deja un comentario:</h2>
            <input type="text" id="comentario-enviado" maxlength="350" value="" />
            <p>deja un puntaje del 1 al 5</p>
            <input type="number"min="0" max="5" id="estrellitas" maxlength="350" value="0" />
         
            
            <input type="submit"  id="cargar-comentario" class='btn btn-danger'>
        </form>
        <div class="mt-5">
   <?php $_smarty_tpl->_subTemplateRender("file:templates/comentarios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        
         </div>   
        <?php echo '<script'; ?>
 src="js/servicios.js"><?php echo '</script'; ?>
>
        <?php $_smarty_tpl->_subTemplateRender("file:templates/footercopia.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
