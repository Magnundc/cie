{extends file="layout/template.tpl"}
{block name="conteudo"}
    <div class="row" ng-controller="GradesController">
        {include file="grades/modal-form.tpl"}
        {include file="grades/modal-delete.tpl"}
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">Grades</h1>
            </div>
            <div class="panel-body table-container">
                {include file="grades/lista.tpl"}
            </div>
            <div class="panel-footer table-container">
                {include file="layout/pagination.tpl"}
            </div>
        </div>
    </div>
    <script src="{base_url}/public/js/modules/site/grades/index.js"></script>
{/block}
