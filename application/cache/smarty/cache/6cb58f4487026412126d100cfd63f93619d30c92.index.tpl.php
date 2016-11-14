<?php
/* Smarty version 3.1.28, created on 2016-10-03 15:26:23
  from "/var/www/html/codeigniter/application/modules/site/views/contas/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57f2a2cf0a0b82_75348412',
  'file_dependency' => 
  array (
    '6cb58f4487026412126d100cfd63f93619d30c92' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/site/views/contas/index.tpl',
      1 => 1475519178,
      2 => 'file',
    ),
    '26d0c4a97fb8cbf4aa3ec86b997d55baa202ee25' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/site/views/layout/template.tpl',
      1 => 1475519178,
      2 => 'file',
    ),
    '0e4669ac02a58893c0227897dfa28407312f67f6' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/site/views/contas/modal-form.tpl',
      1 => 1475519178,
      2 => 'file',
    ),
    'e74371f483eb4813b662232ce075f9f23104525e' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/site/views/contas/form.tpl',
      1 => 1475519178,
      2 => 'file',
    ),
    '4695517ec2190db4a98ef16b7594617d0ae6f36a' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/site/views/contas/modal-delete.tpl',
      1 => 1475519178,
      2 => 'file',
    ),
    'b159b5be9bc905c77a9a165e9c97b323ab94e72d' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/site/views/contas/lista.tpl',
      1 => 1475519178,
      2 => 'file',
    ),
    '76a2398a10c5ce319849b07201d77d57601f4f24' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/site/views/layout/pagination.tpl',
      1 => 1475519178,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_57f2a2cf0a0b82_75348412 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="Nova Aplicação CREA-GO">
            <meta name="author" content="Wender Fernandes">
            <title>Novo projeto</title>

            <meta name="mobile-web-app-capable" content="yes" />
            <link rel="icon" sizes="48x48" href="http://localhost/codeigniter/public/icons/icon-48.png" />
            <meta name="apple-mobile-web-app-status-bar-style" content="black" />
            <link rel="apple-touch-startup-image" href="http://localhost/codeigniter/public/icons/icon-48.png" />
            <link rel="manifest" href="http://localhost/codeigniter/public/manifest.json" />

            <!-- Bootstrap Core CSS -->
            <link href="http://localhost/codeigniter/public/componentes/sb/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

            <link href="http://localhost/codeigniter/public/componentes/sb/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
            <!-- Custom CSS -->
            <link href="http://localhost/codeigniter/public/componentes/sb/dist/css/sb-admin-2.css" rel="stylesheet">

            <!-- Custom Fonts -->
            <link href="http://localhost/codeigniter/public/componentes/sb/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

            <!-- FontAwesome -->
            <link rel="stylesheet" href="http://localhost/codeigniter/public/componentes/FontAwesome/css/font-awesome.min.css" />
            <link rel="stylesheet" href="http://localhost/codeigniter/public/componentes/fontes/style.css" />

            <!-- Toast message -->
            <link rel="stylesheet" href="http://localhost/codeigniter/public/componentes/toast-message/src/main/resources/css/jquery.toastmessage.css" />

            <!-- Custom CSS -->
            <link href="http://localhost/codeigniter/public/css/estilo.css" rel="stylesheet" type="text/css">

            <!-- jQuery -->
            <script src="http://localhost/codeigniter/public/componentes/sb/bower_components/jquery/dist/jquery.min.js"></script>

            <!-- AngularJS -->
            <script src="http://localhost/codeigniter/public/componentes/angular/angular.min.js" type="text/javascript"></script>

            <!-- mascaras -->
            <script src="http://localhost/codeigniter/public/componentes/mascaras/js/jquery.inputmask.js" type="text/javascript"></script>
            <script src="http://localhost/codeigniter/public/componentes/maskmoney/src/jquery.maskMoney.js"></script>

            <!--Application -->
            <script src="http://localhost/codeigniter/public/js/application.js" type="text/javascript"></script>

            <!-- Application AngularJS -->
            <script src="http://localhost/codeigniter/public/js/app.js" type="text/javascript"></script>

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

            <script>
                var base_url = "http://localhost/codeigniter";
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
            <a class="navbar-brand" href="http://localhost/codeigniter/">Novo projeto CREA-GO</a>
        </div>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="http://localhost/codeigniter/#1"><i class="fa icon-link"></i> Link 1</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="v_space">
    <div class="row" ng-controller="ContasController">
        <div class="modal fade" id="modal-form" tabindex="-1" role="dialog"  aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title"><i class="glyphicon glyphicon-pencil"></i> Cadastro</h4>
            </div>
            <div class="modal-body">
                
<form name="frm-contas" method="post">
    <section class="oculta">
        <label for="id" class="upper">id:</label>
        <input type="text" ng-model="conta.id" id="id" readonly="readonly" class="short_field form-control" />
    </section>
    <section class="form-group">
        <label for="codigo" class="upper">codigo:</label>
        <input type="text" ng-model="conta.codigo" class="form-control" id="codigo" autocomplete="off" maxlength="45" />
    </section>
    <section class="form-group">
        <label for="conta" class="upper">conta:</label>
        <input type="text" ng-model="conta.conta" class="form-control" id="conta" autocomplete="off" maxlength="45" />
    </section>
</form>


            </div>
            <div class="modal-footer">
                <button ng-click="salvar()" class="btn btn-default"><i class="icon-ok"></i> Salvar</button>
            </div>
        </div>
    </div>
</div>

        <div class="modal fade" id="modal-delete" tabindex="-1" role="dialog"  aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title"><i class="glyphicon glyphicon-question-sign"></i> Confirmação de segurança</h4>
            </div>
            <div class="modal-body">
                <p>Atenção!</p><p>&nbsp;</p> <p>Esta operação não poderá ser desfeita, confirma a exclusão desse registro?</p>
            </div>
            <div class="modal-footer">
                <button ng-click="delete()" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> Sim</button>
                <button data-dismiss="modal" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Não</button>
            </div>
        </div>
    </div>
</div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">contas</h1>
            </div>
            <div class="panel-body table-container">
                
<table class="table table-condensed table-bordered">
    <thead>
        <tr>
            <th class="min">
                <span class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="glyphicon glyphicon-menu-hamburger"></i>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li ng-click="incluir(conta)"><a href="javascript:void(0)"><i class="icon-plus-2"></i> Incluir</a></a></li>
                    </ul>
                </span>
            </th>
            <th width="5%">id</th>
            <th>codigo</th>
            <th>conta</th>
        </tr>
    </thead>
    <tfoot class="msg">
        <tr>
            <td colspan="8" class="center" ng-show="lista.length < 1">Nenhum registro encontrado</td>
        </tr>
    </tfoot>
    <tbody>
        <tr ng-repeat="conta in lista">
            <td class="center">
                <span class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="icon-cogs"></i>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li ng-click="editar(conta)"><a href="javascript:void(0)"><i class="icon-pencil-4"></i> Editar</a></li>
                        <li ng-click="excluir(conta)"><a href="javascript:void(0)"><i class="icon-trashcan"></i> Excluir</a></li>
                    </ul>
                </div>
            </span>
        </td>
            <td  class="right">{{conta.id}}</td>
            <td >{{conta.codigo}}</td>
            <td >{{conta.conta}}</td>
        </tr>
    </tbody>
</table>


            </div>
            <div class="panel-footer table-container">
                    <div>
        <ul class="pagination" ng-show="paginas.numeros.length > 1">
            <li ng-if="paginas.primeira > 0"><a href="javascript:void(0)" ng-click="reload(pagina.primeira)">Página 1</a></li>
            <li ng-if="paginas.primeira > 0"></li>
            <li ng-repeat="pagina in paginas.numeros">
                <a class="{{pagina.classe}}" href="javascript:void(0)" ng-click="reload(pagina.pag)"><span ng-if="pagina.pag < 10">0</span>{{pagina.pag}}</a>
            </li>
            <li ng-if="paginas.ultima > 0"></li>
            <li ng-if="paginas.ultima > 0"><a href="javascript:void(0)" ng-click="reload(paginas.ultima)">Página {{paginas.ultima}}</a></li>
            </li>
        </ul>
    </div>

            </div>
        </div>
    </div>
    <script src="http://localhost/codeigniter/public/js/modules/site/contas/index.js"></script>
</div>
            </div>
        </div>
    </body>
</html>
<?php }
}
