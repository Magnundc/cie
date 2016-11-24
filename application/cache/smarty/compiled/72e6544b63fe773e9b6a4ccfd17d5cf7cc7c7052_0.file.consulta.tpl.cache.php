<?php
/* Smarty version 3.1.28, created on 2016-11-22 16:25:48
  from "/var/www/cie/application/modules/site/views/instituicoes/consulta.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_58348dac048a55_63201166',
  'file_dependency' => 
  array (
    '72e6544b63fe773e9b6a4ccfd17d5cf7cc7c7052' => 
    array (
      0 => '/var/www/cie/application/modules/site/views/instituicoes/consulta.tpl',
      1 => 1479836489,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58348dac048a55_63201166 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '202875349058348dac046632_16555415';
?>

            <div class="container">
                <form method ="GET" >
                    <div class="input-group">
                        <input type="text" ng-model="instituicoe.nome" nome="nome" class="form-control" name="q" placeholder="Pesquise por instituições">
                        <span class="input-group-btn">
                            <button class="btn btn" ng-click="pesquisar()" type="GET"><span class="glyphicon glyphicon-search"></span></button>
                        </span>
                    </div>
                </form>
    
  

<?php }
}
