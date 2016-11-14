<?php
/* Smarty version 3.1.28, created on 2016-10-03 15:10:32
  from "/var/www/html/codeigniter/application/modules/site/views/home/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57f29f18750ae7_28942553',
  'file_dependency' => 
  array (
    'e31ea09c7c94630db342b11cfacef71216f65626' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/site/views/home/index.tpl',
      1 => 1475518227,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/template.tpl' => 1,
  ),
),false)) {
function content_57f29f18750ae7_28942553 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '203935545057f29f18711596_92885894';
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "conteudo", array (
  0 => 'block_77987803057f29f1874e098_94515064',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/template.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'conteudo'}  file:application/modules/site/views/home/index.tpl */
function block_77987803057f29f1874e098_94515064($_smarty_tpl, $_blockParentStack) {
?>

    <div class="row">
        <h1>Code Igniter HMVC Smarty</h1>
    </div>
<?php
}
/* {/block 'conteudo'} */
}
