<?php
/* Smarty version 3.1.28, created on 2016-11-18 17:01:24
  from "/var/www/cie/application/modules/site/views/layout/pagination.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_582f5004120317_18512114',
  'file_dependency' => 
  array (
    'c76867d6fad5ec76add43697709a9f5c2c9415bf' => 
    array (
      0 => '/var/www/cie/application/modules/site/views/layout/pagination.tpl',
      1 => 1479138962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_582f5004120317_18512114 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1588375497582f500411a036_91154956';
?>
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
<?php }
}
