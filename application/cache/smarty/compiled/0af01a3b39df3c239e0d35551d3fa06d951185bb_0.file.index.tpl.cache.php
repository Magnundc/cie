<?php
/* Smarty version 3.1.28, created on 2016-11-14 14:40:31
  from "/var/www/cie/application/modules/site/views/contatos/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5829e8ff9e1cf2_49115169',
  'file_dependency' => 
  array (
    '0af01a3b39df3c239e0d35551d3fa06d951185bb' => 
    array (
      0 => '/var/www/cie/application/modules/site/views/contatos/index.tpl',
      1 => 1479140609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/template.tpl' => 1,
    'file:contatos/modal-form.tpl' => 1,
    'file:contatos/modal-delete.tpl' => 1,
    'file:contatos/lista.tpl' => 1,
    'file:layout/pagination.tpl' => 1,
  ),
),false)) {
function content_5829e8ff9e1cf2_49115169 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '354315015829e8ff9a27e6_74712888';
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "conteudo", array (
  0 => 'block_18018112705829e8ff9d0338_17340421',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/template.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'conteudo'}  file:application/modules/site/views/contatos/index.tpl */
function block_18018112705829e8ff9d0338_17340421($_smarty_tpl, $_blockParentStack) {
?>

    <div class="row" ng-controller="ContatosController">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:contatos/modal-form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:contatos/modal-delete.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">Contatos</h1>
            </div>
            <div class="container">
	<div class="row">
		
           <div id="custom-search-input">
                            <div class="input-group col-md-12">
                                <input type="text" class="  search-query form-control" placeholder="Para pesquisar digite um dado do contato" />
                                <span class="input-group-btn">
                                    <button class="btn" type="button">
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                        </div>
	</div>
            <div class="panel-body table-container">
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:contatos/lista.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
            <div class="panel-footer table-container">
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
        </div>
    </div>
    <?php echo '<script'; ?>
 src="<?php echo base_url;?>
/public/js/modules/site/contatos/index.js"><?php echo '</script'; ?>
>
<?php
}
/* {/block 'conteudo'} */
}
