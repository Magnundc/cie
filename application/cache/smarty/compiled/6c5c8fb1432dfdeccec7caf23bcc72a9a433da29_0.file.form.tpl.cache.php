<?php
/* Smarty version 3.1.28, created on 2016-11-24 15:09:37
  from "/var/www/cie/application/modules/site/views/listasegresso/form.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_58371ed10b8875_04801821',
  'file_dependency' => 
  array (
    '6c5c8fb1432dfdeccec7caf23bcc72a9a433da29' => 
    array (
      0 => '/var/www/cie/application/modules/site/views/listasegresso/form.tpl',
      1 => 1479138962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58371ed10b8875_04801821 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '107259518558371ed10b56a1_23516214';
?>

<form name="frm-listasegresso" method="post">
    <section class="oculta">
        <label for="id" class="upper">id:</label>
        <input type="text" ng-model="listasegress.id" id="id" readonly="readonly" class="short_field form-control" />
    </section>
    <section class="form-group">
        <label for="nome_egresso" class="upper">nome egresso:</label>
        <input type="text" ng-model="listasegress.nome_egresso" class="form-control" id="nome_egresso" autocomplete="off" maxlength="45" />
    </section>
    <section class="form-group">
        <label for="cpf" class="upper">cpf:</label>
        <input type="text" ng-model="listasegress.cpf" class="form-control" id="cpf" autocomplete="off" maxlength="45" />
    </section>
    <section class="form-group">
        <label for="colacao" class="upper">colacao:</label>
        <input type="text" ng-model="listasegress.colacao" class="data medium_field form-control" id="colacao" />
    </section>
    <section class="form-group">
        <label for="cursos_id" class="upper">cursos id:</label>
        <select ng-model="listasegress.cursos_id" class="form-control" id="cursos_id">
            <option ng-repeat="c in cursos" value="{{c.id}}">{{c.nome_curso}}</option>
        </select>
    </section>
</form>

<?php }
}
