<?php
/* Smarty version 3.1.28, created on 2016-11-18 16:46:59
  from "/var/www/cie/application/modules/site/views/cursos/modal-form.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_582f4ca3b2d186_03592815',
  'file_dependency' => 
  array (
    'f5d96906be0c49544c7ad1d3db96574f2d806ebc' => 
    array (
      0 => '/var/www/cie/application/modules/site/views/cursos/modal-form.tpl',
      1 => 1479138962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cursos/form.tpl' => 1,
  ),
),false)) {
function content_582f4ca3b2d186_03592815 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '944084508582f4ca3b28259_79157808';
?>
<div class="modal fade" id="modal-form" tabindex="-1" role="dialog"  aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title"><i class="glyphicon glyphicon-pencil"></i> Cadastro</h4>
            </div>
            <div class="modal-body">
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cursos/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
            <div class="modal-footer">
                <button ng-click="salvar()" class="btn btn-default"><i class="icon-ok"></i> Salvar</button>
            </div>
        </div>
    </div>
</div>
<?php }
}
