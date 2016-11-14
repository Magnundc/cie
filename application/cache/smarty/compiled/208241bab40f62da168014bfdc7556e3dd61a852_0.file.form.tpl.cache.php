<?php
/* Smarty version 3.1.28, created on 2016-10-03 09:34:10
  from "/var/www/html/codeigniter/application/modules/admin/views/desktop/categorias/form.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57f25042ed7a87_47424974',
  'file_dependency' => 
  array (
    '208241bab40f62da168014bfdc7556e3dd61a852' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/admin/views/desktop/categorias/form.tpl',
      1 => 1475245696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57f25042ed7a87_47424974 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '98350672757f25042ecbc38_13822225';
?>
<form name="frm-categorias" method="post">
    <section class="oculta">
        <label for="id" class="upper">id:</label>
        <input type="text" ng-model="categoria.id" id="id" readonly="readonly" class="short_field form-control" />
    </section>
    <section class="form-group">
        <label for="nome" class="upper">nome:</label>
        <input type="text" ng-model="categoria.nome" class="form-control" id="nome" autocomplete="off" maxlength="45" />
    </section>
    <section class="form-group">
        <label for="tipo" class="upper">tipo:</label>
        <input type="text" ng-model="categoria.tipo" class="form-control" id="tipo" autocomplete="off" maxlength="1" />
    </section>
    <section class="form-group">
        <label for="usuario_id" class="upper">usuario id:</label>
        <select ng-model="categoria.usuario_id" class="form-control" id="usuario_id">
            <option ng-repeat="u in usuarios" value="{{u.id}}">{{u.nome}}</option>
        </select>
    </section>
</form>
<?php }
}
