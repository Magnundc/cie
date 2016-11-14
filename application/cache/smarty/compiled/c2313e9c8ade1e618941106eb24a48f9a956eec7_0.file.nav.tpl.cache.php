<?php
/* Smarty version 3.1.28, created on 2016-10-03 09:34:02
  from "/var/www/html/codeigniter/application/modules/site/views/desktop/layout/nav.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57f2503a247bb6_15742938',
  'file_dependency' => 
  array (
    'c2313e9c8ade1e618941106eb24a48f9a956eec7' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/site/views/desktop/layout/nav.tpl',
      1 => 1475235428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57f2503a247bb6_15742938 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '206914301157f2503a241d97_77553465';
?>
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="<?php echo base_url;?>
/veiculos"><i class="icon icon-link"></i> Link 1</a>
            </li>            
            <li>
                <a href="#"><i class="icon icon-link"></i> Link 2<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">                    
                    <li><a href="<?php echo base_url;?>
/"><i class="icon icon-link"></i> Sub link 2</a></li>
                </ul>                            
            </li>
        </ul>
    </div>            
</div><?php }
}
