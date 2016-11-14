<?php
/* Smarty version 3.1.28, created on 2016-09-30 12:07:04
  from "/var/www/html/codeigniter/application/modules/admin/views/desktop/layout/pagination.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57ee7f986ba1a5_60711138',
  'file_dependency' => 
  array (
    'b81be598668fa59be821a9fa2b9ca73be753e7e1' => 
    array (
      0 => '/var/www/html/codeigniter/application/modules/admin/views/desktop/layout/pagination.tpl',
      1 => 1475245696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ee7f986ba1a5_60711138 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '108938317257ee7f986b3a27_98415632';
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
