{extends file="layout/template.tpl"}
{block name="conteudo"}
    <div class="row" ng-controller="RecadastramentosController">
        {include file="recadastramentos/modal-form.tpl"}
        {include file="recadastramentos/modal-delete.tpl"}
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">recadastramentos</h1>
            </div>
            <div class="panel-body table-container">
                {include file="recadastramentos/lista.tpl"}
            </div>
            <div class="panel-footer table-container">
                {include file="layout/pagination.tpl"}
            </div>
        </div>
    </div>
    <script src="{base_url}/public/js/modules/site/recadastramentos/index.js"></script>
{/block}
