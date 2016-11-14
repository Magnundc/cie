{extends file="layout/template.tpl"}
{block name="conteudo"}
    <div class="row" ng-controller="ContatosController">
        {include file="contatos/modal-form.tpl"}
        {include file="contatos/modal-delete.tpl"}
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">Contatos</h1>
            </div>
            <div class="container">
	<div class="row">
		
           <div id="custom-search-input">
                            <div class="input-group col-md-12">
                                <input type="text" class="  search-query form-control" placeholder="Para pesquisar digite um dado do contato" />
                                <span class="input-group-btn">
                                    <button class="btn" type="button">
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                        </div>
	</div>
            <div class="panel-body table-container">
                {include file="contatos/lista.tpl"}
            </div>
            <div class="panel-footer table-container">
                {include file="layout/pagination.tpl"}
            </div>
        </div>
    </div>
    <script src="{base_url}/public/js/modules/site/contatos/index.js"></script>
{/block}
