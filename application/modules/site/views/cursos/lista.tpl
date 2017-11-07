{literal}
<table class="table table-hover">
    <thead>
        <tr>
            <th class="min">
                <span class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="glyphicon glyphicon-menu-hamburger"></i>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li ng-click="incluir(curso)"><a href="javascript:void(0)"><i class="icon-plus-2"></i> Incluir</a></a></li>
                    </ul>
                </span>
            </th>
            <th width="5%">id</th>
            <th>instituicao id</th>
            <th>cursosconfea id</th>
            <th>titulosconfea id</th>
            <th>atribuicoes</th>
            <th>data rec mec</th>
            <th>data deferimento</th>
            <th>nivel</th>
            <th>data validade</th>
            <th>reconhecimento</th>
            <th>portaria reconhecimento</th>
            <th>nome coordenador</th>
            <th>telefone coordenador</th>
            <th>email coordenador</th>
            <th>endereco coordenacao</th>
            <th>complemento endereco coordenacao</th>
            <th>cep coordenacao</th>
            <th>cidade coordenacao</th>
            <th>estado coordenacao</th>
            <th>criado por</th>
            <th>data criacao</th>
            <th>alterado por</th>
            <th>usr sic</th>
            <th>data alteracao</th>
            <th>arquivos id</th>
        </tr>
    </thead>
    <tfoot class="msg">
        <tr>
            <td colspan="8" class="center" ng-show="lista.length < 1">Nenhum registro encontrado</td>
        </tr>
    </tfoot>
    <tbody>
        <tr ng-repeat="curso in lista">
            <td class="center">
                <span class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="icon-cogs"></i>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li ng-click="editar(curso)"><a href="javascript:void(0)"><i class="icon-pencil-4"></i> Editar</a></li>
                        <li ng-click="excluir(curso)"><a href="javascript:void(0)"><i class="icon-trashcan"></i> Excluir</a></li>
                    </ul>
                </div>
            </span>
        </td>
            <td  class="right">{{curso.id}}</td>
            <td >{{curso.instituicao_id}}</td>
            <td >{{curso.cursosconfea_id}}</td>
            <td >{{curso.titulosconfea_id}}</td>
            <td >{{curso.atribuicoes}}</td>
            <td >{{curso.data_rec_mec}}</td>
            <td >{{curso.data_deferimento}}</td>
            <td >{{curso.nivel}}</td>
            <td >{{curso.data_validade}}</td>
            <td >{{curso.reconhecimento}}</td>
            <td >{{curso.portaria_reconhecimento}}</td>
            <td >{{curso.nome_coordenador}}</td>
            <td >{{curso.telefone_coordenador}}</td>
            <td >{{curso.email_coordenador}}</td>
            <td >{{curso.endereco_coordenacao}}</td>
            <td >{{curso.complemento_endereco_coordenacao}}</td>
            <td >{{curso.cep_coordenacao}}</td>
            <td >{{curso.cidade_coordenacao}}</td>
            <td >{{curso.estado_coordenacao}}</td>
            <td >{{curso.criado_por}}</td>
            <td >{{curso.data_criacao}}</td>
            <td >{{curso.alterado_por}}</td>
            <td >{{curso.usr_sic}}</td>
            <td >{{curso.data_alteracao}}</td>
            <td >{{curso.arquivos_id}}</td>
        </tr>
    </tbody>
</table>
{/literal}
