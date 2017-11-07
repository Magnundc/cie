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
            
            <!-- Custom CSS -->
            <link href="{base_url}/public/css/estilo.css" rel="stylesheet" type="text/css">
            
            <!-- Nav -->                
            <script src="{base_url}/public/js/nav.js"></script>     
            
            <!-- Bowser -->
            <script type="text/javascript" src="{base_url}/public/componentes/bowser/src/bowser.js"></script>
            
            <script>
                var base_url = "{base_url}";
            </script>
        </head>
        <body ng-app="app">
         <nav ng-controller="NavController" class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
             <div class="navbar-header col-xs-12 col-md-12">
                
                <div class="col-xs-12 col-md-9"> <a class="navbar-brand" href="{base_url}/instituicoes"><i class="fa fa-graduation-cap" aria-hidden="true"></i> CIE - Cadastro de Instituição de Ensino</a></div>
                
                <div class="col-xs-12 col-md-3"> <img src="/cie/public/imagens/logo_crea1.png" alt="Crea-GO"></div>
                
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                </button>
                
             </div>
            <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse" id="menu">
                <ul class="nav" id="side-menu">
                    <li>
                        <a class="menuprincipal" href="/cie/instituicoes"><i class="glyphicon glyphicon-home"></i> Instituições</a>
                        {*<a class="menuprincipal" href="/cie/recadastramentos"><i class="glyphicon glyphicon-chevron-right"></i> Recadastramentos</a>
                        <a class="menuprincipal" href="/cie/cursos"><i class="glyphicon glyphicon-chevron-right"></i> Cursos</a>
                        <a class="menuprincipal" href="/cie/historicodecisoes"><i class="glyphicon glyphicon-chevron-right"></i> Histórico de Decisões</a>
                        <a class="menuprincipal" href="/cie/listasegresso"><i class="glyphicon glyphicon-chevron-right"></i> Listas de Egressos</a>*}
                        {if $smarty.session.logado->master or $smarty.session.logado->admin or $smarty.session.logado->lista_egresso}<a class="menuprincipal" href="/cie/contatos"><i class="glyphicon glyphicon-list"></i> Contatos</a>
                        <a class="menuprincipal" href="/cie/diplomasnaoreconhecidos"><i class="glyphicon glyphicon-thumbs-down"></i> Diplomas não autênticos</a>
                        <a class="menuprincipal" href="/cie/contatoscrea"><i class="glyphicon glyphicon-th-list"></i> Contatos CREAS</a>
                        <a class="menuprincipal" href="/cie/comunicado"><i class="glyphicon glyphicon-bullhorn"></i> Comunicados</a>
                        {if $smarty.session.logado->master}<a class="menuprincipal" href="/cie/titulosconfea"><i class="glyphicon glyphicon-th-large"></i> Títulos Confea</a>{/if}
                        {if $smarty.session.logado->master}<a class="menuprincipal" href="/cie/cursosconfea"><i class="glyphicon glyphicon-education"></i> Cursos Confea</a>{/if}
                        {*<a class="menuprincipal" href="/cie/titulosconfea"><i class="glyphicon glyphicon-chevron-right"></i> Títulos Confea</a>
                        <a class="menuprincipal" href="/cie/cursosconfea"><i class="glyphicon glyphicon-chevron-right"></i> Cursos Confea</a>*}
                        {if $smarty.session.logado->master}<a class="menuprincipal" href="/cie/colaboradores"><i class="glyphicon glyphicon-user"></i> Colaboradores</a>
                        {*<a class="menuprincipal" href="/cie/arquivos"><i class="glyphicon glyphicon-chevron-right"></i> Arquivos</a>*}
                        <a class="menuprincipal" href="/cie/log"><i class="glyphicon glyphicon-list-alt"></i> Relatórios</a>
                        <a class="menuprincipal" href="/cie/log"><i class="glyphicon glyphicon-time"></i> Log</a>{/if}{/if}
                        <a class="menuprincipal" href="javascript:;" ng-click="logout()" data-toggle="tooltip" data-placement="top" title="Logout"><i class="glyphicon glyphicon-off"></i> Sair</a>
                    </li>
                </ul>
            </div>
        </div>
     </nav>
    <div id="wrapper">
        <div id="page-wrapper" style="border: none">
            <div class="container-fluid">
                <div class="v_space">{block name="conteudo"}{/block}</div>
            </div>
        </div>
    </body>
</html>
