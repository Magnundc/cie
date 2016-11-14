<?php
/* Smarty version 3.1.28, created on 2016-11-14 14:40:31
  from "/var/www/cie/application/modules/site/views/contatos/lista.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5829e8ffa2fa75_96896552',
  'file_dependency' => 
  array (
    '88ebcde56c9d11f1e341df0be021258bf1d74dbb' => 
    array (
      0 => '/var/www/cie/application/modules/site/views/contatos/lista.tpl',
      1 => 1479138962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5829e8ffa2fa75_96896552 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '3996874245829e8ffa2bf78_51895418';
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
                        <li ng-click="incluir(contato)"><a href="javascript:void(0)"><i class="icon-plus-2"></i> Incluir</a></a></li>
                    </ul>
                </span>
            </th>
            <th width="5%">idcontatos</th>
            <th>nome contato</th>
            <th>cargo contato</th>
            <th>email contato</th>
            <th>instituicoes id</th>
        </tr>
    </thead>
    <tfoot class="msg">
        <tr>
            <td colspan="8" class="center" ng-show="lista.length < 1">Nenhum registro encontrado</td>
        </tr>
    </tfoot>
    <tbody>
        <tr ng-repeat="contato in lista">
            <td class="center">
                <span class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="icon-cogs"></i>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li ng-click="editar(contato)"><a href="javascript:void(0)"><i class="icon-pencil-4"></i> Editar</a></li>
                        <li ng-click="excluir(contato)"><a href="javascript:void(0)"><i class="icon-trashcan"></i> Excluir</a></li>
                    </ul>
                </div>
            </span>
        </td>
            <td  class="right">{{contato.idcontatos}}</td>
            <td >{{contato.nome_contato}}</td>
            <td >{{contato.cargo_contato}}</td>
            <td >{{contato.email_contato}}</td>
            <td >{{contato.instituicoes_id}}</td>
        </tr>
    </tbody>
</table>

<?php }
}
