<?php
/* Smarty version 3.1.28, created on 2016-10-03 09:34:10
  from "/var/www/html/codeigniter/application/modules/admin/views/desktop/categorias/lista.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57f25042ef31d6_80108243',
  'file_dependency' => 
  array (
    '9869808828b17e3ecacb03d607fb765cf705a672' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/admin/views/desktop/categorias/lista.tpl',
      1 => 1475260631,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57f25042ef31d6_80108243 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '7013765657f25042ee6f84_55819921';
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "lista", array (
  0 => 'block_53903810657f25042eea5f5_57696606',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php }
/* {block 'lista'}  file:desktop/categorias/lista.tpl */
function block_53903810657f25042eea5f5_57696606($_smarty_tpl, $_blockParentStack) {
?>


 
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

<?php
}
/* {/block 'lista'} */
}
