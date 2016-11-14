<?php
/* Smarty version 3.1.28, created on 2016-09-30 13:47:46
  from "/var/www/html/codeigniter/application/modules/admin/views/desktop/index/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57ee9732079c06_34862289',
  'file_dependency' => 
  array (
    '82e7f1217057b61886383e1ea4d35e16d82803ed' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/admin/views/desktop/index/index.tpl',
      1 => 1475245696,
      2 => 'file',
    ),
    'e8f0063d69a1b32067ddf4fa2ba272d64eb80c3c' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/admin/views/desktop/layout/topo.tpl',
      1 => 1475245696,
      2 => 'file',
    ),
    'b6a07115d6534aa8abe369f6471d15d7032cf702' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/admin/views/desktop/layout/header.tpl',
      1 => 1475245696,
      2 => 'file',
    ),
    'e5bb6e8e5f52e0dc28376461d7355e3c2dbe9443' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/admin/views/desktop/layout/footer.tpl',
      1 => 1475245696,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_57ee9732079c06_34862289 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="author" content="VirtualGYN Soluções" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <meta name="mobile-web-app-capable" content="yes">
        <link rel="icon" sizes="192x192" href="http://localhost/codeigniter/public/icons/icon-192.png">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <link rel="apple-touch-startup-image" href="http://localhost/codeigniter/public/icons/icon-192.png">
        <link rel="manifest" href="http://localhost/codeigniter/public/manifest/desktop.json">
        <title>VirtualGYN Soluções</title>
        <link rel="icon" href="http://localhost/codeigniter/public/icons/favicon.png">
        <link rel="apple-touch-icon-precomposed" href="http://localhost/codeigniter/public/icons/favicon.png">
        <meta name="robots" content="index, follow">
        <meta name="robots" CONTENT="all">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:site_name" content="" />
        <meta property="og:title" content="" />
        <meta property="og:description" content="" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="" />

        <!-- Bootstrap -->
        <link rel="stylesheet" href="http://localhost/codeigniter/public/componentes/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="http://localhost/codeigniter/public/componentes/bootstrap/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" href="http://localhost/codeigniter/public/componentes/bootstrap-switch/bootstrap-switch.min.css" />

        <!-- JQueryUiCss -->
        <link rel="stylesheet" type="text/css" media="screen" href="http://localhost/codeigniter/public/componentes/jquery-ui-1.11.4/jquery-ui.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="http://localhost/codeigniter/public/componentes/jquery-ui-1.11.4/jquery-ui.structure.css" />

        <!-- FontAwesome -->
        <link rel="stylesheet" href="http://localhost/codeigniter/public/componentes/FontAwesome/css/font-awesome.min.css" />
        <link rel="stylesheet" href="http://localhost/codeigniter/public/componentes/fontes/style.css" />

        <!-- Normalize -->
        <link rel="stylesheet" href="http://localhost/codeigniter/public/css/normalize.css">

        <!-- Toast message -->
        <link rel="stylesheet" href="http://localhost/codeigniter/public/componentes/toast-message/src/main/resources/css/jquery.toastmessage.css" />

        <!-- Css base -->
        <link rel="stylesheet" type="text/css" media="screen" href="http://localhost/codeigniter/public/css/desktop.css" />

        <!-- Base URL -->
        <script>
            var base_url = "http://localhost/codeigniter";
        </script>

        <!-- Jquery -->
        <script type="text/javascript" src="http://localhost/codeigniter/public/componentes/jquery/jquery-2.1.3.min.js"></script>

        <!-- AngularJS -->
        <script src="http://localhost/codeigniter/public/componentes/angular/angular.min.js" type="text/javascript"></script>

        <!-- Bootstrap -->
        <script src="http://localhost/codeigniter/public/componentes/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="http://localhost/codeigniter/public/componentes/bootstrap-switch/bootstrap-switch.min.js" type="text/javascript"></script>

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

    </head>
<body ng-app="app">
    <div class="container">
        <div class="col-md-12">
            <nav>
            </nav>
        </div>
    </div>

<section class="container" id="principal">
    <article class="cols-md-12"><h1>Novo projeto, módulo admin!</h1></article>
    <nav class="menu">
        <ul>
            <li>  <a href="http://localhost/codeigniter/categorias">categorias</li>
            <li> | <a href="http://localhost/codeigniter/contabeis">contabeis</li>
            <li> | <a href="http://localhost/codeigniter/contas">contas</li>
            <li> | <a href="http://localhost/codeigniter/grupos">grupos</li>
            <li> | <a href="http://localhost/codeigniter/lancamentos">lancamentos</li>
            <li> | <a href="http://localhost/codeigniter/logs">logs</li>
            <li> | <a href="http://localhost/codeigniter/saldos">saldos</li>
            <li> | <a href="http://localhost/codeigniter/usuarios">usuarios</li>
        </ul>
    </nav>
</section>
    </body>
</html>
<?php }
}
