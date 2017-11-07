{extends file="layout/template.tpl"}
{block name="conteudo"}
    <div class="row" ng-controller="ver_recadastramentoController" ng-init = "init({$id})">
        {include file="recadastramentos/modal-form.tpl"}
        {include file="recadastramentos/modal-delete.tpl"}
        {include file="recadastramentos/modal-delete-arquivo.tpl"}
        {include file="recadastramentos/modal-upload.tpl"}
        {literal}
        <div class="panel panel-default" style="padding: 20px">
            <br>
            <ul class="list-inline">
                <li ng-click=""><a href="{{base_url}}/recadastramentos/pdf/{{recadastramento.id}}" target="_blank" class="btn btn-primary btn-large"> <i class="icon icon-file-pdf"></i> Gerar PDF</a></li> 
                {/literal}{if $smarty.session.logado->master or $smarty.session.logado->admin}{literal}<li ng-click="editar(recadastramento)"><a href="javascript:void(0)" class="btn btn-primary btn-large"> Editar</a></li>{/literal}{/if}{literal}
                {/literal}{if $smarty.session.logado->master or $smarty.session.logado->admin}{literal}<li ng-click="excluir(recadastramento)"><a href="javascript:void(0)" class="btn btn-primary btn-large"> Excluir</a></li>{/literal}{/if}{literal}
            </ul>
            <br>
            <h1 class="panel-title">Recadastramento da instituição</h1>
            <br>
            <table class="table table-hover"> 
                <tbody>
                        <tr>
                            <td style="width: 30%">Nome Atual</td>
                            <td> <a href="/cie/instituicoes/vertinstituicao/{{recadastramento.instituicao_id}}" style="color:black">{{recadastramento.nome_instituicao}}</td>
                        </tr>
                        <tr>
                            <td>Nome antigo</td>
                            <td>{{recadastramento.nome}}</td>
                        </tr>
                        <tr>
                            <td>Data do recadastramento</td>
                            <td>{{recadastramento.data_recadastro}}</td>
                        </tr>
                        <tr>
                            <td>Processo</td>
                            <td>{{recadastramento.processo}}</td>
                        </tr>
                        <tr>
                            <td>Alterações</td>
                            <td>{{recadastramento.alteracoes}}</td>
                        </tr>
                        <tr>
                            <td>Arquivos:</td>
                        </tr>
                        <tr ng-repeat="x in arquivos">
                            <!--<td>Arquivo</td>-->
                            <!--<td><a ng-href="{{ base_url+'/public/arquivos/'+x.md5_nome}}" download><i class="icon icone icon-file" style="color: black"></a></td>-->
                            <td></td>
                            <td class="upper"><a style="color: black" ng-href="{{ base_url+'/public/arquivos/'+x.md5_nome}}" target="_blank">{{x.nome}}</a></td>
                        </tr> 
                </tbody>
            </table>
        </div>
        {/literal}
    </div>
    <script src="{base_url}/public/js/modules/site/recadastramentos/ver_recadastramento.js"></script>
    <script src="{base_url}/public/componentes/autocomplete/src/jquery.autocomplete.js"></script>
    <script src="{base_url}/public/js/dropzone/dropzone.js"></script>
    <link rel="stylesheet" href="{base_url}/public/js/dropzone/dist/dropzone.css" />
    <link rel="stylesheet" href="{base_url}/public/js/dropzone/dropzone.css" />    
{/block}