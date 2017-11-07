{extends file="layout/template.tpl"}
{block name="conteudo"}
    <div class="row" ng-controller="LogController">
        {include file="log/modal-form.tpl"}
        {include file="log/modal-delete.tpl"}
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">log</h1>
            </div>
            <div class="panel-body table-container">
                {include file="log/lista.tpl"}
            </div>
            <div class="panel-footer table-container">
                {include file="layout/pagination.tpl"}
            </div>
        </div>
    </div>
    <script src="{base_url}/public/js/modules/site/log/index.js"></script>
{/block}
