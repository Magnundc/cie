<?php
/* Smarty version 3.1.28, created on 2016-11-14 14:07:12
  from "/var/www/cie/application/modules/site/views/cursos/form.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5829e1306850c0_85301030',
  'file_dependency' => 
  array (
    '13727264de2699462c3847128b2031bda2a68590' => 
    array (
      0 => '/var/www/cie/application/modules/site/views/cursos/form.tpl',
      1 => 1479138962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5829e1306850c0_85301030 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '12088682275829e1306813d9_07642903';
?>

<form name="frm-cursos" method="post">
    <section class="oculta">
        <label for="id" class="upper">id:</label>
        <input type="text" ng-model="curso.id" id="id" readonly="readonly" class="short_field form-control" />
    </section>
    <section class="form-group">
        <label for="nome_curso" class="upper">nome curso:</label>
        <input type="text" ng-model="curso.nome_curso" class="form-control" id="nome_curso" autocomplete="off" maxlength="45" />
    </section>
    <section class="form-group">
        <label for="titulo" class="upper">titulo:</label>
        <input type="text" ng-model="curso.titulo" class="form-control" id="titulo" autocomplete="off" maxlength="45" />
    </section>
    <section class="form-group">
        <label for="atribuicoes" class="upper">atribuicoes:</label>
        <textarea ng-model="curso.atribuicoes" class="form-control" id="atribuicoes" ></textarea>
    </section>
    <section class="form-group">
        <label for="data_rec_mec" class="upper">data rec mec:</label>
        <input type="text" ng-model="curso.data_rec_mec" class="data medium_field form-control" id="data_rec_mec" />
    </section>
    <section class="form-group">
        <label for="data_deferimento" class="upper">data deferimento:</label>
        <input type="text" ng-model="curso.data_deferimento" class="data medium_field form-control" id="data_deferimento" />
    </section>
    <section class="form-group">
        <label for="nivel" class="upper">nivel:</label>
        <input type="text" ng-model="curso.nivel" class="form-control" id="nivel" autocomplete="off" maxlength="45" />
    </section>
    <section class="form-group">
        <label for="data_validade" class="upper">data validade:</label>
        <input type="text" ng-model="curso.data_validade" class="data medium_field form-control" id="data_validade" />
    </section>
    <section class="form-group">
        <label for="instituicao_id" class="upper">instituicao id:</label>
        <select ng-model="curso.instituicao_id" class="form-control" id="instituicao_id">
            <option ng-repeat="i in instituicoes" value="{{i.id}}">{{i.nome}}</option>
        </select>
    </section>
</form>

<?php }
}
