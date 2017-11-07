{extends file="layout/template.tpl"}
{block name="conteudo"}
    <div class="row" ng-controller="ListasegressoController">
        {include file="listasegresso/modal-form.tpl"}
        {include file="listasegresso/modal-delete.tpl"}
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">listasegresso</h1>
            </div>
            <div class="panel-body table-container">
                {include file="listasegresso/lista.tpl"}
            </div>
            <div class="panel-footer table-container">
                {include file="layout/pagination.tpl"}
            </div>
        </div>
    </div>
    <script src="{base_url}/public/js/modules/site/listasegresso/index.js"></script>
{/block}
