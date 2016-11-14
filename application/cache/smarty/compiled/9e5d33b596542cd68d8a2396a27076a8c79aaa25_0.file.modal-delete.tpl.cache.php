<?php
/* Smarty version 3.1.28, created on 2016-10-03 14:40:05
  from "/var/www/html/codeigniter/application/modules/site/views/categorias/modal-delete.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57f297f558b412_19297771',
  'file_dependency' => 
  array (
    '9e5d33b596542cd68d8a2396a27076a8c79aaa25' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/site/views/categorias/modal-delete.tpl',
      1 => 1475516036,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57f297f558b412_19297771 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '143053478557f297f5587e56_63147078';
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
