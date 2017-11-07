{literal}
    <table id="listac" class="table table-hover">

    <thead>
            <th >Curso</th>
            <th >Nível</th>
            <th >Instituição</th>
            <th >Cidade</th>
            <th >Documentos</th>
        
    </thead>
    <tfoot class="msg">
        <tr>
            <td colspan="8" class="center" ng-show="listac.length < 1">Nenhum registro encontrado</td>
        </tr>
    </tfoot>
    <tbody>
        <tr ng-repeat="curso in listac">
            
            <td ng-click="gerarPdf(curso.id)"> <a title="Visualizar PDF com dados do curso" href="publico/listar_por_curso/{{curso.id}}" style="color:black">{{curso.nome}}{{curso.nomecursol}}</a></td>
            <td ng-click="gerarPdf(curso.id)"> <a title="Visualizar PDF com dados do curso" href="publico/listar_por_curso/{{curso.id}}" style="color:black">{{nivel(curso.nivel)}}</td>
            <td ng-click="gerarPdf(curso.id)"> <a title="Visualizar PDF com dados do curso" href="publico/listar_por_curso/{{curso.id}}" style="color:black">{{curso.nomeins}}</a></td>
            <td ng-click="gerarPdf(curso.id)"> <a title="Visualizar PDF com dados do curso" href="publico/listar_por_curso/{{curso.id}}" style="color:black">{{curso.cidade}}</a></td>
            <td style="text-align: center" ng-click="op_curso(curso.id)"><a href="" title="Visualizar documentos do processo de Cadastro do Curso" style="color:black"><button class="btn btn-xs">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="glyphicon glyphicon-file center"></i>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button></td>

</tr>
    </tbody>
</table>
{/literal}
