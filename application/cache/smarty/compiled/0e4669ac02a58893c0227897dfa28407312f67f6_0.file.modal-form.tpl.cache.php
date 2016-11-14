<?php
/* Smarty version 3.1.28, created on 2016-10-03 15:26:23
  from "/var/www/html/codeigniter/application/modules/site/views/contas/modal-form.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57f2a2cf07c9c8_20250159',
  'file_dependency' => 
  array (
    '0e4669ac02a58893c0227897dfa28407312f67f6' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/site/views/contas/modal-form.tpl',
      1 => 1475519178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:contas/form.tpl' => 1,
  ),
),false)) {
function content_57f2a2cf07c9c8_20250159 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '204879184257f2a2cf0770b2_34843446';
?>
<div class="modal fade" id="modal-form" tabindex="-1" role="dialog"  aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title"><i class="glyphicon glyphicon-pencil"></i> Cadastro</h4>
            </div>
            <div class="modal-body">
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:contas/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
