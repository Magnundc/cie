<?php
/* Smarty version 3.1.28, created on 2016-11-14 14:07:14
  from "/var/www/cie/application/modules/site/views/instituicoes/modal-form.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5829e1320f1286_57396733',
  'file_dependency' => 
  array (
    'b83838ebd2240e4b5344b1d220243efd7c7a3be1' => 
    array (
      0 => '/var/www/cie/application/modules/site/views/instituicoes/modal-form.tpl',
      1 => 1479138962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:instituicoes/form.tpl' => 1,
  ),
),false)) {
function content_5829e1320f1286_57396733 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '11836417565829e1320ebfd8_89726206';
?>
<div class="modal fade" id="modal-form" tabindex="-1" role="dialog"  aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title"><i class="glyphicon glyphicon-pencil"></i> Cadastro</h4>
            </div>
            <div class="modal-body">
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:instituicoes/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
