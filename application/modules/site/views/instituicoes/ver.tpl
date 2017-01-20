{extends file="layout/template.tpl"}
{block name="conteudo"}
    <div class="row" ng-controller="verController" ng-init = "init({$id})">
        {include file="instituicoes/modal-form.tpl"}
        {include file="instituicoes/modal-delete.tpl"}
        <br>
        <h1 class="panel-title">Instituição de Ensino</h1>
        <br>
        <table id="lista" class="table table-condensed table-bordered" > 
            {literal}
            <tbody>
                    <tr>
                        <td>Nome</td>
                        <td>{{instituicao.nome}}</td>
                    </tr>
                    <tr>
                        <td>Nome abreviado</td>
                        <td>{{instituicao.nome_abreviado}}</td>
                    </tr>
                    <tr>
                        <td>CNPJ</td>
                        <td>{{instituicao.cnpj}}</td>
                    </tr>
                    <tr>
                        <td>Registro Nacional</td>
                        <td>{{instituicao.rni}}</td>
                    </tr>
                    <tr>
                        <td>Crea de registro</td>
                        <td>{{instituicao.crea}}</td>
                    </tr>
                    <tr>
                        <td>Data de registro</td>
                        <td>{{instituicao.data_registro}}</td>
                    </tr>
                    <tr>
                        <td>Nível de ensino</td>
                        <td>{{instituicao.nivel_ensino}}</td>
                    </tr>
                    <tr>
                        <td>Tipo de logradouro</td>
                        <td>{{instituicao.tlogradouro}}</td>
                    </tr>
                    <tr>
                        <td>Descrição do logradouro</td>
                        <td>{{instituicao.desclogradouro}}</td>
                    </tr>
                    <tr>
                        <td>Complemento do logradouro</td>
                        <td>{{instituicao.complementologradouro}}</td>
                    </tr>
                    <tr>
                        <td>Número do logradouro</td>
                        <td>{{instituicao.nlogradouro}}</td>
                    </tr>
                    <tr>
                        <td>CEP</td>
                        <td>{{instituicao.cep}}</td>
                    </tr>
                    <tr>
                        <td>Cidade</td>
                        <td>{{instituicao.cidade}}</td>
                    </tr>
                    <tr>
                        <td>Estado</td>
                        <td>{{instituicao.estado}}</td>
                    </tr>
                    <tr>
                        <td>Telefone</td>
                        <td>{{instituicao.telefone}}</td>
                    </tr>
                    <tr>
                        <td>Estado</td>
                        <td>{{instituicao.estado}}</td>
                    </tr>
            </tbody>
            {/literal}
        </table>
            
            

    
    <script src="{base_url}/public/js/modules/site/instituicoes/ver.js"></script>

{/block}