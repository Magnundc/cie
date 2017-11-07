{extends file="layout/template.tpl"}
{block name="conteudo"}
    <div class="row" ng-controller="ArquivosController">
        {include file="arquivos/modal-form.tpl"}
        {include file="arquivos/modal-delete.tpl"}
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">arquivos</h1>
            </div>
            <div class="panel-body table-container">
                {include file="arquivos/lista.tpl"}
            </div>
            <div class="panel-footer table-container">
                {include file="layout/pagination.tpl"}
            </div>
        </div>
    </div>
    <script src="{base_url}/public/js/modules/site/arquivos/index.js"></script>
{/block}
