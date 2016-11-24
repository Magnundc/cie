{extends file="layout/template.tpl"}
{block name="conteudo"}
    <div class="row" ng-controller="InstituicoesController">
        {include file="instituicoes/modal-form.tpl"}
        {include file="instituicoes/modal-delete.tpl"}
        
                
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">Instituições</h1>
                
                {*Painel de pesquisa*}
                <div class="panel-body">
                <div class="container">
                <form method ="GET" >
                    <div class="input-group">
                    <input id="pesquisa" ng-model="form.pesquisa" type="text" class="form-control" 
                           placeholder="Pesquise por uma insituição" ng-focus="focus=true"
                           ng-blur="focus=true" ng-change= "pesquisar(form.pesquisa)" maxlength="100">
                            <span class="input-group-btn">
                            <button ng-click="pesquisar()" class="btn btn" type="button">
                            <span class="glyphicon glyphicon-search"> </span>
                        </button>
                      </span>
                    </div>
                </form>
                </div>
                </div>
                <script>  </script>
           
            
            <div class="panel-body">
                <p id="lista">{include file="instituicoes/pesquisa.tpl"}</p>
                
                {*<input ng-model="form.pesquisa" type="text" />
                <input ng-click="pesquisar()" type="button" value="pesquisar" />
                {literal}
                <ul> 
                    <li ng-repeat="d in dados"> {{d.nome}}</li>
                </ul>
                {/literal}*}
                
                {*include file="instituicoes/lista.tpl"*}
                
                <script>
                
                </script>
            
            </div>
            
            <div class="panel-footer table-container">
                {include file="layout/pagination.tpl"}
            </div>
        </div>
    </div>
    <script src="{base_url}/public/js/modules/site/instituicoes/index.js"></script>
{/block}
