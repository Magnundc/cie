{extends file="layout/template.tpl"}
{block name="conteudo"}
    <div class="row" ng-controller="ver_historicodecisoesController" ng-init = "init({$id})">
        {include file="historicodecisoes/modal-form.tpl"}
        {include file="historicodecisoes/modal-delete.tpl"}
        {literal}
        <div class="panel panel-default" style="padding: 20px">
        <ul class="list-inline">
            <li > <a href="{{base_url}}/historicodecisoes/pdf/{{historicodecisoe.id}}" target="_blank" class="btn btn-primary btn-large"> <i class="icon icon-file-pdf"></i> Gerar PDF</a></li> 
            <li ng-click="editar(historicodecisoe)"><a href="javascript:void(0)" class="btn btn-primary btn-large"> Editar</a></li>
            <li ng-click="excluir(historicodecisoe)"><a href="javascript:void(0)" class="btn btn-primary btn-large"> Excluir</a></li>
        </ul>
        <br>
        <h1 class="panel-title">Histórico de decisão</h1>
        <br>
        <table class="table table-hover"> 
            <tbody>
                    <tr>
                        <td>Instituição de ensino</td>
                        <td> <a href="/cie/instituicoes/vertinstituicao/{{historicodecisoe.instituicao_id}}" style="color:black">{{historicodecisoe.nome_instituicao}}</td>
                    </tr>
                    <tr>
                        <td>Curso</td>
                        <td>{{historicodecisoe.nome}}</td>
                    </tr>
                    <tr>
                        <td>Título</td>
                        <td>{{historicodecisoe.titulo}}</td>
                    </tr>
                    <tr>
                        <td>Atribuições</td>
                        <td style="text-align: justify">{{historicodecisoe.atribuicoes}}</td>
                    </tr>
                    <tr>
                        <td>Data do deferimento no Crea</td>
                        <td>{{historicodecisoe.data_deferimento}}</td>
                    </tr>
                    <tr>
                        <td>Data de reconhecimento no MEC</td>
                        <td>{{historicodecisoe.data_rec_mec}}</td>
                    </tr>
                    <tr>
                        <td>Válido para ingressos de até</td>
                        <td>{{historicodecisoe.data_validade}}</td>
                    </tr>
                    <tr>
                        <td>Reconhecimento no MEC</td>
                        <td>{{reconhecimento(historicodecisoe.reconhecimento)}}</td>
                    </tr>
                    <tr>
                        <td>Portaria de reconhecimento</td>
                        <td>{{historicodecisoe.portaria_reconhecimento}}</td>
                    </tr>
            </tbody>
            
        </table>
        
        
        
        {/literal}
    <script src="{base_url}/public/js/modules/site/historicodecisoes/ver_historicodecisoes.js"></script>
    <script src="{base_url}/public/componentes/autocomplete/src/jquery.autocomplete.js"></script>    

{/block}