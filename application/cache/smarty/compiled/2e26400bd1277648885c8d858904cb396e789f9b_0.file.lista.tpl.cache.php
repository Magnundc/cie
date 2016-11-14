<?php
/* Smarty version 3.1.28, created on 2016-11-14 14:07:11
  from "/var/www/cie/application/modules/site/views/grades/lista.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5829e12fc9e5f5_53745024',
  'file_dependency' => 
  array (
    '2e26400bd1277648885c8d858904cb396e789f9b' => 
    array (
      0 => '/var/www/cie/application/modules/site/views/grades/lista.tpl',
      1 => 1479138962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5829e12fc9e5f5_53745024 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '9460009925829e12fc9a652_54022990';
?>

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
                        <li ng-click="incluir(grade)"><a href="javascript:void(0)"><i class="icon-plus-2"></i> Incluir</a></a></li>
                    </ul>
                </span>
            </th>
            <th width="5%">id</th>
            <th>inicio</th>
            <th>fim</th>
            <th>atribuicoes</th>
            <th>cursos id</th>
            <th>processo def</th>
            <th>decisao</th>
        </tr>
    </thead>
    <tfoot class="msg">
        <tr>
            <td colspan="8" class="center" ng-show="lista.length < 1">Nenhum registro encontrado</td>
        </tr>
    </tfoot>
    <tbody>
        <tr ng-repeat="grade in lista">
            <td class="center">
                <span class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="icon-cogs"></i>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li ng-click="editar(grade)"><a href="javascript:void(0)"><i class="icon-pencil-4"></i> Editar</a></li>
                        <li ng-click="excluir(grade)"><a href="javascript:void(0)"><i class="icon-trashcan"></i> Excluir</a></li>
                    </ul>
                </div>
            </span>
        </td>
            <td  class="right">{{grade.id}}</td>
            <td >{{grade.inicio}}</td>
            <td >{{grade.fim}}</td>
            <td >{{grade.atribuicoes}}</td>
            <td >{{grade.cursos_id}}</td>
            <td >{{grade.processo_def}}</td>
            <td >{{grade.decisao}}</td>
        </tr>
    </tbody>
</table>

<?php }
}
