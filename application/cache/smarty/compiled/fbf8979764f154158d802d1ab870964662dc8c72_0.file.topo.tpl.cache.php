<?php
/* Smarty version 3.1.28, created on 2016-10-03 09:34:02
  from "/var/www/html/codeigniter/application/modules/site/views/desktop/layout/topo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57f2503a23e396_32200847',
  'file_dependency' => 
  array (
    'fbf8979764f154158d802d1ab870964662dc8c72' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/site/views/desktop/layout/topo.tpl',
      1 => 1475235456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:desktop/layout/nav.tpl' => 1,
  ),
),false)) {
function content_57f2503a23e396_32200847 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '167299345757f2503a236829_87472413';
?>
<body app="app">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand upper" href="<?php echo base_url;?>
/"> Título da Aplicação</a>
        </div>        
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:desktop/layout/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        
    </nav><?php }
}
