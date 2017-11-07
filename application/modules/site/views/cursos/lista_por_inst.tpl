{extends file="layout/template.tpl"}
{block name="conteudo"}
    <div class="row" ng-controller="Lista_por_instituicaoController" ng-init= "init({$instituicao_id})" >{*lista_da_instituicao é uma função javascript no arquivo /public/js/moduules/site/cursos/lista_por_instituicao.js*}
        {include file="cursos/modal-form.tpl"}
        {include file="cursos/modal-delete.tpl"}
        {include file="cursos/modal-delete-arquivo.tpl"}
        {include file="cursos/modal-upload.tpl"}
    {literal}
    <div class="panel panel-default" style="padding: 20px">
                
                <div class="col-lg-9">
                    <h1 class="panel-title" style="text-transform: uppercase">Cursos da instituição <ins>{{cur.nome_instituicao}}</ins></h1>
                </div>
                <div class="col-lg-1" style="padding-left: 50px">
                    <ul class="list-inline">
                        {/literal}{if $smarty.session.logado->master or $smarty.session.logado->admin}{literal}<li ng-click="incluir(curso)" href="javascript:void(0)""><a class="btn btn-primary btn-large"> Incluir Curso</a></li>{/literal}{/if}{literal}
                    </ul>
                </div>    
                <br>
                <br>
                <br>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th style="text-align: left">Curso</th>
                            <th style="text-align: left">Título</th>
                            <th style="text-align: left">Nível</th>
                        </tr>
                    </thead>
                    <tfoot class="msg">
                        <tr>
                            <td colspan="8" class="center" ng-show="cursos.length < 1">Nenhum registro encontrado</td>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr ng-repeat="curso in cursos"> {/literal}{*cursos se refere ao objeto gerado pelo javascript no arquivo /public/js/moduules/site/cursos/lista_por_instituicao.js linha na função ng.lista_da_instituicao*}{literal}
                            <td > <a href="/cie/instituicoes/vercurso/{{curso.id}}" style="color:black">{{curso.nome}}{{curso.nomecursol}}</td>
                            <td > <a href="/cie/instituicoes/vercurso/{{curso.id}}" style="color:black">{{curso.titulo}}</td>
                            <td > <a href="/cie/instituicoes/vercurso/{{curso.id}}" style="color:black">{{nivel(curso.nivel)}}</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                
    </div>
    {/literal}
    <script src="{base_url}/public/js/modules/site/cursos/lista_por_instituicao.js"></script>
    <script src="{base_url}/public/componentes/autocomplete/src/jquery.autocomplete.js"></script>    
    <script src="{base_url}/public/js/dropzone/dropzone.js"></script>
    <link rel="stylesheet" href="{base_url}/public/js/dropzone/dist/dropzone.css" />
    <link rel="stylesheet" href="{base_url}/public/js/dropzone/dropzone.css" />


{/block}
