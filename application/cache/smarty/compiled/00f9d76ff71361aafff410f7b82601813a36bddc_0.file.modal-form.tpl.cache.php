<?php
/* Smarty version 3.1.28, created on 2016-10-03 09:34:10
  from "/var/www/html/codeigniter/application/modules/admin/views/desktop/categorias/modal-form.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57f25042ec6ce5_11468604',
  'file_dependency' => 
  array (
    '00f9d76ff71361aafff410f7b82601813a36bddc' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/admin/views/desktop/categorias/modal-form.tpl',
      1 => 1475245696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:desktop/categorias/form.tpl' => 1,
  ),
),false)) {
function content_57f25042ec6ce5_11468604 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '148583793157f25042e7ae82_51515434';
?>
<div class="modal fade" id="modal-form" tabindex="-1" role="dialog"  aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title"><i class="glyphicon glyphicon-pencil"></i> Cadastro</h4>
            </div>
            <div class="modal-body">
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:desktop/categorias/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
