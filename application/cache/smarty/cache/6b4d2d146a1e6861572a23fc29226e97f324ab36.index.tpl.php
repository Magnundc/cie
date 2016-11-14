<?php
/* Smarty version 3.1.28, created on 2016-10-03 09:34:10
  from "/var/www/html/codeigniter/application/modules/admin/views/desktop/categorias/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57f25042f2f0e4_88144026',
  'file_dependency' => 
  array (
    '6b4d2d146a1e6861572a23fc29226e97f324ab36' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/admin/views/desktop/categorias/index.tpl',
      1 => 1475258626,
      2 => 'file',
    ),
    '58e584caa61e755c01f2bdbf30afd42e563e7d1a' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/admin/views/desktop/layout/layout.tpl',
      1 => 1475259234,
      2 => 'file',
    ),
    '00f9d76ff71361aafff410f7b82601813a36bddc' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/admin/views/desktop/categorias/modal-form.tpl',
      1 => 1475245696,
      2 => 'file',
    ),
    '208241bab40f62da168014bfdc7556e3dd61a852' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/admin/views/desktop/categorias/form.tpl',
      1 => 1475245696,
      2 => 'file',
    ),
    '5e818a2351e3a2be8c6fe5e3b55b6481a8238db9' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/admin/views/desktop/categorias/modal-delete.tpl',
      1 => 1475245696,
      2 => 'file',
    ),
    '9869808828b17e3ecacb03d607fb765cf705a672' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/admin/views/desktop/categorias/lista.tpl',
      1 => 1475260631,
      2 => 'file',
    ),
    '8c44006cddfc7b44de3ca19a5d4b12ea1e42acb5' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/admin/views/layout/pagination.tpl',
      1 => 1475232784,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_57f25042f2f0e4_88144026 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Nova Aplicação CREA-GO">
        <meta name="author" content="TI-CREA-GO">

        <title>Novo projeto CREA</title>

        <!-- Bootstrap Core CSS -->
        <link href="http://localhost/codeigniter/public/componentes/sb/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
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
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
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
                            <a href="http://localhost/codeigniter/#1"><i class="fa icon-happy"></i> Link 1</a>
                        </li>                        
                        <li>
                            <a href="http://localhost/codeigniter/#2"><i class="fa icon-link"></i> Link 2</a>
                        </li>                        
                    </ul>
                </div>        
            </div>            
        </nav>
        <div id="wrapper">
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="v_space">
    <div class="row" ng-controller="CategoriasController">
        <div class="modal fade" id="modal-form" tabindex="-1" role="dialog"  aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title"><i class="glyphicon glyphicon-pencil"></i> Cadastro</h4>
            </div>
            <div class="modal-body">
                <form name="frm-categorias" method="post">
    <section class="oculta">
        <label for="id" class="upper">id:</label>
        <input type="text" ng-model="categoria.id" id="id" readonly="readonly" class="short_field form-control" />
    </section>
    <section class="form-group">
        <label for="nome" class="upper">nome:</label>
        <input type="text" ng-model="categoria.nome" class="form-control" id="nome" autocomplete="off" maxlength="45" />
    </section>
    <section class="form-group">
        <label for="tipo" class="upper">tipo:</label>
        <input type="text" ng-model="categoria.tipo" class="form-control" id="tipo" autocomplete="off" maxlength="1" />
    </section>
    <section class="form-group">
        <label for="usuario_id" class="upper">usuario id:</label>
        <select ng-model="categoria.usuario_id" class="form-control" id="usuario_id">
            <option ng-repeat="u in usuarios" value="{{u.id}}">{{u.nome}}</option>
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
                <h1 class="panel-title">Título</h1>
            </div>
            <div class="panel-body table-container">
                

 
    <h1>{{soma()|number:2|moeda}}</h1>
    
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
                        <li ng-click="incluir(categoria)"><a href="javascript:void(0)"><i class="icon-plus-2"></i> Incluir</a></a></li>
                    </ul>
                </span>
            </th>
            <th width="5%">id</th>
            <th>nome</th>
            <th>tipo</th>
            <th>usuario id</th>
        </tr>
    </thead>
    <tfoot class="msg">
        <tr>
            <td colspan="4" class="right" >Total</td>
            <td>{{soma()|number:2|moeda}}</td>
        </tr>
    </tfoot>
    <tbody>
        <tr ng-repeat="categoria in lista" ng-class="{'receita':categoria.tipo=='R','despesa':categoria.tipo=='D'}">
            <td class="center">
                <span class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="icon-cogs"></i>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li ng-click="editar(categoria)" class="editar"><a href="javascript:void(0)"><i class="icon-pencil-4"></i> Editar</a></a></li>
                        <li ng-click="excluir(categoria)" class="excluir"><a href="javascript:void(0)"><i class="icon-trashcan"></i> Excluir</a></a></li>
                    </ul>
                </div>
            </span>
            <td  class="right">{{categoria.id}}</td>
            <td >{{categoria.nome}}</td>
            <td>
                <span ng-show="categoria.tipo=='R'">Receita</span>
                <span ng-show="categoria.tipo=='D'">Despesa</span>                                
            </td>
            <td >R$ {{categoria.usuario_id|number:2|moeda}}</td>
        </tr>
    </tbody>
</table>



            </div>
            <div class="panel-footer">    <div>
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
    <script src="http://localhost/codeigniter/public/js/modules/admin/categorias/index.js"></script>
</div>
                </div>
            </div>        
        </div>
    </body>
</html><?php }
}
