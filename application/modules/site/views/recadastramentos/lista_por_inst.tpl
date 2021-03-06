{extends file="layout/template.tpl"}
{block name="conteudo"}
    <div class="row" ng-controller="Lista_por_instituicaoController" ng-init= "init({$instituicao_id})" >{*lista_da_instituicao é uma função javascript no arquivo /public/js/moduules/site/cursos/lista_por_instituicao.js*}
        {include file="recadastramentos/modal-form.tpl"}
        {include file="recadastramentos/modal-delete.tpl"}
        {include file="recadastramentos/modal-delete-arquivo.tpl"}
        {include file="recadastramentos/modal-upload.tpl"}
        {literal}
        <div class="panel panel-default" style="padding: 20px">
                    <h1 class="panel-title" style="text-transform: uppercase">Recadastramentos da instituição <ins>{{rec.nome_instituicao}}</ins></h1>
                    <br>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th style="text-align: left">Nome</th>
                                <th style="text-align: left">Data</th>
                                <th style="text-align: left">Processo</th>
                            </tr>
                        </thead>
                        <tfoot class="msg">
                            <tr>
                                <td colspan="8" class="center" ng-show="recadastramentos.length < 1">Nenhum registro encontrado</td>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr ng-repeat="recadastramento in recadastramentos"> {/literal}{*cursos se refere ao objeto gerado pelo javascript no arquivo /public/js/moduules/site/cursos/lista_por_instituicao.js linha na função ng.lista_da_instituicao*}{literal}
                                <td > <a href="/cie/instituicoes/verrecadastramento/{{recadastramento.id}}" style="color:black">{{recadastramento.nome}}</td>
                                <td > <a href="/cie/instituicoes/verrecadastramento/{{recadastramento.id}}" style="color:black">{{recadastramento.data_recadastro|formatarData}}</td>
                                <td > <a href="/cie/instituicoes/verrecadastramento/{{recadastramento.id}}" style="color:black">{{recadastramento.processo}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <ul class="list-inline">
                        {/literal}{if $smarty.session.logado->master or $smarty.session.logado->admin}{literal}<li ng-click="incluir(recadastramento)" href="javascript:void(0)"><a class="btn btn-primary btn-large"> Incluir</a></li>{/literal}{/if}{literal}
                    </ul>
        </div>
        {/literal}
    </div>
    <script src="{base_url}/public/js/modules/site/recadastramentos/lista_por_instituicao.js"></script>
    <script src="{base_url}/public/js/dropzone/dropzone.js"></script>
    <link rel="stylesheet" href="{base_url}/public/js/dropzone/dist/dropzone.css" />
    <link rel="stylesheet" href="{base_url}/public/js/dropzone/dropzone.css" />
{/block}
