{extends file="layout/template.tpl"}
{block name="conteudo"}
    <div class="row" ng-controller="InstituicoesController">
        {include file="instituicoes/modal-form.tpl"}
        {include file="instituicoes/modal-delete.tpl"}
        
                
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">Instituições</h1>
 
            </div>
            
                
            <div class="panel-body">
                <input ng-model="form.pesquisa" type="text" />
                <input ng-click="pesquisar()" type="button" value="pesquisar" />
                {literal}
                <ul> 
                    <li ng-repeat="d in dados"> {{d.nome}}</li>
                </ul>
                {/literal}
               {include file="instituicoes/lista.tpl"}
                
            
            </div>
            
            <div class="panel-footer table-container">
                {include file="layout/pagination.tpl"}
            </div>
        </div>
    </div>
    <script src="{base_url}/public/js/modules/site/instituicoes/index.js"></script>
{/block}
