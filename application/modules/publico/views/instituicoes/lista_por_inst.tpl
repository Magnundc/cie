{extends file="layout/template.tpl"}
{block name="conteudo"}
    <div class="row" style="background-color: white" ng-controller="Lista_por_instituicaoController" ng-init= "init({$instituicao_id})" >{*lista_da_instituicao é uma função javascript no arquivo /public/js/moduules/site/cursos/lista_por_instituicao.js*}
    {include file="instituicoes/modal_ingresso.tpl"}
    {literal}
    <div class="panel panel-default" style="padding: 20px">
                
                <div class="col-lg-9">
                    <h1 class="panel-title" style="padding-left: 30px"><i class="fa fa-graduation-cap" aria-hidden="true"></i>  Cursos da instituição <ins>{{cur.nome_instituicao}}</ins></h1>
                </div>
                <br>
                <br>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th style="text-align: left">Curso</th>
                            <th style="text-align: left">Título</th>
                            <th style="text-align: left">Nível</th>
                            <th style="text-align: left">Documentos</th>
                        </tr>
                    </thead>
                    <tfoot class="msg">
                        <tr>
                            <td colspan="8" class="center" ng-show="cursos.length < 1">Nenhum registro encontrado</td>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr ng-repeat="curso in cursos"> {/literal}{*cursos se refere ao objeto gerado pelo javascript no arquivo /public/js/moduules/site/cursos/lista_por_instituicao.js linha na função ng.lista_da_instituicao*}{literal}
                            <td ng-click="gerarPdf(curso.id)"><a title="Gerar PDF do Cadastro do Curso" style="color:black">{{curso.nome}}{{curso.nomecursol}}</td>
                            <td ng-click="gerarPdf(curso.id)"><a title="Gerar PDF do Cadastro do Curso" style="color:black">{{curso.titulo}}</td>
                            <td ng-click="gerarPdf(curso.id)"><a title="Gerar PDF do Cadastro do Curso" style="color:black">{{nivel(curso.nivel)}}</td>
                            <td ng-click="gerarPdf(curso.id)"><a title="Visualizar documentos do processo de Cadastro do Curso" href="" style="color:black"><i style="padding-left: 50%" class="glyphicon glyphicon-file"></i></td>
                        </tr>
                    </tbody>
                </table>
                <br>
                
    </div>
    {/literal}
    <script src="{base_url}/public/js/modules/publico/instituicoes/lista_por_instituicao.js"></script>
    



{/block}
