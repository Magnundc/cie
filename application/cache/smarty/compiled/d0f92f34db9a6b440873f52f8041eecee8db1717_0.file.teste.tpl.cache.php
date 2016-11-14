<?php
/* Smarty version 3.1.28, created on 2016-09-30 10:15:12
  from "/var/www/html/codeigniter/application/modules/site/views/teste.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57ee656069dcb4_33862284',
  'file_dependency' => 
  array (
    'd0f92f34db9a6b440873f52f8041eecee8db1717' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/site/views/teste.tpl',
      1 => 1475240180,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_57ee656069dcb4_33862284 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '208087192757ee656064e892_72524620';
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'title', array (
  0 => 'block_78955562157ee6560698212_93072822',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_150231279857ee656069b907_30241306',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:application/modules/site/views/teste.tpl */
function block_78955562157ee6560698212_93072822($_smarty_tpl, $_blockParentStack) {
?>
Teste de layout<?php
}
/* {/block 'title'} */
/* {block 'body'}  file:application/modules/site/views/teste.tpl */
function block_150231279857ee656069b907_30241306($_smarty_tpl, $_blockParentStack) {
?>
Esta é minha pagina 1<?php
}
/* {/block 'body'} */
}
