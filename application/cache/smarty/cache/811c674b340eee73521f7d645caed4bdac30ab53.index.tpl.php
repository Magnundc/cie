<?php
/* Smarty version 3.1.28, created on 2016-11-24 15:09:37
  from "/var/www/cie/application/modules/site/views/listasegresso/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_58371ed10d2056_82941515',
  'file_dependency' => 
  array (
    '811c674b340eee73521f7d645caed4bdac30ab53' => 
    array (
      0 => '/var/www/cie/application/modules/site/views/listasegresso/index.tpl',
      1 => 1479140868,
      2 => 'file',
    ),
    'e1292f8b74a06a8cae3496ce7393f8577b691a09' => 
    array (
      0 => '/var/www/cie/application/modules/site/views/layout/template.tpl',
      1 => 1479141079,
      2 => 'file',
    ),
    'a4f9b94df5ef9cab96155636b109abaa7092f43a' => 
    array (
      0 => '/var/www/cie/application/modules/site/views/listasegresso/modal-form.tpl',
      1 => 1479138962,
      2 => 'file',
    ),
    '6c5c8fb1432dfdeccec7caf23bcc72a9a433da29' => 
    array (
      0 => '/var/www/cie/application/modules/site/views/listasegresso/form.tpl',
      1 => 1479138962,
      2 => 'file',
    ),
    '68ec1a66bb01be1eef8933603192d822d2dbf942' => 
    array (
      0 => '/var/www/cie/application/modules/site/views/listasegresso/modal-delete.tpl',
      1 => 1479138962,
      2 => 'file',
    ),
    '3ea7e93943e3c48a192d49020a0ece01a06bfb43' => 
    array (
      0 => '/var/www/cie/application/modules/site/views/listasegresso/lista.tpl',
      1 => 1479138962,
      2 => 'file',
    ),
    'c76867d6fad5ec76add43697709a9f5c2c9415bf' => 
    array (
      0 => '/var/www/cie/application/modules/site/views/layout/pagination.tpl',
      1 => 1479138962,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_58371ed10d2056_82941515 ($_smarty_tpl) {
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
            <title>CIE - Cadastro de Instituição de Ensino</title>

            <meta name="mobile-web-app-capable" content="yes" />
            <link rel="icon" sizes="48x48" href="http://localhost/cie/public/icons/icon-48.png" />
            <meta name="apple-mobile-web-app-status-bar-style" content="black" />
            <link rel="apple-touch-startup-image" href="http://localhost/cie/public/icons/icon-48.png" />
            <link rel="manifest" href="http://localhost/cie/public/manifest.json" />

            <!-- Bootstrap Core CSS -->
            <link href="http://localhost/cie/public/componentes/sb/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

            <link href="http://localhost/cie/public/componentes/sb/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
            <!-- Custom CSS -->
            <link href="http://localhost/cie/public/componentes/sb/dist/css/sb-admin-2.css" rel="stylesheet">

            <!-- Custom Fonts -->
            <link href="http://localhost/cie/public/componentes/sb/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

            <!-- FontAwesome -->
            <link rel="stylesheet" href="http://localhost/cie/public/componentes/FontAwesome/css/font-awesome.min.css" />
            <link rel="stylesheet" href="http://localhost/cie/public/componentes/fontes/style.css" />

            <!-- Toast message -->
            <link rel="stylesheet" href="http://localhost/cie/public/componentes/toast-message/src/main/resources/css/jquery.toastmessage.css" />

            <!-- Custom CSS -->
            <link href="http://localhost/cie/public/css/estilo.css" rel="stylesheet" type="text/css">

            <!-- jQuery -->
            <script src="http://localhost/cie/public/componentes/sb/bower_components/jquery/dist/jquery.min.js"></script>

            <!-- AngularJS -->
            <script src="http://localhost/cie/public/componentes/angular/angular.min.js" type="text/javascript"></script>

            <!-- mascaras -->
            <script src="http://localhost/cie/public/componentes/mascaras/js/jquery.inputmask.js" type="text/javascript"></script>
            <script src="http://localhost/cie/public/componentes/maskmoney/src/jquery.maskMoney.js"></script>

            <!--Application -->
            <script src="http://localhost/cie/public/js/application.js" type="text/javascript"></script>

            <!-- Application AngularJS -->
            <script src="http://localhost/cie/public/js/app.js" type="text/javascript"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="http://localhost/cie/public/componentes/sb/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

            <!-- Metis Menu Plugin JavaScript -->
            <script src="http://localhost/cie/public/componentes/sb/bower_components/metisMenu/dist/metisMenu.min.js"></script>

            <!-- Custom Theme JavaScript -->
            <script src="http://localhost/cie/public/componentes/sb/dist/js/sb-admin-2.js"></script>

            <!--Toast message -->
            <script src="http://localhost/cie/public/componentes/toast-message/src/main/javascript/jquery.toastmessage.js" type="text/javascript"></script>
            <script src="http://localhost/cie/public/js/dialog.js" type="text/javascript"></script>

            <!-- Jquery Ui -->
            <script src="http://localhost/cie/public/componentes/jquery-ui-1.11.4/jquery-ui.js" type="text/javascript"></script>
            <script type="text/javascript" src="http://localhost/cie/public/componentes/jquery/jquery.ui.touch-punch.min.js"></script>

            <script>
                var base_url = "http://localhost/cie";
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
            <a class="navbar-brand" href="http://localhost/cie/">CIE - Cadastro de Instituição de Ensino</a>
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
                <div class="v_space">
    <div class="row" ng-controller="ListasegressoController">
        <div class="modal fade" id="modal-form" tabindex="-1" role="dialog"  aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title"><i class="glyphicon glyphicon-pencil"></i> Cadastro</h4>
            </div>
            <div class="modal-body">
                
<form name="frm-listasegresso" method="post">
    <section class="oculta">
        <label for="id" class="upper">id:</label>
        <input type="text" ng-model="listasegress.id" id="id" readonly="readonly" class="short_field form-control" />
    </section>
    <section class="form-group">
        <label for="nome_egresso" class="upper">nome egresso:</label>
        <input type="text" ng-model="listasegress.nome_egresso" class="form-control" id="nome_egresso" autocomplete="off" maxlength="45" />
    </section>
    <section class="form-group">
        <label for="cpf" class="upper">cpf:</label>
        <input type="text" ng-model="listasegress.cpf" class="form-control" id="cpf" autocomplete="off" maxlength="45" />
    </section>
    <section class="form-group">
        <label for="colacao" class="upper">colacao:</label>
        <input type="text" ng-model="listasegress.colacao" class="data medium_field form-control" id="colacao" />
    </section>
    <section class="form-group">
        <label for="cursos_id" class="upper">cursos id:</label>
        <select ng-model="listasegress.cursos_id" class="form-control" id="cursos_id">
            <option ng-repeat="c in cursos" value="{{c.id}}">{{c.nome_curso}}</option>
        </select>
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
                <h1 class="panel-title">Listas de Egressos</h1>
            </div>
            
            <div class="container">
                <div class="row">
		<div id="custom-search-input">
                            <div class="input-group col-md-12">
                                <input type="text" class="  search-query form-control" placeholder="Para pesquisar digite um dado do egresso" />
                                <span class="input-group-btn">
                                    <button class="btn" type="button">
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                        </div>
                </div>
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
                        <li ng-click="incluir(listasegress)"><a href="javascript:void(0)"><i class="icon-plus-2"></i> Incluir</a></a></li>
                    </ul>
                </span>
            </th>
            <th width="5%">id</th>
            <th>nome egresso</th>
            <th>cpf</th>
            <th>colacao</th>
            <th>cursos id</th>
        </tr>
    </thead>
    <tfoot class="msg">
        <tr>
            <td colspan="8" class="center" ng-show="lista.length < 1">Nenhum registro encontrado</td>
        </tr>
    </tfoot>
    <tbody>
        <tr ng-repeat="listasegress in lista">
            <td class="center">
                <span class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="icon-cogs"></i>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li ng-click="editar(listasegress)"><a href="javascript:void(0)"><i class="icon-pencil-4"></i> Editar</a></li>
                        <li ng-click="excluir(listasegress)"><a href="javascript:void(0)"><i class="icon-trashcan"></i> Excluir</a></li>
                    </ul>
                </div>
            </span>
        </td>
            <td  class="right">{{listasegress.id}}</td>
            <td >{{listasegress.nome_egresso}}</td>
            <td >{{listasegress.cpf}}</td>
            <td >{{listasegress.colacao}}</td>
            <td >{{listasegress.cursos_id}}</td>
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
    <script src="http://localhost/cie/public/js/modules/site/listasegresso/index.js"></script>
</div>
            </div>
        </div>
    </body>
</html>
<?php }
}
