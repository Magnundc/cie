{extends file="layout/template.tpl"}
{block name="conteudo"}
    <div class="row" ng-controller="verController" ng-init = "init({$id})">
        {include file="instituicoes/modal-form.tpl"}
        {include file="instituicoes/modal-upload.tpl"}
        {include file="instituicoes/modal-delete.tpl"}
        {include file="instituicoes/modal-alerta-subregistro.tpl"}
        {include file="instituicoes/modal-delete-arquivo.tpl"}
        {literal}
            <div class="panel panel-default" style="padding: 20px">
            <ul class="list-inline">
                <li ng-click=""><a href="/cie/instituicoes/listar_cursos/{{instituicoe.id}}" class="btn btn-primary btn-large"> Cursos</a></li>
                <li ng-click=""><a href="/cie/instituicoes/listar_recadastramentos/{{instituicoe.id}}" class="btn btn-primary btn-large"> Recadastramentos</a></li>
                <li ng-click=""><a href="/cie/instituicoes/pdf/{{instituicoe.id}}" target="_blank" class="btn btn-primary btn-large"> Gerar PDF</a></li>
               {/literal}{if $smarty.session.logado->master or $smarty.session.logado->admin}{literal}<li ng-click="editar(instituicoe)"><a href="javascript:void(0)" class="btn btn-primary btn-large"> Editar</a></li>{/literal}{/if}{literal}
               {/literal}{if $smarty.session.logado->master}{literal}<li ng-click="excluir(instituicoe)"><a href="javascript:void(0)" class="btn btn-primary btn-large"> Excluir</a></li>{/literal}{/if}{literal}
            </ul>
            <br>
            <h1 class="panel-title">Instituição de Ensino</h1>
            <table class="table table-hover" > 
                <tbody>
                        <tr>
                            <td style="width: 30%">Nome</td>
                            <td>{{instituicoe.nome}}</td>
                        </tr>
                        <tr>
                            <td>Nome abreviado</td>
                            <td>{{instituicoe.nome_abreviado}}</td>
                        </tr>
                        <tr>
                            <td>CNPJ</td>
                            <td>{{instituicoe.CNPJ}}</td>
                        </tr>
                        <tr>
                            <td>Registro Nacional</td>
                            <td>{{instituicoe.RNI}}</td>
                        </tr>
                        <tr>
                            <td>Data de registro</td>
                            <td>{{instituicoe.data_registro}}</td>
                        </tr>
                        <tr>
                            <td>Nível de ensino</td>
                            <td>{{nivel(instituicoe.nivel_ensino)}}</td>
                        </tr>
                        <tr>
                            <td>Endereço</td>
                            <td>{{instituicoe.endereco}}</td>
                        </tr>
                        <tr>
                            <td>Complemento endereço</td>
                            <td>{{instituicoe.complemento_endereco}}</td>
                        </tr>
                        <tr>
                            <td>CEP</td>
                            <td>{{instituicoe.CEP}}</td>
                        </tr>
                        <tr>
                            <td>Bairro</td>
                            <td>{{instituicoe.bairro}}</td>
                        </tr>
                        <tr>
                            <td>Cidade</td>
                            <td>{{instituicoe.cidade}}</td>
                        </tr>
                        <tr>
                            <td>Estado</td>
                            <td>{{instituicoe.estado}}</td>
                        </tr>
                        <tr>
                            <td>Telefone</td>
                            <td>{{instituicoe.telefone}}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{instituicoe.email}}</td>
                        </tr>
                        <tr>
                            <td>Reitor / Diretor</td>
                            <td>{{instituicoe.reitor_diretor}}</td>
                        </tr>
                        <tr>
                            <td>Email Reitor / Diretor</td>
                            <td>{{instituicoe.email_reitor}}</td>
                        </tr>
                        <tr>
                            <td>Telefone Reitor / Diretor</td>
                            <td>{{instituicoe.telefone_reitor}}</td>
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
                </div>
                        
                </tbody>
               
            <ul class="list-inline">

            </ul>
            <br><br>
        </div>
        {/literal}
    <script src="{base_url}/public/js/modules/site/instituicoes/ver_instituicao.js"></script>
    <script src="{base_url}/public/js/dropzone/dropzone.js"></script>
    <link rel="stylesheet" href="{base_url}/public/js/dropzone/dist/dropzone.css" />
    <link rel="stylesheet" href="{base_url}/public/js/dropzone/dropzone.css" />
{/block}