<?php
/* Smarty version 3.1.28, created on 2016-09-30 11:49:32
  from "/var/www/html/codeigniter/application/modules/site/views/home/teste.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57ee7b7c054bd4_23152190',
  'file_dependency' => 
  array (
    '5128a7d933c6573792030752ebf4e5cf8c6f9af3' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/site/views/home/teste.tpl',
      1 => 1475243017,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_57ee7b7c054bd4_23152190 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '175105583957ee7b7c014016_84006530';
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'title', array (
  0 => 'block_154034746757ee7b7c04f246_34985371',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_48950709457ee7b7c0528a4_96092603',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:application/modules/site/views/home/teste.tpl */
function block_154034746757ee7b7c04f246_34985371($_smarty_tpl, $_blockParentStack) {
?>
Teste de layout<?php
}
/* {/block 'title'} */
/* {block 'body'}  file:application/modules/site/views/home/teste.tpl */
function block_48950709457ee7b7c0528a4_96092603($_smarty_tpl, $_blockParentStack) {
?>
Esta é minha pagina 1<?php
}
/* {/block 'body'} */
}
