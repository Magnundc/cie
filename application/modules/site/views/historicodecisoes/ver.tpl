{extends file="layout/template.tpl"}
{block name="conteudo"}
    <div class="row" ng-controller="ver_historicodecisoesController" ng-init = "init({$id})">
        {include file="historicodecisoes/modal-form.tpl"}
        {include file="historicodecisoes/modal-delete.tpl"}
        {include file="historicodecisoes/modal-delete-arquivo.tpl"}
        {include file="historicodecisoes/modal-upload.tpl"}
        {literal}
        <div class="panel panel-default" style="padding: 20px">
        <ul class="list-inline">
            <li > <a href="{{base_url}}/historicodecisoes/pdf/{{historicodecisoe.id}}" target="_blank" class="btn btn-primary btn-large"> <i class="icon icon-file-pdf"></i> Gerar PDF</a></li> 
            {/literal}{if $smarty.session.logado->master or $smarty.session.logado->admin}{literal}<li ng-click="editar(historicodecisoe)"><a href="javascript:void(0)" class="btn btn-primary btn-large"> Editar</a></li>{/literal}{/if}{literal}
            {/literal}{if $smarty.session.logado->master}{literal}<li ng-click="excluir(historicodecisoe)"><a href="javascript:void(0)" class="btn btn-primary btn-large"> Excluir</a></li>{/literal}{/if}{literal}
        </ul>
        <br>
        <h1 class="panel-title">Histórico de decisão</h1>
        <br>
        <table class="table table-hover"> 
            <tbody>
                    <tr>
                        <td  style="width: 25%">Instituição de ensino</td>
                        <td> <a href="/cie/instituicoes/vertinstituicao/{{historicodecisoe.instituicao_id}}" style="color:black">{{historicodecisoe.nome_instituicao}}</td>
                    </tr>
                    <tr ng-show="historicodecisoe.nome!=NULL">
                        <td>Curso</td>
                        <td>{{historicodecisoe.nome}}</td>
                    </tr>
                    <tr ng-hide="historicodecisoe.nome!=NULL">
                        <td>Curso</td>
                        <td>{{historicodecisoe.nomecursol}}</td>
                    </tr>
                    <tr ng-show="historicodecisoe.titulo!=NULL">
                        <td>Título</td>
                        <td>{{historicodecisoe.titulo}}</td>
                    </tr>
                    <tr>
                        <td>Atribuições</td>
                        <td style="text-align: justify">{{historicodecisoe.atribuicoes}}</td>
                    </tr>
                    <tr>
                        <td>Processo</td>
                        <td>{{historicodecisoe.processo}}</td>
                    </tr>
                    <tr>
                        <td>Data do deferimento no Crea</td>
                        <td>{{historicodecisoe.data_deferimento}}</td>
                    </tr>
                    <tr ng-show="ng.curso.nivel=='S'||ng.curso.nivel=='M'">
                        <td>Válido para ingressos</td>
                        <td>de {{historicodecisoe.data_validade_ini}} a {{historicodecisoe.data_validade}}</td>
                    </tr>
                    <tr ng-show="ng.curso.nivel=='S'||ng.curso.nivel=='M'">
                        <td>Cadastro</td>
                        <td>{{reconhecimento(historicodecisoe.cadastramento)}}</td>
                    </tr>
                    <tr>
                        <td>Documento de autorização / reconhecimento</td>
                        <td>{{historicodecisoe.portaria_reconhecimento}}</td>
                    </tr>
                    <tr>
                        <td>Orgão expedidor</td>
                        <td>{{historicodecisoe.orgao_exp}}</td>
                    </tr>
                    <tr>
                        <td>Data de autorizacao / reconhecimento</td>
                        <td>{{historicodecisoe.data_rec_mec}}</td>
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
        
        
        
        {/literal}
    <script src="{base_url}/public/js/modules/site/historicodecisoes/ver_historicodecisoes.js"></script>
    <script src="{base_url}/public/componentes/autocomplete/src/jquery.autocomplete.js"></script>
    <script src="{base_url}/public/js/dropzone/dropzone.js"></script>
    <link rel="stylesheet" href="{base_url}/public/js/dropzone/dist/dropzone.css" />
    <link rel="stylesheet" href="{base_url}/public/js/dropzone/dropzone.css" />    

{/block}