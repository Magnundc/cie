<?php
/* Smarty version 3.1.28, created on 2016-10-03 09:34:10
  from "/var/www/html/codeigniter/application/modules/admin/views/layout/pagination.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57f25042f20d81_11285906',
  'file_dependency' => 
  array (
    '8c44006cddfc7b44de3ca19a5d4b12ea1e42acb5' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/admin/views/layout/pagination.tpl',
      1 => 1475232784,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57f25042f20d81_11285906 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '62996615157f25042ef6820_43563822';
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
