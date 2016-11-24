{extends file="layout/template.tpl"}
{block name="conteudo"}
    <div class="row" ng-controller="ContatosController">
        {include file="contatos/modal-form.tpl"}
        {include file="contatos/modal-delete.tpl"}
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">Contatos</h1>
            </div>
            
                {*Painel de pesquisa*}
                <div class="panel-body">
                <div class="container">
                <form method ="GET" >
                    <div class="input-group">
                    <input ng-model="form.pesquisa" autocomplete="on" type="submit" class="form-control" name="q" placeholder="Pesquise por um contato">
                        <span class="input-group-btn">
                            <button ng-click="pesquisar()" class="btn btn" type="button"><span class="glyphicon glyphicon-search"> </span>
                        </button>
                      </span>
                    </div>
                </form>
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
