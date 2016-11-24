<?php
/* Smarty version 3.1.28, created on 2016-11-24 16:31:55
  from "/var/www/cie/application/modules/site/views/instituicoes/pesquisa.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5837321ba6d2a0_31424651',
  'file_dependency' => 
  array (
    '52fbc3f8761fe4b1381f5754d4067046615f71bc' => 
    array (
      0 => '/var/www/cie/application/modules/site/views/instituicoes/pesquisa.tpl',
      1 => 1479992826,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5837321ba6d2a0_31424651 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '14310731555837321ba69a97_11543412';
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
            <th width="5%"><th>nome</th>
            <th>nome abreviado</th>
            <th>cidade</th>
        </tr>
    </thead>
    <tfoot class="msg">
        <tr>
            <td colspan="8" class="center" ng-show="lista.length < 1">Nenhum registro encontrado</td>
        </tr>
    </tfoot>
    <tbody>
        <tr ng-repeat="d in dados">
            <td class="center">
                <span class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="icon-cogs"></i>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li ng-click="editar(d)"><a href="javascript:void(0)"><i class="icon-pencil-4"></i> Editar</a></li>
                        <li ng-click="excluir(d)"><a href="javascript:void(0)"><i class="icon-trashcan"></i> Excluir</a></li>
                    </ul>
                </div>
            </span>
        </td>
            <td  class="right"><td >{{d.nome}}</td>
            <td >{{d.nome_abreviado}}</td>
            <td >{{d.cidade}}</td>
            </tr>
    </tbody>
</table>

<?php }
}
