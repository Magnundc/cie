<?php
/* Smarty version 3.1.28, created on 2016-10-03 09:34:10
  from "/var/www/html/codeigniter/application/modules/admin/views/desktop/categorias/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57f25042de46d5_86005139',
  'file_dependency' => 
  array (
    '6b4d2d146a1e6861572a23fc29226e97f324ab36' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/admin/views/desktop/categorias/index.tpl',
      1 => 1475258626,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:desktop/layout/layout.tpl' => 1,
    'file:desktop/categorias/modal-form.tpl' => 1,
    'file:desktop/categorias/modal-delete.tpl' => 1,
    'file:desktop/categorias/lista.tpl' => 1,
    'file:layout/pagination.tpl' => 1,
  ),
),false)) {
function content_57f25042de46d5_86005139 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '103841404757f25042c9af75_87891817';
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "conteudo", array (
  0 => 'block_93699371557f25042dcc5d8_23352764',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:desktop/layout/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'conteudo'}  file:application/modules/admin/views/desktop/categorias/index.tpl */
function block_93699371557f25042dcc5d8_23352764($_smarty_tpl, $_blockParentStack) {
?>

    <div class="row" ng-controller="CategoriasController">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:desktop/categorias/modal-form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:desktop/categorias/modal-delete.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">Título</h1>
            </div>
            <div class="panel-body table-container">
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:desktop/categorias/lista.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
            <div class="panel-footer"><?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
        </div>
    </div>
    <?php echo '<script'; ?>
 src="<?php echo base_url;?>
/public/js/modules/admin/categorias/index.js"><?php echo '</script'; ?>
>
<?php
}
/* {/block 'conteudo'} */
}
