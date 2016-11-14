<?php
/* Smarty version 3.1.28, created on 2016-10-03 09:34:02
  from "/var/www/html/codeigniter/application/modules/site/views/home.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57f2503a183f63_82740589',
  'file_dependency' => 
  array (
    '8e4dd8f310156dbf56156bfdcd6ab3579091cc6d' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/site/views/home.tpl',
      1 => 1475234974,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:desktop/layout/header.tpl' => 1,
    'file:desktop/layout/topo.tpl' => 2,
  ),
),false)) {
function content_57f2503a183f63_82740589 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '21337747557f2503a12cbf2_03175003';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:desktop/layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="wrapper">
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:desktop/layout/topo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">CodeIgniter HMVC Smarty</h1>
                    <p>Adaptação Wender Fernandes - <?php echo date('Y');?>
</p>
                </div>                
            </div>                
        </div>        
    </div>
</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:desktop/layout/topo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
