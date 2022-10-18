<?php
/* Smarty version 4.2.1, created on 2022-10-18 01:51:07
  from 'C:\xampp\htdocs\proyecto\templates\pelilist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dea6b09aa31_12710204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6401cc38b356b47744d01f85a93db7eba3b94f5f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto\\templates\\pelilist.tpl',
      1 => 1666050656,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634dea6b09aa31_12710204 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form action="agregar" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Pelicula</label>
                <input name="nombre" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label>director</label>
            <input name="director" type="text" class="form-control">
        </div>
        <div class="form-group">
                <label>duracion</label>
                <input name="duracion" type="float" class="form-control">
        </div>
        

        <div class="col-3">
            <div class="form-group">
                <label>streaming</label>
                <select name="priority" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
        </div>
    </div>

    <button type="submit"  class="btn btn-primary mt-2">Guardar</button>
</form>

<ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['peliculas']->value, 'pelicula');
$_smarty_tpl->tpl_vars['pelicula']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pelicula']->value) {
$_smarty_tpl->tpl_vars['pelicula']->do_else = false;
?>
        <li class='
                list-group-item d-flex justify-content-between align-items-center
                <?php if ($_smarty_tpl->tpl_vars['pelicula']->value->streaming_fk) {?> streaming_fk <?php }?>
            '>
            <span> <b><?php echo $_smarty_tpl->tpl_vars['pelicula']->value->nombre;?>
</b> - <?php echo $_smarty_tpl->tpl_vars['pelicula']->value->director;?>
 (<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->duracion;?>
) </span>
            <div class="ml-auto">
            <?php if (!$_smarty_tpl->tpl_vars['pelicula']->value->streaming_fk) {?>
                <a href='finalize/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->id_peliculas;?>
' type='button' class='btn btn-success'>Finalizar</a>
            <?php }?>
            <a href='delete/<?php echo $_smarty_tpl->tpl_vars['pelicula']->value->id_peliculas;?>
' type='button' class='btn btn-danger'>Borrar</a>
        </div>

        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<p class="mt-3"><small>Mostrando <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 pelicula</small></p>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
