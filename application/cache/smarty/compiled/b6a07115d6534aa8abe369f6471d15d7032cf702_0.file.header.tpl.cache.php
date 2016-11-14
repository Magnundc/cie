<?php
/* Smarty version 3.1.28, created on 2016-09-30 13:47:46
  from "/var/www/html/codeigniter/application/modules/admin/views/desktop/layout/header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57ee973206e994_25106440',
  'file_dependency' => 
  array (
    'b6a07115d6534aa8abe369f6471d15d7032cf702' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/admin/views/desktop/layout/header.tpl',
      1 => 1475245696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ee973206e994_25106440 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '117462379157ee9732034077_37895962';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="author" content="VirtualGYN Soluções" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <meta name="mobile-web-app-capable" content="yes">
        <link rel="icon" sizes="192x192" href="<?php echo base_url;?>
/public/icons/icon-192.png">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <link rel="apple-touch-startup-image" href="<?php echo base_url;?>
/public/icons/icon-192.png">
        <link rel="manifest" href="<?php echo base_url;?>
/public/manifest/desktop.json">
        <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? "VirtualGYN Soluções" : $tmp);?>
</title>
        <link rel="icon" href="<?php echo base_url;?>
/public/icons/favicon.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url;?>
/public/icons/favicon.png">
        <meta name="robots" content="index, follow">
        <meta name="robots" CONTENT="all">
        <meta name="description" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['descricao']->value)===null||$tmp==='' ? '' : $tmp);?>
" />
        <meta name="keywords" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['tags']->value)===null||$tmp==='' ? '' : $tmp);?>
" />
        <meta name="author" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['autor']->value)===null||$tmp==='' ? '' : $tmp);?>
" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:site_name" content="" />
        <meta property="og:title" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['titulo']->value)===null||$tmp==='' ? '' : $tmp);?>
" />
        <meta property="og:description" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['descricao']->value)===null||$tmp==='' ? '' : $tmp);?>
" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['imagem']->value)===null||$tmp==='' ? '' : $tmp);?>
" />

        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url;?>
/public/componentes/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo base_url;?>
/public/componentes/bootstrap/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" href="<?php echo base_url;?>
/public/componentes/bootstrap-switch/bootstrap-switch.min.css" />

        <!-- JQueryUiCss -->
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url;?>
/public/componentes/jquery-ui-1.11.4/jquery-ui.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url;?>
/public/componentes/jquery-ui-1.11.4/jquery-ui.structure.css" />

        <!-- FontAwesome -->
        <link rel="stylesheet" href="<?php echo base_url;?>
/public/componentes/FontAwesome/css/font-awesome.min.css" />
        <link rel="stylesheet" href="<?php echo base_url;?>
/public/componentes/fontes/style.css" />

        <!-- Normalize -->
        <link rel="stylesheet" href="<?php echo base_url;?>
/public/css/normalize.css">

        <!-- Toast message -->
        <link rel="stylesheet" href="<?php echo base_url;?>
/public/componentes/toast-message/src/main/resources/css/jquery.toastmessage.css" />

        <!-- Css base -->
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url;?>
/public/css/desktop.css" />

        <!-- Base URL -->
        <?php echo '<script'; ?>
>
            var base_url = "<?php echo base_url;?>
";
        <?php echo '</script'; ?>
>

        <!-- Jquery -->
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url;?>
/public/componentes/jquery/jquery-2.1.3.min.js"><?php echo '</script'; ?>
>

        <!-- AngularJS -->
        <?php echo '<script'; ?>
 src="<?php echo base_url;?>
/public/componentes/angular/angular.min.js" type="text/javascript"><?php echo '</script'; ?>
>

        <!-- Bootstrap -->
        <?php echo '<script'; ?>
 src="<?php echo base_url;?>
/public/componentes/bootstrap/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo base_url;?>
/public/componentes/bootstrap-switch/bootstrap-switch.min.js" type="text/javascript"><?php echo '</script'; ?>
>

        <!--Toast message -->
        <?php echo '<script'; ?>
 src="<?php echo base_url;?>
/public/componentes/toast-message/src/main/javascript/jquery.toastmessage.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo base_url;?>
/public/js/dialog.js" type="text/javascript"><?php echo '</script'; ?>
>

        <!-- Jquery Ui -->
        <?php echo '<script'; ?>
 src="<?php echo base_url;?>
/public/componentes/jquery-ui-1.11.4/jquery-ui.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url;?>
/public/componentes/jquery/jquery.ui.touch-punch.min.js"><?php echo '</script'; ?>
>

        <!-- mascaras -->
        <?php echo '<script'; ?>
 src="<?php echo base_url;?>
/public/componentes/mascaras/js/jquery.inputmask.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo base_url;?>
/public/componentes/maskmoney/src/jquery.maskMoney.js"><?php echo '</script'; ?>
>

        <!--Angular APP -->
        <?php echo '<script'; ?>
 src="<?php echo base_url;?>
/public/js/app.js" type="text/javascript"><?php echo '</script'; ?>
>

    </head><?php }
}
