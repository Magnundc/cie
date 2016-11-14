<?php
/* Smarty version 3.1.28, created on 2016-10-03 09:34:02
  from "/var/www/html/codeigniter/application/modules/site/views/desktop/layout/header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57f2503a21a4e1_28256606',
  'file_dependency' => 
  array (
    '7145a0bee7ebc39190e20444b603aaf13d54383d' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/site/views/desktop/layout/header.tpl',
      1 => 1475235730,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57f2503a21a4e1_28256606 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '65012415757f2503a1d4767_93238422';
?>
<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Nome do sistema. CREA-GO">
        <meta name="author" content="Coordenadoria de T.I - CREA-GO">

        <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? "CodeIgniter HMVC Smarty" : $tmp);?>
</title>
        
        <meta name="mobile-web-app-capable" content="yes" />
        <link rel="icon" sizes="32x32" href="<?php echo base_url;?>
/public/icons/icon-32.png" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <link rel="apple-touch-startup-image" href="<?php echo base_url;?>
/public/icons/icon-32.png" />
        <link rel="manifest" href="<?php echo base_url;?>
/public/manifest.json" />

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url;?>
/public/componentes/sb/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?php echo base_url;?>
/public/componentes/sb/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo base_url;?>
/public/componentes/sb/dist/css/sb-admin-2.css" rel="stylesheet">
        <link href="<?php echo base_url;?>
/public/css/estilo.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo base_url;?>
/public/componentes/sb/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">        
        <link rel="stylesheet" href="<?php echo base_url;?>
/public/componentes/fontes/style.css" />    
        
        <!-- JQueryUiCss -->
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url;?>
/public/componentes/jquery-ui-1.11.4/jquery-ui.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url;?>
/public/componentes/jquery-ui-1.11.4/jquery-ui.structure.css" />

        <link rel="stylesheet" type="text/css" href="<?php echo base_url;?>
/public/componentes/clockpicker/dist/bootstrap-clockpicker.min.css">
        
        <!-- Toast message -->
        <link rel="stylesheet" href="<?php echo base_url;?>
/public/componentes/toast-message/src/main/resources/css/jquery.toastmessage.css" />

        <?php echo '<script'; ?>
> var base_url = "<?php echo base_url;?>
";<?php echo '</script'; ?>
>
                
        <!-- jQuery -->
        <?php echo '<script'; ?>
 src="<?php echo base_url;?>
/public/componentes/sb/bower_components/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>

        <!-- AngularJS -->
        <?php echo '<script'; ?>
 src="<?php echo base_url;?>
/public/componentes/angular/angular.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        
        <!-- Bootstrap Core JavaScript -->
        <?php echo '<script'; ?>
 src="<?php echo base_url;?>
/public/componentes/sb/bower_components/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>

        <!-- Metis Menu Plugin JavaScript -->
        <?php echo '<script'; ?>
 src="<?php echo base_url;?>
/public/componentes/sb/bower_components/metisMenu/dist/metisMenu.min.js"><?php echo '</script'; ?>
>

        <!-- Custom Theme JavaScript -->
        <?php echo '<script'; ?>
 src="<?php echo base_url;?>
/public/componentes/sb/dist/js/sb-admin-2.js"><?php echo '</script'; ?>
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
        
        <!--Application -->
        <?php echo '<script'; ?>
 src="<?php echo base_url;?>
/public/js/application.js" type="text/javascript"><?php echo '</script'; ?>
>
        
        <!--Dialogo -->
        <?php echo '<script'; ?>
 src="<?php echo base_url;?>
/public/js/dialog.js" type="text/javascript"><?php echo '</script'; ?>
>
        
        <!-- Moment -->
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url;?>
/public/componentes/moment.js"><?php echo '</script'; ?>
>
        
        <!-- Clock picker -->
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url;?>
/public/componentes/clockpicker/dist/bootstrap-clockpicker.min.js"><?php echo '</script'; ?>
>
        

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
        <![endif]-->

    </head>

    <body ng-app="app"><?php }
}
