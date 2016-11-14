<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="Nova Aplicação CREA-GO">
            <meta name="author" content="Magnun Dias Carvalho">
            <title>{block name="title"}CIE - Cadastro de Instituição de Ensino{/block}</title>

            <meta name="mobile-web-app-capable" content="yes" />
            <link rel="icon" sizes="48x48" href="{base_url}/public/icons/icon-48.png" />
            <meta name="apple-mobile-web-app-status-bar-style" content="black" />
            <link rel="apple-touch-startup-image" href="{base_url}/public/icons/icon-48.png" />
            <link rel="manifest" href="{base_url}/public/manifest.json" />

            <!-- Bootstrap Core CSS -->
            <link href="{base_url}/public/componentes/sb/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

            <link href="{base_url}/public/componentes/sb/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
            <!-- Custom CSS -->
            <link href="{base_url}/public/componentes/sb/dist/css/sb-admin-2.css" rel="stylesheet">

            <!-- Custom Fonts -->
            <link href="{base_url}/public/componentes/sb/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

            <!-- FontAwesome -->
            <link rel="stylesheet" href="{base_url}/public/componentes/FontAwesome/css/font-awesome.min.css" />
            <link rel="stylesheet" href="{base_url}/public/componentes/fontes/style.css" />

            <!-- Toast message -->
            <link rel="stylesheet" href="{base_url}/public/componentes/toast-message/src/main/resources/css/jquery.toastmessage.css" />

            <!-- Custom CSS -->
            <link href="{base_url}/public/css/estilo.css" rel="stylesheet" type="text/css">

            <!-- jQuery -->
            <script src="{base_url}/public/componentes/sb/bower_components/jquery/dist/jquery.min.js"></script>

            <!-- AngularJS -->
            <script src="{base_url}/public/componentes/angular/angular.min.js" type="text/javascript"></script>

            <!-- mascaras -->
            <script src="{base_url}/public/componentes/mascaras/js/jquery.inputmask.js" type="text/javascript"></script>
            <script src="{base_url}/public/componentes/maskmoney/src/jquery.maskMoney.js"></script>

            <!--Application -->
            <script src="{base_url}/public/js/application.js" type="text/javascript"></script>

            <!-- Application AngularJS -->
            <script src="{base_url}/public/js/app.js" type="text/javascript"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="{base_url}/public/componentes/sb/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

            <!-- Metis Menu Plugin JavaScript -->
            <script src="{base_url}/public/componentes/sb/bower_components/metisMenu/dist/metisMenu.min.js"></script>

            <!-- Custom Theme JavaScript -->
            <script src="{base_url}/public/componentes/sb/dist/js/sb-admin-2.js"></script>

            <!--Toast message -->
            <script src="{base_url}/public/componentes/toast-message/src/main/javascript/jquery.toastmessage.js" type="text/javascript"></script>
            <script src="{base_url}/public/js/dialog.js" type="text/javascript"></script>

            <!-- Jquery Ui -->
            <script src="{base_url}/public/componentes/jquery-ui-1.11.4/jquery-ui.js" type="text/javascript"></script>
            <script type="text/javascript" src="{base_url}/public/componentes/jquery/jquery.ui.touch-punch.min.js"></script>

            <script>
                var base_url = "{base_url}";
            </script>
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
            <a class="navbar-brand" href="{base_url}/">CIE - Cadastro de Instituição de Ensino</a>
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
                <div class="v_space">{block name="conteudo"}{/block}</div>
            </div>
        </div>
    </body>
</html>
