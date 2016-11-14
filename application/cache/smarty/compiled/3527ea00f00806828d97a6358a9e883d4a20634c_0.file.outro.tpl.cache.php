<?php
/* Smarty version 3.1.28, created on 2016-09-30 11:50:11
  from "/var/www/html/codeigniter/application/modules/site/views/home/outro.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57ee7ba3d32a51_11092038',
  'file_dependency' => 
  array (
    '3527ea00f00806828d97a6358a9e883d4a20634c' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/site/views/home/outro.tpl',
      1 => 1475247007,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_57ee7ba3d32a51_11092038 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '43869259157ee7ba3ceec78_17155632';
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_59080188757ee7ba3d2f8d5_35840934',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'}  file:application/modules/site/views/home/outro.tpl */
function block_59080188757ee7ba3d2f8d5_35840934($_smarty_tpl, $_blockParentStack) {
?>
Esta é minha pagina 2 usando o mesmo layout<?php
}
/* {/block 'body'} */
}
