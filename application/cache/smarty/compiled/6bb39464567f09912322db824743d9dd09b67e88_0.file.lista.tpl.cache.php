<?php
/* Smarty version 3.1.28, created on 2016-11-24 15:09:35
  from "/var/www/cie/application/modules/site/views/cursos/lista.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_58371ecfe4edc5_17797618',
  'file_dependency' => 
  array (
    '6bb39464567f09912322db824743d9dd09b67e88' => 
    array (
      0 => '/var/www/cie/application/modules/site/views/cursos/lista.tpl',
      1 => 1479138962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58371ecfe4edc5_17797618 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '201434944458371ecfe4ae98_23362314';
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
                        <li ng-click="incluir(curso)"><a href="javascript:void(0)"><i class="icon-plus-2"></i> Incluir</a></a></li>
                    </ul>
                </span>
            </th>
            <th width="5%">id</th>
            <th>nome curso</th>
            <th>titulo</th>
            <th>atribuicoes</th>
            <th>data rec mec</th>
            <th>data deferimento</th>
            <th>nivel</th>
            <th>data validade</th>
            <th>instituicao id</th>
        </tr>
    </thead>
    <tfoot class="msg">
        <tr>
            <td colspan="8" class="center" ng-show="lista.length < 1">Nenhum registro encontrado</td>
        </tr>
    </tfoot>
    <tbody>
        <tr ng-repeat="curso in lista">
            <td class="center">
                <span class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="icon-cogs"></i>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li ng-click="editar(curso)"><a href="javascript:void(0)"><i class="icon-pencil-4"></i> Editar</a></li>
                        <li ng-click="excluir(curso)"><a href="javascript:void(0)"><i class="icon-trashcan"></i> Excluir</a></li>
                    </ul>
                </div>
            </span>
        </td>
            <td  class="right">{{curso.id}}</td>
            <td >{{curso.nome_curso}}</td>
            <td >{{curso.titulo}}</td>
            <td >{{curso.atribuicoes}}</td>
            <td >{{curso.data_rec_mec}}</td>
            <td >{{curso.data_deferimento}}</td>
            <td >{{curso.nivel}}</td>
            <td >{{curso.data_validade}}</td>
            <td >{{curso.instituicao_id}}</td>
        </tr>
    </tbody>
</table>

<?php }
}
