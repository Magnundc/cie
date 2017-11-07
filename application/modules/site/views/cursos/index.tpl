{extends file="layout/template.tpl"}
{block name="conteudo"}
    <div class="row" ng-controller="CursosController">
        {include file="cursos/modal-form.tpl"}
        {include file="cursos/modal-delete.tpl"}
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">cursos</h1>
            </div>
            <div class="panel-body table-container">
                {include file="cursos/lista.tpl"}
            </div>
            <div class="panel-footer table-container">
                {include file="layout/pagination.tpl"}
            </div>
        </div>
    </div>
    <script src="{base_url}/public/js/modules/site/cursos/index.js"></script>
{/block}
