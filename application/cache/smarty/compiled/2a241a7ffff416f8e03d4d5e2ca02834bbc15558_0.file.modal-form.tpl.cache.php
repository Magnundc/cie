<?php
/* Smarty version 3.1.28, created on 2016-11-24 15:09:35
  from "/var/www/cie/application/modules/site/views/contatos/modal-form.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_58371ecf44c9d0_77796405',
  'file_dependency' => 
  array (
    '2a241a7ffff416f8e03d4d5e2ca02834bbc15558' => 
    array (
      0 => '/var/www/cie/application/modules/site/views/contatos/modal-form.tpl',
      1 => 1479138962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:contatos/form.tpl' => 1,
  ),
),false)) {
function content_58371ecf44c9d0_77796405 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '33863774258371ecf447a97_83923614';
?>
<div class="modal fade" id="modal-form" tabindex="-1" role="dialog"  aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title"><i class="glyphicon glyphicon-pencil"></i> Cadastro</h4>
            </div>
            <div class="modal-body">
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:contatos/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
