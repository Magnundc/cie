<?php
/* Smarty version 3.1.28, created on 2016-11-24 15:09:36
  from "/var/www/cie/application/modules/site/views/grades/form.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_58371ed082f771_22798338',
  'file_dependency' => 
  array (
    'b5865c4df00697528f7dc3aa60e420b8fdc06997' => 
    array (
      0 => '/var/www/cie/application/modules/site/views/grades/form.tpl',
      1 => 1479138962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58371ed082f771_22798338 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '208531047958371ed082c1b5_67741093';
?>

<form name="frm-grades" method="post">
    <section class="oculta">
        <label for="id" class="upper">id:</label>
        <input type="text" ng-model="grade.id" id="id" readonly="readonly" class="short_field form-control" />
    </section>
    <section class="form-group">
        <label for="inicio" class="upper">inicio:</label>
        <input type="text" ng-model="grade.inicio" class="data medium_field form-control" id="inicio" />
    </section>
    <section class="form-group">
        <label for="fim" class="upper">fim:</label>
        <input type="text" ng-model="grade.fim" class="data medium_field form-control" id="fim" />
    </section>
    <section class="form-group">
        <label for="atribuicoes" class="upper">atribuicoes:</label>
        <textarea ng-model="grade.atribuicoes" class="form-control" id="atribuicoes" ></textarea>
    </section>
    <section class="form-group">
        <label for="cursos_id" class="upper">cursos id:</label>
        <select ng-model="grade.cursos_id" class="form-control" id="cursos_id">
            <option ng-repeat="c in cursos" value="{{c.id}}">{{c.nome_curso}}</option>
        </select>
    </section>
    <section class="form-group">
        <label for="processo_def" class="upper">processo def:</label>
        <input type="text" ng-model="grade.processo_def" class="form-control" id="processo_def" autocomplete="off" maxlength="45" />
    </section>
    <section class="form-group">
        <label for="decisao" class="upper">decisao:</label>
        <input type="text" ng-model="grade.decisao" class="form-control" id="decisao" autocomplete="off" maxlength="45" />
    </section>
</form>

<?php }
}
