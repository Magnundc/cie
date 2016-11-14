<?php
/* Smarty version 3.1.28, created on 2016-11-14 14:07:12
  from "/var/www/cie/application/modules/site/views/cursos/modal-delete.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5829e130689c78_71200107',
  'file_dependency' => 
  array (
    '7d698e6b69464311a05c8decb10fa960e0227569' => 
    array (
      0 => '/var/www/cie/application/modules/site/views/cursos/modal-delete.tpl',
      1 => 1479138962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5829e130689c78_71200107 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '11878224805829e130686f41_38126026';
?>
<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog"  aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title"><i class="glyphicon glyphicon-question-sign"></i> Confirmação de segurança</h4>
            </div>
            <div class="modal-body">
                <p>Atenção!</p><p>&nbsp;</p> <p>Esta operação não poderá ser desfeita, confirma a exclusão desse registro?</p>
            </div>
            <div class="modal-footer">
                <button ng-click="delete()" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> Sim</button>
                <button data-dismiss="modal" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Não</button>
            </div>
        </div>
    </div>
</div>
<?php }
}
