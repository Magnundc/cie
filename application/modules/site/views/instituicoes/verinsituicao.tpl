{extends file="layout/template.tpl"}
{block name="conteudo"}
    <div class="row" ng-controller="InstituicoesController">
        {include file="instituicoes/modal-form.tpl"}
        {include file="instituicoes/modal-delete.tpl"}
        
                
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">Instituições</h1>
                
                       
            
            <div class="panel-body">
            
            </div>
            
            
        </div>
    </div>
    <script src="{base_url}/public/js/modules/site/instituicoes/index.js"></script>
{/block}
