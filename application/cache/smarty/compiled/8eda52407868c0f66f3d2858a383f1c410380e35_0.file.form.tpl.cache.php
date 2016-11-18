<?php
/* Smarty version 3.1.28, created on 2016-11-18 17:01:23
  from "/var/www/cie/application/modules/site/views/contatos/form.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_582f5003239f54_19917262',
  'file_dependency' => 
  array (
    '8eda52407868c0f66f3d2858a383f1c410380e35' => 
    array (
      0 => '/var/www/cie/application/modules/site/views/contatos/form.tpl',
      1 => 1479138962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_582f5003239f54_19917262 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '593304396582f5003236c30_28849103';
?>

<form name="frm-contatos" method="post">
    <section class="oculta">
        <label for="idcontatos" class="upper">idcontatos:</label>
        <input type="text" ng-model="contato.idcontatos" id="idcontatos" readonly="readonly" class="short_field form-control" />
    </section>
    <section class="form-group">
        <label for="nome_contato" class="upper">nome contato:</label>
        <input type="text" ng-model="contato.nome_contato" class="form-control" id="nome_contato" autocomplete="off" maxlength="45" />
    </section>
    <section class="form-group">
        <label for="cargo_contato" class="upper">cargo contato:</label>
        <input type="text" ng-model="contato.cargo_contato" class="form-control" id="cargo_contato" autocomplete="off" maxlength="45" />
    </section>
    <section class="form-group">
        <label for="email_contato" class="upper">email contato:</label>
        <input type="text" ng-model="contato.email_contato" class="form-control" id="email_contato" autocomplete="off" maxlength="45" />
    </section>
    <section class="form-group">
        <label for="instituicoes_id" class="upper">instituicoes id:</label>
        <select ng-model="contato.instituicoes_id" class="form-control" id="instituicoes_id">
            <option ng-repeat="i in instituicoes" value="{{i.id}}">{{i.nome}}</option>
        </select>
    </section>
</form>

<?php }
}
