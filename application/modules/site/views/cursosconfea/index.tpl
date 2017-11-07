{extends file="layout/template.tpl"}
{block name="conteudo"}
    <div class="row" ng-controller="CursosconfeaController">
        {include file="cursosconfea/modal-form.tpl"}
        {include file="cursosconfea/modal-delete.tpl"}
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">cursosconfea</h1>
            </div>
            <div class="panel-body table-container">
                {include file="cursosconfea/lista.tpl"}
            </div>
            <div class="panel-footer table-container">
                {include file="layout/pagination.tpl"}
            </div>
        </div>
    </div>
    <script src="{base_url}/public/js/modules/site/cursosconfea/index.js"></script>
{/block}
