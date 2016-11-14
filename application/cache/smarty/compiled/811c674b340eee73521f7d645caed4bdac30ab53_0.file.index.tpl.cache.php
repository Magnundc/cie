<?php
/* Smarty version 3.1.28, created on 2016-11-14 14:40:33
  from "/var/www/cie/application/modules/site/views/listasegresso/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5829e9011991c3_07113321',
  'file_dependency' => 
  array (
    '811c674b340eee73521f7d645caed4bdac30ab53' => 
    array (
      0 => '/var/www/cie/application/modules/site/views/listasegresso/index.tpl',
      1 => 1479140868,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/template.tpl' => 1,
    'file:listasegresso/modal-form.tpl' => 1,
    'file:listasegresso/modal-delete.tpl' => 1,
    'file:listasegresso/lista.tpl' => 1,
    'file:layout/pagination.tpl' => 1,
  ),
),false)) {
function content_5829e9011991c3_07113321 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '19072672125829e901156899_23997993';
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "conteudo", array (
  0 => 'block_894496715829e901186e34_26447150',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/template.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'conteudo'}  file:application/modules/site/views/listasegresso/index.tpl */
function block_894496715829e901186e34_26447150($_smarty_tpl, $_blockParentStack) {
?>

    <div class="row" ng-controller="ListasegressoController">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:listasegresso/modal-form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:listasegresso/modal-delete.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">Listas de Egressos</h1>
            </div>
            
            <div class="container">
                <div class="row">
		<div id="custom-search-input">
                            <div class="input-group col-md-12">
                                <input type="text" class="  search-query form-control" placeholder="Para pesquisar digite um dado do egresso" />
                                <span class="input-group-btn">
                                    <button class="btn" type="button">
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                        </div>
                </div>
            </div>
            
            <div class="panel-body table-container">
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:listasegresso/lista.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
/public/js/modules/site/listasegresso/index.js"><?php echo '</script'; ?>
>
<?php
}
/* {/block 'conteudo'} */
}
