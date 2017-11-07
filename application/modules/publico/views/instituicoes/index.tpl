{extends file="layout/template.tpl"}
{block name="conteudo"}
    <div class="row" ng-controller="InstituicoesController" style="background-color: white">
        <div class="panel panel-default" style="padding: 20px">
            {include file="instituicoes/modal_cursos_por_instituicao.tpl"}
            {include file="instituicoes/modal_inst_por_curso.tpl"}
            {include file="instituicoes/modal_op_curso.tpl"}
            {include file="instituicoes/modal_ingresso.tpl"}
            {include file="instituicoes/modal_pdf.tpl"}
            
            <div class="panel-heading">
                {*Painel de pesquisa*}
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#instituicao"><i class="glyphicon glyphicon-home" style="font-size: 20px" aria-hidden="true"></i> Instituições</a></li>
                    <li><a data-toggle="tab" href="#curso"><i class="glyphicon glyphicon-education" style="font-size: 20px" aria-hidden="true"></i> Cursos</a></li>
                    <li><a data-toggle="tab" href="#estatisticas"><i class="glyphicon glyphicon-stats" style="font-size: 20px" aria-hidden="true"></i> Estatísticas</a></li>
                </ul>
                <p>&nbsp;</p>
                <div class="tab-content">
                <div id="instituicao" class="tab-pane fade in active panel-body">
                    <div class="container">
                        <input  maxlength="100" type="text" class="form-control" id="pesquisa_instituicao" autocomplete="off" placeholder="Pesquise por uma instituição ou cidade" />
                    </div>
                    <div class="panel-body">
                    {include file="instituicoes/lista.tpl"}
                    {include file="layout/pagination.tpl"}
                    
                    <br>
                </div>
                </div>
                
                <div id="curso" class="tab-pane fade panel-body">
                    <div class="container">
                        <input  maxlength="100" type="text" class="form-control" id="pesquisa_curso" autocomplete="off" placeholder="Pesquise por um curso" />
                    </div>
                    <div class="panel-body">
                   
                    {include file="instituicoes/lista_cursos.tpl"}
                    
                    <div>
                        <ul class="pagination" ng-show="paginasc.numeros.length > 1">
                            <li ng-if="paginasc.primeira > 0"><a href="javascript:void(0)" ng-click="reload(paginac.primeira)">Página 1</a></li>
                            <li ng-if="paginasc.primeira > 0"></li>
                            <li ng-repeat="paginac in paginasc.numeros">
                                <a class="{literal}{{paginac.classe}}{/literal}" href="javascript:void(0)" ng-click="reload(paginac.pag)"><span ng-if="paginac.pag < 10">0</span>{literal}{{paginac.pag}}{/literal}</a>
                            </li>
                            <li ng-if="paginasc.ultima > 0"></li>
                            <li ng-if="paginasc.ultima > 0"><a href="javascript:void(0)" ng-click="reload(paginasc.ultima)">Página {literal}{{paginasc.ultima}}{/literal}</a></li>
                            </li>
                        </ul>
                    </div>
                    <br>
                </div>
                </div>
                
                <div id="estatisticas" class="tab-pane fade panel-body">
                    
                    <div id="grafcursos" style="min-width: 300px; height: 400px; margin: 0 auto">
                </div>
                </div>

                    
            </div>
        </div>
        
    </div>
    </div>
    
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>


    <script src="{base_url}/public/js/modules/publico/instituicoes/index.js"></script>
    <script src="{base_url}/public/componentes/autocomplete/src/jquery.autocomplete.js"></script>    
{/block}
