<?php
/* Smarty version 3.1.28, created on 2016-11-24 15:09:35
  from "/var/www/cie/application/modules/site/views/cursos/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_58371ecfe010a5_41925184',
  'file_dependency' => 
  array (
    '88386ed6a10f37dd8598f1694198a52b58896a71' => 
    array (
      0 => '/var/www/cie/application/modules/site/views/cursos/index.tpl',
      1 => 1479140777,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/template.tpl' => 1,
    'file:cursos/modal-form.tpl' => 1,
    'file:cursos/modal-delete.tpl' => 1,
    'file:cursos/lista.tpl' => 1,
    'file:layout/pagination.tpl' => 1,
  ),
),false)) {
function content_58371ecfe010a5_41925184 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '152007922558371ecfdc0750_56888504';
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "conteudo", array (
  0 => 'block_118805270358371ecfdef9d5_81268050',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/template.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'conteudo'}  file:application/modules/site/views/cursos/index.tpl */
function block_118805270358371ecfdef9d5_81268050($_smarty_tpl, $_blockParentStack) {
?>

    <div class="row" ng-controller="CursosController">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cursos/modal-form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cursos/modal-delete.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">Cursos</h1>
            </div>
            
            <div class="container">
                <div class="row">
		<div id="custom-search-input">
                            <div class="input-group col-md-12">
                                <input type="text" class="  search-query form-control" placeholder="Para pesquisar digite um dado do curso" />
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
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cursos/lista.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
/public/js/modules/site/cursos/index.js"><?php echo '</script'; ?>
>
<?php
}
/* {/block 'conteudo'} */
}
