{extends file="layout/template.tpl"}
{block name="conteudo"}
    <div class="row" ng-controller="Listar_historicodecisoesController" ng-init= "init({$cursos_id})" >{*lista_da_instituicao é uma função javascript no arquivo /public/js/moduules/site/cursos/lista_por_instituicao.js*}
        {include file="historicodecisoes/modal-form.tpl"}
        {include file="historicodecisoes/modal-delete.tpl"}
        {include file="historicodecisoes/modal-delete-arquivo.tpl"}
        {include file="historicodecisoes/modal-upload.tpl"}
        {literal}
            <div class="panel panel-default" style="padding: 20px">
            <h1 class="panel-title" style="text-transform: uppercase">Histórico de Decisões do curso de nível <ins>{{nivel(curso.nivel)}}</ins> em <ins>{{historico.nome}}{{curso.nomecursol}}</ins> da instituição <ins>{{historicodec.nome_instituicao}}</ins></h1>
            <br>
            <table class="table table-hover">
                <thead>
                    <tr>
                        
                        <th style="text-align: left" ng-show="curso.nivel=='S'||ng.curso.nivel=='M'">Validade</th>
                        <th style="text-align: left" ng-show="curso.nivel!='S'&&ng.curso.nivel!='M'">Data Deferimento</th>
                        <th style="text-align: left">Data Cadastro</th>
                        <th style="text-align: left">Atribuicões</th>
                    </tr>
                </thead>
                <tfoot class="msg">
                    <tr>
                        <td colspan="8" class="center" ng-show="historicodecisoes.length < 1">Nenhum registro encontrado</td>
                    </tr>
                </tfoot>
                <tbody>
                    <tr ng-repeat="historicodecisoe in historicodecisoes"> {/literal}{*cursos se refere ao objeto gerado pelo javascript no arquivo /public/js/moduules/site/cursos/lista_por_instituicao.js linha na função ng.lista_da_instituicao*}{literal}
                        <td style="width: 25%" ng-show="curso.nivel=='S'||ng.curso.nivel=='M'"> <a href="/cie/instituicoes/ver_historicodecisoes/{{historicodecisoe.id}}" style="color:black" >{{historicodecisoe.data_validade_ini|formatarData}} a {{historicodecisoe.data_validade|formatarData}}</td>
                        <td ng-show="curso.nivel!='S'&&ng.curso.nivel!='M'"> <a href="/cie/instituicoes/ver_historicodecisoes/{{historicodecisoe.id}}" style="color:black" >{{historicodecisoe.data_deferimento|formatarData}}</td>
                        <td > <a href="/cie/instituicoes/ver_historicodecisoes/{{historicodecisoe.id}}" style="color:black">{{historicodecisoe.data_criacao|formatarDataHora}}</td>
                        <td style="width: 50%"> <a href="/cie/instituicoes/ver_historicodecisoes/{{historicodecisoe.id}}" style="color:black">{{historicodecisoe.atribuicoes}}</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <ul class="list-inline">
                     {/literal}{if $smarty.session.logado->master or $smarty.session.logado->admin}{literal}<li ng-click="incluir(historicodecisoe)"><a href="javascript:void(0)"><a class="btn btn-primary btn-large"> Incluir</a></li>{/literal}{/if}{literal}
            </ul>
            
        </div>
    </div>
    {/literal}
    <script src="{base_url}/public/js/modules/site/historicodecisoes/listar_historicodecisoes.js"></script>
    <script src="{base_url}/public/componentes/autocomplete/src/jquery.autocomplete.js"></script>
    <script src="{base_url}/public/js/dropzone/dropzone.js"></script>
    <link rel="stylesheet" href="{base_url}/public/js/dropzone/dist/dropzone.css" />
    <link rel="stylesheet" href="{base_url}/public/js/dropzone/dropzone.css" />



{/block}
