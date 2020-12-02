<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-06 17:15:10
  from 'C:\xampp\htdocs\Inicio\templates\headereditar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa5768eb85294_78063165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1653e997a82f53bfca96a8fceef6d77df736d3a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Inicio\\templates\\headereditar.tpl',
      1 => 1604642156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa5768eb85294_78063165 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <a href="router.php"></a>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="/inicio/css/bootstrap.min.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-light container-md" style="background-color: red;">
            <div class="container"> 
                    <a name="servicios" class="navbar-brand "  style="color: white;" href="/Inicio/servicios"> Inicio</a>
                    <a class="navbar-brand "  style="color: white;"  href="/Inicio/login"> Conectarse </a>
                    <a class="navbar-brand"  style="color: white;" href="/Inicio/paneladministrador"> Administrar Cuenta</a>
        </nav>
    </header>
    <table class="table container-md">
    <thead>
<tr>
<th scope="col"> id </th>
<th scope="col"> Servicio </th>
<th scope="col"> Disponibilidad </th>
<th scope="col"> Precio </th>
<th scope="col"> Area </th>
</tr>
</thead><?php }
}
