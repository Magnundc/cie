{extends file="layout/template.tpl"}
{block name="conteudo"}
    <div class="row" ng-controller="ColaboradoresController">
        {include file="colaboradores/modal-form.tpl"}
        {include file="colaboradores/modal-delete.tpl"}
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">colaboradores</h1>
            </div>
            <div class="panel-body table-container">
                {include file="colaboradores/lista.tpl"}
            </div>
            <div class="panel-footer table-container">
                {include file="layout/pagination.tpl"}
            </div>
        </div>
    </div>
    <script src="{base_url}/public/js/modules/site/colaboradores/index.js"></script>
{/block}
