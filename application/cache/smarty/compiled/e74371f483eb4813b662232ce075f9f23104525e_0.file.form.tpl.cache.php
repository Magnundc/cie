<?php
/* Smarty version 3.1.28, created on 2016-10-03 15:26:23
  from "/var/www/html/codeigniter/application/modules/site/views/contas/form.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57f2a2cf081cb4_28582895',
  'file_dependency' => 
  array (
    'e74371f483eb4813b662232ce075f9f23104525e' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/site/views/contas/form.tpl',
      1 => 1475519178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57f2a2cf081cb4_28582895 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '40828884457f2a2cf07f297_92176326';
?>

<form name="frm-contas" method="post">
    <section class="oculta">
        <label for="id" class="upper">id:</label>
        <input type="text" ng-model="conta.id" id="id" readonly="readonly" class="short_field form-control" />
    </section>
    <section class="form-group">
        <label for="codigo" class="upper">codigo:</label>
        <input type="text" ng-model="conta.codigo" class="form-control" id="codigo" autocomplete="off" maxlength="45" />
    </section>
    <section class="form-group">
        <label for="conta" class="upper">conta:</label>
        <input type="text" ng-model="conta.conta" class="form-control" id="conta" autocomplete="off" maxlength="45" />
    </section>
</form>

<?php }
}
