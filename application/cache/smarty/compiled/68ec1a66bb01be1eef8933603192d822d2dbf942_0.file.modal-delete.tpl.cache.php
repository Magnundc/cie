<?php
/* Smarty version 3.1.28, created on 2016-11-24 15:09:37
  from "/var/www/cie/application/modules/site/views/listasegresso/modal-delete.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_58371ed10bd015_58516373',
  'file_dependency' => 
  array (
    '68ec1a66bb01be1eef8933603192d822d2dbf942' => 
    array (
      0 => '/var/www/cie/application/modules/site/views/listasegresso/modal-delete.tpl',
      1 => 1479138962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58371ed10bd015_58516373 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '64387103758371ed10ba5a6_66775608';
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
