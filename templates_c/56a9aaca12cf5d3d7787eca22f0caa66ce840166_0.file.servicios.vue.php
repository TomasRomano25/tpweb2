<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-29 02:36:27
  from 'C:\xampp\htdocs\Inicio\templates\vue\servicios.vue' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc2fb1bc1c8a1_35253465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56a9aaca12cf5d3d7787eca22f0caa66ce840166' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Inicio\\templates\\vue\\servicios.vue',
      1 => 1606613784,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc2fb1bc1c8a1_35253465 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div id='vue-servicios'>

    <ul id="servicios-lista" class="list-group">

     <li
        v-for="services in service"
            class "list-group-item">
                {{service.Servicios}} - {{service.Disponible}} - {{service.Precio}} - {{service.categorias_id}}
                 </li>

    </ul>

</div>


<?php }
}
