<?php
/* Smarty version 3.1.28, created on 2016-09-30 10:38:51
  from "/var/www/html/codeigniter/application/modules/site/views/outro.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57ee6aeba772f3_16023363',
  'file_dependency' => 
  array (
    '58122737de7391b04a5a69e35cb2e8f7b9ce53ca' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/site/views/outro.tpl',
      1 => 1475240219,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_57ee6aeba772f3_16023363 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '4471785857ee6aeba290b7_56169745';
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'title', array (
  0 => 'block_139505809057ee6aeba713c4_81140333',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_206248847957ee6aeba74ca5_47834337',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:application/modules/site/views/outro.tpl */
function block_139505809057ee6aeba713c4_81140333($_smarty_tpl, $_blockParentStack) {
?>
Teste de layout - muda titulo<?php
}
/* {/block 'title'} */
/* {block 'body'}  file:application/modules/site/views/outro.tpl */
function block_206248847957ee6aeba74ca5_47834337($_smarty_tpl, $_blockParentStack) {
?>
Esta é minha pagina 2 usando o mesmo layout<?php
}
/* {/block 'body'} */
}
