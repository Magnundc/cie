{extends file="layout/template.tpl"}
{block name="conteudo"}
    <div class="row" ng-controller="InstituicoesController">
        {include file="instituicoes/modal-form.tpl"}
        {include file="instituicoes/modal-delete.tpl"}
        {include file="instituicoes/modal-upload.tpl"}
        {include file="instituicoes/modal-delete-arquivo.tpl"}
        <div class="panel panel-default" style="padding: 20px">
            
            <div class="col-lg-9">
                <h1 class="panel-title" style="padding-left: 30px">Instituições de Ensino cadastradas no CREA-GO</h1>
            </div>
            <div class="col-lg-1">
                <ul class="list-inline">
                    {if $smarty.session.logado->master or $smarty.session.logado->admin}<li><a ng-click="incluir(instituicoe)" class="btn btn-primary btn-large">Cadastrar Instituição</a></li>{/if}
                </ul>
            </div>
            <br>
            <br>
            <div class="panel-heading">
                {*Painel de pesquisa*}
                <div class="panel-body">
                    <div class="container">
                        <input  maxlength="100" type="text" class="form-control" id="pesquisa" autocomplete="off" placeholder="Pesquise por uma instituição" />
                    </div>
                </div>
                <div class="panel-body">
                    {include file="instituicoes/lista.tpl"}
                    {include file="layout/pagination.tpl"}
                    <br>
                </div>
            </div>
        </div>
        
    </div>
    <script src="{base_url}/public/js/modules/site/instituicoes/index.js"></script>
    <script src="{base_url}/public/componentes/autocomplete/src/jquery.autocomplete.js"></script>
    <script src="{base_url}/public/js/dropzone/dropzone.js"></script>
    <link rel="stylesheet" href="{base_url}/public/js/dropzone/dist/dropzone.css" />
    <link rel="stylesheet" href="{base_url}/public/js/dropzone/dropzone.css" />
{/block}
