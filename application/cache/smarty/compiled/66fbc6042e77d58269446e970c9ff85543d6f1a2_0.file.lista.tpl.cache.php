<?php
/* Smarty version 3.1.28, created on 2016-11-14 14:07:14
  from "/var/www/cie/application/modules/site/views/instituicoes/lista.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5829e132103118_31912521',
  'file_dependency' => 
  array (
    '66fbc6042e77d58269446e970c9ff85543d6f1a2' => 
    array (
      0 => '/var/www/cie/application/modules/site/views/instituicoes/lista.tpl',
      1 => 1479138962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5829e132103118_31912521 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1303518665829e1320feaa6_31763933';
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
                        <li ng-click="incluir(instituicoe)"><a href="javascript:void(0)"><i class="icon-plus-2"></i> Incluir</a></a></li>
                    </ul>
                </span>
            </th>
            <th width="5%">id</th>
            <th>nome</th>
            <th>nome abreviado</th>
            <th>data registro</th>
            <th>nivel ensino</th>
            <th>endereco</th>
            <th>complemento endereco</th>
            <th>bairro</th>
            <th>cidade</th>
            <th>CEP</th>
            <th>telefone</th>
            <th>email</th>
        </tr>
    </thead>
    <tfoot class="msg">
        <tr>
            <td colspan="8" class="center" ng-show="lista.length < 1">Nenhum registro encontrado</td>
        </tr>
    </tfoot>
    <tbody>
        <tr ng-repeat="instituicoe in lista">
            <td class="center">
                <span class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="icon-cogs"></i>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li ng-click="editar(instituicoe)"><a href="javascript:void(0)"><i class="icon-pencil-4"></i> Editar</a></li>
                        <li ng-click="excluir(instituicoe)"><a href="javascript:void(0)"><i class="icon-trashcan"></i> Excluir</a></li>
                    </ul>
                </div>
            </span>
        </td>
            <td  class="right">{{instituicoe.id}}</td>
            <td >{{instituicoe.nome}}</td>
            <td >{{instituicoe.nome_abreviado}}</td>
            <td >{{instituicoe.data_registro}}</td>
            <td >{{instituicoe.nivel_ensino}}</td>
            <td >{{instituicoe.endereco}}</td>
            <td >{{instituicoe.complemento_endereco}}</td>
            <td >{{instituicoe.bairro}}</td>
            <td >{{instituicoe.cidade}}</td>
            <td >{{instituicoe.CEP}}</td>
            <td >{{instituicoe.telefone}}</td>
            <td >{{instituicoe.email}}</td>
        </tr>
    </tbody>
</table>

<?php }
}
