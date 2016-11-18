<?php
/* Smarty version 3.1.28, created on 2016-11-18 16:47:00
  from "/var/www/cie/application/modules/site/views/listasegresso/lista.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_582f4ca4b21ea0_53287772',
  'file_dependency' => 
  array (
    '3ea7e93943e3c48a192d49020a0ece01a06bfb43' => 
    array (
      0 => '/var/www/cie/application/modules/site/views/listasegresso/lista.tpl',
      1 => 1479138962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_582f4ca4b21ea0_53287772 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '983107091582f4ca4b1e2a3_37353524';
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

<?php }
}
