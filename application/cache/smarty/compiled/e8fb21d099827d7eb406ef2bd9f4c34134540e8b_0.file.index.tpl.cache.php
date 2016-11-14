<?php
/* Smarty version 3.1.28, created on 2016-11-14 14:53:19
  from "/var/www/cie/application/modules/site/views/instituicoes/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5829ebffe47645_01615129',
  'file_dependency' => 
  array (
    'e8fb21d099827d7eb406ef2bd9f4c34134540e8b' => 
    array (
      0 => '/var/www/cie/application/modules/site/views/instituicoes/index.tpl',
      1 => 1479140737,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/template.tpl' => 1,
    'file:instituicoes/modal-form.tpl' => 1,
    'file:instituicoes/modal-delete.tpl' => 1,
    'file:instituicoes/lista.tpl' => 1,
    'file:layout/pagination.tpl' => 1,
  ),
),false)) {
function content_5829ebffe47645_01615129 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '20382176305829ebffe064a6_47746292';
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "conteudo", array (
  0 => 'block_10302493025829ebffe35ee5_85188523',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/template.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'conteudo'}  file:application/modules/site/views/instituicoes/index.tpl */
function block_10302493025829ebffe35ee5_85188523($_smarty_tpl, $_blockParentStack) {
?>

    <div class="row" ng-controller="InstituicoesController">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:instituicoes/modal-form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:instituicoes/modal-delete.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">Instituições</h1>
            </div>
            
            <div class="container">
                <div class="row">
		<div id="custom-search-input">
                            <div class="input-group col-md-12">
                                <input type="text" class="  search-query form-control" placeholder="Para pesquisar digite um dado da insituição" />
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
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:instituicoes/lista.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
/public/js/modules/site/instituicoes/index.js"><?php echo '</script'; ?>
>
<?php
}
/* {/block 'conteudo'} */
}
