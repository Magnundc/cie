<?php
/* Smarty version 3.1.28, created on 2016-09-30 13:47:46
  from "/var/www/html/codeigniter/application/modules/admin/views/desktop/index/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57ee9732026bb2_57216185',
  'file_dependency' => 
  array (
    '82e7f1217057b61886383e1ea4d35e16d82803ed' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/admin/views/desktop/index/index.tpl',
      1 => 1475245696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:desktop/layout/topo.tpl' => 1,
    'file:desktop/layout/footer.tpl' => 1,
  ),
),false)) {
function content_57ee9732026bb2_57216185 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '73751774357ee9731f2a489_86299062';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:desktop/layout/topo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section class="container" id="principal">
    <article class="cols-md-12"><h1>Novo projeto, módulo admin!</h1></article>
    <nav class="menu">
        <ul>
            <li>  <a href="<?php echo base_url;?>
/categorias">categorias</li>
            <li> | <a href="<?php echo base_url;?>
/contabeis">contabeis</li>
            <li> | <a href="<?php echo base_url;?>
/contas">contas</li>
            <li> | <a href="<?php echo base_url;?>
/grupos">grupos</li>
            <li> | <a href="<?php echo base_url;?>
/lancamentos">lancamentos</li>
            <li> | <a href="<?php echo base_url;?>
/logs">logs</li>
            <li> | <a href="<?php echo base_url;?>
/saldos">saldos</li>
            <li> | <a href="<?php echo base_url;?>
/usuarios">usuarios</li>
        </ul>
    </nav>
</section>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:desktop/layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
