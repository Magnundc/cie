<?php
/* Smarty version 3.1.28, created on 2016-11-18 17:01:24
  from "/var/www/cie/application/modules/site/views/layout/template.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_582f50040fb6f8_14492543',
  'file_dependency' => 
  array (
    'e1292f8b74a06a8cae3496ce7393f8577b691a09' => 
    array (
      0 => '/var/www/cie/application/modules/site/views/layout/template.tpl',
      1 => 1479141079,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_582f50040fb6f8_14492543 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '1207392989582f50040cdb16_44011899';
?>
<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="Nova Aplicação CREA-GO">
            <meta name="author" content="Magnun Dias Carvalho">
            <title><?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "title", array (
  0 => 'block_992154198582f50040d0d54_86313049',
  1 => false,
  3 => 0,
  2 => 0,
));
?>
</title>

            <meta name="mobile-web-app-capable" content="yes" />
            <link rel="icon" sizes="48x48" href="<?php echo base_url;?>
/public/icons/icon-48.png" />
            <meta name="apple-mobile-web-app-status-bar-style" content="black" />
            <link rel="apple-touch-startup-image" href="<?php echo base_url;?>
/public/icons/icon-48.png" />
            <link rel="manifest" href="<?php echo base_url;?>
/public/manifest.json" />

            <!-- Bootstrap Core CSS -->
            <link href="<?php echo base_url;?>
/public/componentes/sb/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

            <link href="<?php echo base_url;?>
/public/componentes/sb/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
            <!-- Custom CSS -->
            <link href="<?php echo base_url;?>
/public/componentes/sb/dist/css/sb-admin-2.css" rel="stylesheet">

            <!-- Custom Fonts -->
            <link href="<?php echo base_url;?>
/public/componentes/sb/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

            <!-- FontAwesome -->
            <link rel="stylesheet" href="<?php echo base_url;?>
/public/componentes/FontAwesome/css/font-awesome.min.css" />
            <link rel="stylesheet" href="<?php echo base_url;?>
/public/componentes/fontes/style.css" />

            <!-- Toast message -->
            <link rel="stylesheet" href="<?php echo base_url;?>
/public/componentes/toast-message/src/main/resources/css/jquery.toastmessage.css" />

            <!-- Custom CSS -->
            <link href="<?php echo base_url;?>
/public/css/estilo.css" rel="stylesheet" type="text/css">

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

            <!-- mascaras -->
            <?php echo '<script'; ?>
 src="<?php echo base_url;?>
/public/componentes/mascaras/js/jquery.inputmask.js" type="text/javascript"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo base_url;?>
/public/componentes/maskmoney/src/jquery.maskMoney.js"><?php echo '</script'; ?>
>

            <!--Application -->
            <?php echo '<script'; ?>
 src="<?php echo base_url;?>
/public/js/application.js" type="text/javascript"><?php echo '</script'; ?>
>

            <!-- Application AngularJS -->
            <?php echo '<script'; ?>
 src="<?php echo base_url;?>
/public/js/app.js" type="text/javascript"><?php echo '</script'; ?>
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

            <?php echo '<script'; ?>
>
                var base_url = "<?php echo base_url;?>
";
            <?php echo '</script'; ?>
>
        </head>
        <body ng-app="app">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            <a class="navbar-brand" href="<?php echo base_url;?>
/">CIE - Cadastro de Instituição de Ensino</a>
        </div>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="instituicoes"><i class="glyphicon glyphicon-chevron-right"></i> Insituições</a>
                        <a href="contatos"><i class="glyphicon glyphicon-chevron-right"></i> Contatos</a>
                        <a href="cursos"><i class="glyphicon glyphicon-chevron-right"></i> Cursos</a>
                        <a href="grades"><i class="glyphicon glyphicon-chevron-right"></i> Grades</a>
                        <a href="listasegresso"><i class="glyphicon glyphicon-chevron-right"></i> Listas de Egressos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="v_space"><?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "conteudo", array (
  0 => 'block_394997634582f50040f3fd5_27317478',
  1 => false,
  3 => 0,
  2 => 0,
));
?>
</div>
            </div>
        </div>
    </body>
</html>
<?php }
/* {block 'title'}  file:layout/template.tpl */
function block_992154198582f50040d0d54_86313049($_smarty_tpl, $_blockParentStack) {
?>
CIE - Cadastro de Instituição de Ensino<?php
}
/* {/block 'title'} */
/* {block 'conteudo'}  file:layout/template.tpl */
function block_394997634582f50040f3fd5_27317478($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'conteudo'} */
}
