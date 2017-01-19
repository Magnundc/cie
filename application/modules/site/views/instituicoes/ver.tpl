{extends file="layout/template.tpl"}
{block name="conteudo"}
    <div class="row" ng-controller="verController" ng-init = "init({$id})">
        {include file="instituicoes/modal-form.tpl"}
        {include file="instituicoes/modal-delete.tpl"}
 
                <h1 class="panel-title">Instituições</h1>
                
            
    <table id="lista" class="table table-condensed table-bordered" > 
        
       
            <td >Nome</td>
            <td >Nome abreviado</td>
            <td >Cidade</td>
        
    </thead>
    <tfoot class="msg">
        <tr>
            <td colspan="8" class="center" ng-show="lista.length < 1">Nenhum registro encontrado</td>
        </tr>
    </tfoot>
    {literal}
            <tbody>
                 
                    <th >{{instituicao.nome}}</th>
                    <th >{{instituicao.nome_abreviado}}</th>
                    <th >{{instituicao.cidade}}</th>
                 
            </tbody>
    {/literal}
</table>
            
            

    
    <script src="{base_url}/public/js/modules/site/instituicoes/ver.js"></script>

{/block}