{extends file="layout/template.tpl"}
{block name="conteudo"}
    <div class="row" ng-controller="ver_cursoController" ng-init = "init({$id})">
        {include file="cursos/modal-form.tpl"}
        {include file="cursos/modal-delete.tpl"}
        {include file="cursos/modal-alerta-subregistro.tpl"}
        {include file="cursos/modal_ingresso.tpl"}
        {include file="cursos/modal-delete-arquivo.tpl"}
        {include file="cursos/modal-upload.tpl"}
        {literal}
         <div class="panel panel-default" style="padding: 20px">
        <br>
        <ul class="list-inline">
            <li ng-click=""><a href="/cie/instituicoes/listar_historicodecisoes/{{curso.id}}" class="btn btn-primary btn-large"> Histórico de Decisões</a></li>
            {/literal}{if $smarty.session.logado->master or $smarty.session.logado->admin or $smarty.session.logado->lista_egresso}{literal}<li ng-click=""><a href="/cie/instituicoes/listar_listasegresso/{{curso.id}}" class="btn btn-primary btn-large"> Lista de Egressos</a></li>{/literal}{/if}{literal}
            <li ng-click="gerarPdf(curso.id)"><a href="javascript:void(0)" class="btn btn-primary btn-large"> <i class="icon icon-file-pdf"></i> Gerar PDF</a></li> 
            
            {/literal}{if $smarty.session.logado->master or $smarty.session.logado->admin}{literal}<li ng-click="editar(curso)"><a href="javascript:void(0)" class="btn btn-primary btn-large"> Editar</a></li>{/literal}{/if}{literal}
            {/literal}{if $smarty.session.logado->master}{literal}<li ng-click="excluir(curso)"><a href="javascript:void(0)" class="btn btn-primary btn-large"> Excluir</a></li>{/literal}{/if}{literal}
        </ul>
        <br>
        <h1 class="panel-title">Curso</h1>
        <br>
        
        <table class="table table-hover"> 
            <tbody>
                    <tr>
                        <td>Instituição de ensino</td>
                        <td> <a href="/cie/instituicoes/vertinstituicao/{{curso.instituicao_id}}" style="color:black">{{curso.nome_instituicao}}</td>
                    </tr>
                    <tr>
                        <td>Nível do curso</td>
                        <td>{{nivel(curso.nivel)}}</td>
                    </tr>
                    <tr>
                        <td>Modalidade</td>
                        <td>{{modalidade(curso.modalidade)}}</td>
                    </tr>
                    <tr ng-show="curso.nome!=NULL">
                        <td>Curso</td>
                        <td>{{curso.nome}}</td>
                    </tr>
                    <tr ng-hide="curso.nome!=NULL">
                        <td>Curso</td>
                        <td>{{curso.nomecursol}}</td>
                    </tr>
                    <tr ng-show="curso.titulo!=NULL">
                        <td>Título</td>
                        <td>{{curso.titulo}}</td>
                    </tr>
                    <tr>
                        <td>Atribuições</td>
                        <td style="text-align: justify">{{curso.atribuicoes}}</td>
                    </tr>
                    <tr>
                        <td>Data do deferimento no Crea</td>
                        <td>{{curso.data_deferimento}}</td>
                    </tr>
                    <tr ng-show="curso.data_validade_ini!=NULL">
                        <td>Período de validade</td>
                        <td>de {{curso.data_validade_ini}} a {{curso.data_validade}}</td>
                    </tr>
                    <tr ng-show="curso.desc_validade!=NULL">
                        <td>Descrição da validade</td>
                        <td>{{curso.desc_validade}}</td>
                    </tr>
                    <tr ng-show="curso.cadastramento!=NULL">
                        <td>Cadastro:</td>
                        <td>{{cadastramento(curso.cadastramento)}}</td>
                    </tr>
                    <tr>
                        <td>Documento de autorização / reconhecimento</td>
                        <td>{{curso.portaria_reconhecimento}} emitido por {{curso.orgao_exp}}</td>
                    </tr>
                    <tr>
                        <td>Data de autorização / reconhecimento</td>
                        <td>{{curso.data_rec_mec}}</td>
                    </tr>
                    <tr>
                        <td>Processo</td>
                        <td>{{curso.processo}}</td>
                    </tr>
                    <tr ng-show="curso.nome_coordenador!=NULL">
                        <td>Coordenação</td>
                        <td>{{curso.nome_coordenador}}</td>
                    </tr>
                    <tr ng-show="curso.telefone_coordenador!=NULL">
                        <td>Telefone</td>
                        <td>{{curso.telefone_coordenador}}</td>
                    </tr>
                    <tr ng-show="curso.email_coordenador!=NULL">
                        <td>Email</td>
                        <td>{{curso.email_coordenador}}</td>
                    </tr>
                    <tr ng-show="curso.endereco_coordenacao!=NULL">
                        <td>Endereço</td>
                        <td>{{curso.endereco_coordenacao}} {{curso.complemento_endereco_coordenacao}}</td>
                    </tr>
                    <tr ng-show="curso.cidade_coordenacao!=NULL">
                        <td>Cidade</td>
                        <td>{{curso.cidade_coordenacao}}</td>
                    </tr>
                    <tr ng-show="curso.estado_coordenacao!=NULL">
                        <td>Estado</td>
                        <td>{{curso.estado_coordenacao}}</td>
                    </tr>
                    <tr ng-show="curso.cep_coordenacao!=NULL">
                        <td>CEP</td>
                        <td>{{curso.cep_coordenacao}}</td>
                    </tr>
                    <tr>
                            <td>Arquivos:</td>
                        </tr>
                        <tr ng-repeat="x in arquivos">
                            <!--<td>Arquivo</td>-->
                            <!--<td><a ng-href="{{ base_url+'/public/arquivos/'+x.md5_nome}}" download><i class="icon icone icon-file" style="color: black"></a></td>-->
                            <td></td>
                            <td class="upper"><a style="color: black" ng-href="{{ base_url+'/public/arquivos/'+x.md5_nome}}" target="_blank">{{x.nome}}</a></td>
                        </tr> 
            </tbody>
        </table>
        {/literal}
    <script src="{base_url}/public/js/modules/site/cursos/ver_curso.js"></script>
    <script src="{base_url}/public/componentes/autocomplete/src/jquery.autocomplete.js"></script>
    <script src="{base_url}/public/js/dropzone/dropzone.js"></script>
    <link rel="stylesheet" href="{base_url}/public/js/dropzone/dist/dropzone.css" />
    <link rel="stylesheet" href="{base_url}/public/js/dropzone/dropzone.css" />    

{/block}