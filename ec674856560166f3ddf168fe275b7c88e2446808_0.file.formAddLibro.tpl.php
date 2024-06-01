<?php
/* Smarty version 4.5.2, created on 2024-05-31 23:16:07
  from 'C:\xampp\htdocs\Proyectos\ProyectosWeb2\literatura\templates\formAddLibro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_665a3e179f5f13_32697317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec674856560166f3ddf168fe275b7c88e2446808' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\ProyectosWeb2\\literatura\\templates\\formAddLibro.tpl',
      1 => 1717186115,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inicio.tpl' => 1,
  ),
),false)) {
function content_665a3e179f5f13_32697317 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:inicio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form class="col-3 m-auto formAddLibro" action="insertLibro" method="POST">
    
      <legend class="text-center">Agregar libro</legend>
      <div class="mb-3">
        <label class="form-label">Nombre del libro</label>
        <input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre">
      </div>
      <div class="mb-3">
        <label class="form-label">Fecha de publicación </label>
        <input type="date" name="fecha" class="form-control" placeholder="Ingrese fecha">
      </div>
      <div class="mb-3">
        <label class="form-label">Descripción de género</label>
        <input type="text" name="genero" class="form-control" placeholder="Ingrese género">
      </div>
      <div class="mb-3">
        <label class="form-label">Precio del libro</label>
        <input type="number" name="precio" class="form-control" placeholder="Ingrese precio">
      </div>
      <div class="mb-3">
        <label class="form-label">Cantidad de páginas</label>
        <input type="number" name="paginas" class="form-control" placeholder="Ingrese cantidad de páginas">
      </div>
      <div class="mb-3">
        <label class="form-label">Autor</label>
        <select name="autor" id="">
          <option value="">1</option>
          <option value="">2</option>
          <option value="">3</option>
          <option value="">4</option>
          <option value="">5</option>
          </select>
      </div>
      
      <button type="submit" class="btn btn-primary col-12">Submit</button>
  </form>
    <?php }
}
