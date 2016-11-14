<?php
/* Smarty version 3.1.28, created on 2016-10-03 14:40:05
  from "/var/www/html/codeigniter/application/modules/site/views/categorias/form.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57f297f5585b76_44221132',
  'file_dependency' => 
  array (
    'c0bb45c59c38eea28d8a4468031e2f9984a1c777' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/site/views/categorias/form.tpl',
      1 => 1475516036,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57f297f5585b76_44221132 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '36932922057f297f5582bc5_53429471';
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
