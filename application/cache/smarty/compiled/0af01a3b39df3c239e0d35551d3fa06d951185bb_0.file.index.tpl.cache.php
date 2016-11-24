<?php
/* Smarty version 3.1.28, created on 2016-11-24 15:09:35
  from "/var/www/cie/application/modules/site/views/contatos/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_58371ecf40c601_60745890',
  'file_dependency' => 
  array (
    '0af01a3b39df3c239e0d35551d3fa06d951185bb' => 
    array (
      0 => '/var/www/cie/application/modules/site/views/contatos/index.tpl',
      1 => 1479991800,
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
function content_58371ecf40c601_60745890 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '46091624358371ecf3c8739_44396725';
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "conteudo", array (
  0 => 'block_38100422658371ecf3fa746_93504677',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/template.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'conteudo'}  file:application/modules/site/views/contatos/index.tpl */
function block_38100422658371ecf3fa746_93504677($_smarty_tpl, $_blockParentStack) {
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
            
                
                <div class="panel-body">
                <div class="container">
                <form method ="GET" >
                    <div class="input-group">
                    <input ng-model="form.pesquisa" autocomplete="on" type="submit" class="form-control" name="q" placeholder="Pesquise por um contato">
                        <span class="input-group-btn">
                            <button ng-click="pesquisar()" class="btn btn" type="button"><span class="glyphicon glyphicon-search"> </span>
                        </button>
                      </span>
                    </div>
                </form>
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
