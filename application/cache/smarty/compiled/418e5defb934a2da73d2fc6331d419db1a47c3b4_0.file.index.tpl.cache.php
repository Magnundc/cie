<?php
/* Smarty version 3.1.28, created on 2016-11-14 14:51:31
  from "/var/www/cie/application/modules/site/views/home/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5829eb93064ff1_83454618',
  'file_dependency' => 
  array (
    '418e5defb934a2da73d2fc6331d419db1a47c3b4' => 
    array (
      0 => '/var/www/cie/application/modules/site/views/home/index.tpl',
      1 => 1479138962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/template.tpl' => 1,
  ),
),false)) {
function content_5829eb93064ff1_83454618 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '10545066045829eb92ee2950_65043698';
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "conteudo", array (
  0 => 'block_21350842395829eb930621b3_26247879',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/template.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'conteudo'}  file:application/modules/site/views/home/index.tpl */
function block_21350842395829eb930621b3_26247879($_smarty_tpl, $_blockParentStack) {
?>

    <div class="row">
        <h1>Code Igniter HMVC Smarty</h1>
    </div>
<?php
}
/* {/block 'conteudo'} */
}
