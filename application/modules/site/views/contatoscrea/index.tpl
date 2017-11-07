{extends file="layout/template.tpl"}
{block name="conteudo"}
    <div class="row" ng-controller="ContatoscreaController">
        {include file="contatoscrea/modal-form.tpl"}
        {include file="contatoscrea/modal-delete.tpl"}
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">contatoscrea</h1>
            </div>
            <div class="panel-body table-container">
                {include file="contatoscrea/lista.tpl"}
            </div>
            <div class="panel-footer table-container">
                {include file="layout/pagination.tpl"}
            </div>
        </div>
    </div>
    <script src="{base_url}/public/js/modules/site/contatoscrea/index.js"></script>
{/block}
