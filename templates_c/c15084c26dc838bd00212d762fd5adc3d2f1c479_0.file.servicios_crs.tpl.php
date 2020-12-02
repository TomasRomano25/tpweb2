<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-29 02:49:58
  from 'C:\xampp\htdocs\Inicio\templates\servicios_crs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc2fe46b41c06_40124531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c15084c26dc838bd00212d762fd5adc3d2f1c479' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Inicio\\templates\\servicios_crs.tpl',
      1 => 1606614590,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:crearservicio.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5fc2fe46b41c06_40124531 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="container">
        <div class="row">
            <div class="co-md-2">



                <?php $_smarty_tpl->_subTemplateRender("file:crearservicio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


            </div>
            <div class="co-md-4">
               <ul id="servicios-lista" class="list-group">


                </ul>

            </div>



        </div>

<!--- incluyo JS --->
 <?php echo '<script'; ?>
 src= "js/servicios.js"><?php echo '</script'; ?>
>
 <?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }
}
