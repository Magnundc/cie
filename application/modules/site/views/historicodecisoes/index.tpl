{extends file="layout/template.tpl"}
{block name="conteudo"}
    <div class="row" ng-controller="HistoricodecisoesController">
        {include file="historicodecisoes/modal-form.tpl"}
        {include file="historicodecisoes/modal-delete.tpl"}
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">historicodecisoes</h1>
            </div>
            <div class="panel-body table-container">
                {include file="historicodecisoes/lista.tpl"}
            </div>
            <div class="panel-footer table-container">
                {include file="layout/pagination.tpl"}
            </div>
        </div>
    </div>
    <script src="{base_url}/public/js/modules/site/historicodecisoes/index.js"></script>
{/block}
