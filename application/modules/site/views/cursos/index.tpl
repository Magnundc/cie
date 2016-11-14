{extends file="layout/template.tpl"}
{block name="conteudo"}
    <div class="row" ng-controller="CursosController">
        {include file="cursos/modal-form.tpl"}
        {include file="cursos/modal-delete.tpl"}
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">Cursos</h1>
            </div>
            
            <div class="container">
                <div class="row">
		<div id="custom-search-input">
                            <div class="input-group col-md-12">
                                <input type="text" class="  search-query form-control" placeholder="Para pesquisar digite um dado do curso" />
                                <span class="input-group-btn">
                                    <button class="btn" type="button">
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                        </div>
                </div>
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
