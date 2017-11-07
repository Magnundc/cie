{extends file="layout/template.tpl"}
{block name="conteudo"}
    <div class="row" ng-controller="TitulosconfeaController">
        {include file="titulosconfea/modal-form.tpl"}
        {include file="titulosconfea/modal-delete.tpl"}
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">titulosconfea</h1>
            </div>
            <div class="panel-body table-container">
                {include file="titulosconfea/lista.tpl"}
            </div>
            <div class="panel-footer table-container">
                {include file="layout/pagination.tpl"}
            </div>
        </div>
    </div>
    <script src="{base_url}/public/js/modules/site/titulosconfea/index.js"></script>
{/block}
