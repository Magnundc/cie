<?php
/* Smarty version 3.1.28, created on 2016-10-03 14:40:05
  from "/var/www/html/codeigniter/application/modules/site/views/categorias/lista.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57f297f5591877_06776289',
  'file_dependency' => 
  array (
    'bd011b81657c8408b2610d5779634786361ecbbc' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/site/views/categorias/lista.tpl',
      1 => 1475516036,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57f297f5591877_06776289 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '188075511257f297f558d710_75243292';
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
            <td colspan="8" class="center" ng-show="lista.length < 1">Nenhum registro encontrado</td>
        </tr>
    </tfoot>
    <tbody>
        <tr ng-repeat="categoria in lista">
            <td class="center">
                <span class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="icon-cogs"></i>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li ng-click="editar(categoria)"><a href="javascript:void(0)"><i class="icon-pencil-4"></i> Editar</a></li>
                        <li ng-click="excluir(categoria)"><a href="javascript:void(0)"><i class="icon-trashcan"></i> Excluir</a></li>
                    </ul>
                </div>
            </span>
        </td>
            <td  class="right">{{categoria.id}}</td>
            <td >{{categoria.nome}}</td>
            <td >{{categoria.tipo}}</td>
            <td >{{categoria.usuario_id}}</td>
        </tr>
    </tbody>
</table>

<?php }
}
