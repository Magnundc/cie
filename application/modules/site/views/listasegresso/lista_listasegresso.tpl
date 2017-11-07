{extends file="layout/template.tpl"}
{block name="conteudo"}
    <div class="row" ng-controller="Listar_listasegressoController" ng-init= "init({$cursos_id})" >{*lista_da_instituicao é uma função javascript no arquivo /public/js/moduules/site/cursos/lista_por_instituicao.js*}
        {include file="listasegresso/modal-form.tpl"}
        {include file="listasegresso/modal-delete.tpl"}
        {include file="listasegresso/modal-upload.tpl"}
        {literal}
            <div class="panel panel-default" style="padding: 20px">
            <br>
            <ul class="list-inline">
                    <li ng-click="incluir(listasegress)"><a href="javascript:void(0)"><a class="btn btn-primary btn-large"> Incluir egresso</a></li>
               <li ng-click="incluir(listasegress)"><a href="javascript:void(0)"><a class="btn btn-primary btn-large"> Incluir lista CSV</a></li>
            </ul>
               <br>
            <h1 class="panel-title" style="text-transform: uppercase">Lista de egressos do curso de <ins>{{listasegresso.curos_id}}</ins> da instituição <ins>{{listasegresso.nome_instituicao}}</ins></h1>
            <br>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th style="text-align: left">Curso</th>
                        <th style="text-align: left">Ano de Colação</th>
                    </tr>
                </thead>
                <tfoot class="msg">
                    <tr>
                        <td colspan="8" class="center" ng-show="listasegresso.length < 1">Nenhum registro encontrado</td>
                    </tr>
                </tfoot>
                <tbody>
                    <tr ng-repeat="listasegress in listasegresso"> {/literal}{*cursos se refere ao objeto gerado pelo javascript no arquivo /public/js/moduules/site/cursos/lista_por_instituicao.js linha na função ng.lista_da_instituicao*}{literal}
                        <td > <a href="/cie/instituicoes/ver_listasegresso/{{listasegress.id}}" style="color:black">{{listasegress.cursos_id}}</td>
                        <td > <a href="/cie/instituicoes/ver_listasegresso/{{listasegress.id}}" style="color:black">{{listasegress.colacao|formatarData}}</td>
                    </tr>
                </tbody>
            </table>
            <br>
            
            
        </div>
    </div>
    {/literal}
    <script src="{base_url}/public/js/modules/site/listasegresso/listar_listasegresso.js"></script>
    <script src="{base_url}/public/componentes/autocomplete/src/jquery.autocomplete.js"></script>    
    <script src="{base_url}/public/js/dropzone/dropzone.js"></script>
    <link rel="stylesheet" href="{base_url}/public/js/dropzone/dist/dropzone.css" />
    <link rel="stylesheet" href="{base_url}/public/js/dropzone/dropzone.css" />


{/block}
