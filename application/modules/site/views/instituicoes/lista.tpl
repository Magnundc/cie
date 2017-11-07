{literal}
    
    
    
    <table id="lista" class="table table-hover" >

    <thead>
            <th >Nome da Instituição</th>
            <th >Nome abreviado</th>
            <th >Cidade</th>
        
    </thead>
    <tfoot class="msg">
        <tr>
            <td colspan="8" class="center" ng-show="lista.length < 1">Nenhum registro encontrado</td>
        </tr>
    </tfoot>
    <tbody>
        <tr ng-repeat="instituicoe in lista">
            <td> <a href="instituicoes/vertinstituicao/{{instituicoe.id}}" style="color:black">{{instituicoe.nome}}</a></td>
            <td > <a href="instituicoes/vertinstituicao/{{instituicoe.id}}" style="color:black">{{instituicoe.nome_abreviado}}</td>
            <td > <a href="instituicoes/vertinstituicao/{{instituicoe.id}}" style="color:black">{{instituicoe.cidade}}</td>
            </tr>
    </tbody>
</table>
{/literal}
