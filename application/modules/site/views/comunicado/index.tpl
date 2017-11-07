{extends file="layout/template.tpl"}
{block name="conteudo"}
    <div class="row" ng-controller="ComunicadoController">
        {include file="comunicado/modal-form.tpl"}
        {include file="comunicado/modal-delete.tpl"}
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">comunicado</h1>
            </div>
            <div class="panel-body table-container">
                {include file="comunicado/lista.tpl"}
            </div>
            <div class="panel-footer table-container">
                {include file="layout/pagination.tpl"}
            </div>
        </div>
    </div>
    <script src="{base_url}/public/js/modules/site/comunicado/index.js"></script>
{/block}
