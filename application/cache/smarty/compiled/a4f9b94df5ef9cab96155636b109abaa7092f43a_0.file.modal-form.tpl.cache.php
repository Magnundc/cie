<?php
/* Smarty version 3.1.28, created on 2016-11-18 16:47:00
  from "/var/www/cie/application/modules/site/views/listasegresso/modal-form.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_582f4ca4b12dc8_22570253',
  'file_dependency' => 
  array (
    'a4f9b94df5ef9cab96155636b109abaa7092f43a' => 
    array (
      0 => '/var/www/cie/application/modules/site/views/listasegresso/modal-form.tpl',
      1 => 1479138962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:listasegresso/form.tpl' => 1,
  ),
),false)) {
function content_582f4ca4b12dc8_22570253 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '57433585582f4ca4b0d5f2_88713986';
?>
<div class="modal fade" id="modal-form" tabindex="-1" role="dialog"  aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title"><i class="glyphicon glyphicon-pencil"></i> Cadastro</h4>
            </div>
            <div class="modal-body">
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:listasegresso/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
