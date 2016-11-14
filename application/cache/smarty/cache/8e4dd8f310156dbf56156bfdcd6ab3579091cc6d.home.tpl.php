<?php
/* Smarty version 3.1.28, created on 2016-10-03 09:34:02
  from "/var/www/html/codeigniter/application/modules/site/views/home.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57f2503a2536e5_15646305',
  'file_dependency' => 
  array (
    '8e4dd8f310156dbf56156bfdcd6ab3579091cc6d' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/site/views/home.tpl',
      1 => 1475234974,
      2 => 'file',
    ),
    '7145a0bee7ebc39190e20444b603aaf13d54383d' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/site/views/desktop/layout/header.tpl',
      1 => 1475235730,
      2 => 'file',
    ),
    'fbf8979764f154158d802d1ab870964662dc8c72' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/site/views/desktop/layout/topo.tpl',
      1 => 1475235456,
      2 => 'file',
    ),
    'c2313e9c8ade1e618941106eb24a48f9a956eec7' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/site/views/desktop/layout/nav.tpl',
      1 => 1475235428,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_57f2503a2536e5_15646305 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Nome do sistema. CREA-GO">
        <meta name="author" content="Coordenadoria de T.I - CREA-GO">

        <title>CodeIgniter HMVC Smarty</title>
        
        <meta name="mobile-web-app-capable" content="yes" />
        <link rel="icon" sizes="32x32" href="http://localhost/codeigniter/public/icons/icon-32.png" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <link rel="apple-touch-startup-image" href="http://localhost/codeigniter/public/icons/icon-32.png" />
        <link rel="manifest" href="http://localhost/codeigniter/public/manifest.json" />

        <!-- Bootstrap Core CSS -->
        <link href="http://localhost/codeigniter/public/componentes/sb/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="http://localhost/codeigniter/public/componentes/sb/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="http://localhost/codeigniter/public/componentes/sb/dist/css/sb-admin-2.css" rel="stylesheet">
        <link href="http://localhost/codeigniter/public/css/estilo.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="http://localhost/codeigniter/public/componentes/sb/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">        
        <link rel="stylesheet" href="http://localhost/codeigniter/public/componentes/fontes/style.css" />    
        
        <!-- JQueryUiCss -->
        <link rel="stylesheet" type="text/css" media="screen" href="http://localhost/codeigniter/public/componentes/jquery-ui-1.11.4/jquery-ui.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="http://localhost/codeigniter/public/componentes/jquery-ui-1.11.4/jquery-ui.structure.css" />

        <link rel="stylesheet" type="text/css" href="http://localhost/codeigniter/public/componentes/clockpicker/dist/bootstrap-clockpicker.min.css">
        
        <!-- Toast message -->
        <link rel="stylesheet" href="http://localhost/codeigniter/public/componentes/toast-message/src/main/resources/css/jquery.toastmessage.css" />

        <script> var base_url = "http://localhost/codeigniter";</script>
                
        <!-- jQuery -->
        <script src="http://localhost/codeigniter/public/componentes/sb/bower_components/jquery/dist/jquery.min.js"></script>

        <!-- AngularJS -->
        <script src="http://localhost/codeigniter/public/componentes/angular/angular.min.js" type="text/javascript"></script>
        
        <!-- Bootstrap Core JavaScript -->
        <script src="http://localhost/codeigniter/public/componentes/sb/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="http://localhost/codeigniter/public/componentes/sb/bower_components/metisMenu/dist/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="http://localhost/codeigniter/public/componentes/sb/dist/js/sb-admin-2.js"></script>
        
        <!--Toast message -->
        <script src="http://localhost/codeigniter/public/componentes/toast-message/src/main/javascript/jquery.toastmessage.js" type="text/javascript"></script>
        <script src="http://localhost/codeigniter/public/js/dialog.js" type="text/javascript"></script>

        <!-- Jquery Ui -->
        <script src="http://localhost/codeigniter/public/componentes/jquery-ui-1.11.4/jquery-ui.js" type="text/javascript"></script>
        <script type="text/javascript" src="http://localhost/codeigniter/public/componentes/jquery/jquery.ui.touch-punch.min.js"></script>

        <!-- mascaras -->
        <script src="http://localhost/codeigniter/public/componentes/mascaras/js/jquery.inputmask.js" type="text/javascript"></script>        
        <script src="http://localhost/codeigniter/public/componentes/maskmoney/src/jquery.maskMoney.js"></script>
                

        <!--Angular APP -->
        <script src="http://localhost/codeigniter/public/js/app.js" type="text/javascript"></script>
        
        <!--Application -->
        <script src="http://localhost/codeigniter/public/js/application.js" type="text/javascript"></script>
        
        <!--Dialogo -->
        <script src="http://localhost/codeigniter/public/js/dialog.js" type="text/javascript"></script>
        
        <!-- Moment -->
        <script type="text/javascript" src="http://localhost/codeigniter/public/componentes/moment.js"></script>
        
        <!-- Clock picker -->
        <script type="text/javascript" src="http://localhost/codeigniter/public/componentes/clockpicker/dist/bootstrap-clockpicker.min.js"></script>
        

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body ng-app="app">
<div id="wrapper">
    <body app="app">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand upper" href="http://localhost/codeigniter/"> Título da Aplicação</a>
        </div>        
        <div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="http://localhost/codeigniter/veiculos"><i class="icon icon-link"></i> Link 1</a>
            </li>            
            <li>
                <a href="#"><i class="icon icon-link"></i> Link 2<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">                    
                    <li><a href="http://localhost/codeigniter/"><i class="icon icon-link"></i> Sub link 2</a></li>
                </ul>                            
            </li>
        </ul>
    </div>            
</div>        
    </nav>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">CodeIgniter HMVC Smarty</h1>
                    <p>Adaptação Wender Fernandes - 2016</p>
                </div>                
            </div>                
        </div>        
    </div>
</div>
<body app="app">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand upper" href="http://localhost/codeigniter/"> Título da Aplicação</a>
        </div>        
        <div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="http://localhost/codeigniter/veiculos"><i class="icon icon-link"></i> Link 1</a>
            </li>            
            <li>
                <a href="#"><i class="icon icon-link"></i> Link 2<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">                    
                    <li><a href="http://localhost/codeigniter/"><i class="icon icon-link"></i> Sub link 2</a></li>
                </ul>                            
            </li>
        </ul>
    </div>            
</div>        
    </nav><?php }
}
