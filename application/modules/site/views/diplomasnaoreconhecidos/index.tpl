{extends file="layout/template.tpl"}
{block name="conteudo"}
    <div class="row" ng-controller="DiplomasnaoreconhecidosController">
        {include file="diplomasnaoreconhecidos/modal-form.tpl"}
        {include file="diplomasnaoreconhecidos/modal-delete.tpl"}
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">diplomasnaoreconhecidos</h1>
            </div>
            <div class="panel-body table-container">
                {include file="diplomasnaoreconhecidos/lista.tpl"}
            </div>
            <div class="panel-footer table-container">
                {include file="layout/pagination.tpl"}
            </div>
        </div>
    </div>
    <script src="{base_url}/public/js/modules/site/diplomasnaoreconhecidos/index.js"></script>
{/block}
