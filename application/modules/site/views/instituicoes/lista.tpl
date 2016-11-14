{literal}
<table class="table table-condensed table-bordered">
    <thead>
        <tr>
            <th class="min">
                <span class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="glyphicon glyphicon-menu-hamburger"></i>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li ng-click="incluir(instituicoe)"><a href="javascript:void(0)"><i class="icon-plus-2"></i> Incluir</a></a></li>
                    </ul>
                </span>
            </th>
            <th width="5%">id</th>
            <th>nome</th>
            <th>nome abreviado</th>
            <th>data registro</th>
            <th>nivel ensino</th>
            <th>endereco</th>
            <th>complemento endereco</th>
            <th>bairro</th>
            <th>cidade</th>
            <th>CEP</th>
            <th>telefone</th>
            <th>email</th>
        </tr>
    </thead>
    <tfoot class="msg">
        <tr>
            <td colspan="8" class="center" ng-show="lista.length < 1">Nenhum registro encontrado</td>
        </tr>
    </tfoot>
    <tbody>
        <tr ng-repeat="instituicoe in lista">
            <td class="center">
                <span class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="icon-cogs"></i>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li ng-click="editar(instituicoe)"><a href="javascript:void(0)"><i class="icon-pencil-4"></i> Editar</a></li>
                        <li ng-click="excluir(instituicoe)"><a href="javascript:void(0)"><i class="icon-trashcan"></i> Excluir</a></li>
                    </ul>
                </div>
            </span>
        </td>
            <td  class="right">{{instituicoe.id}}</td>
            <td >{{instituicoe.nome}}</td>
            <td >{{instituicoe.nome_abreviado}}</td>
            <td >{{instituicoe.data_registro}}</td>
            <td >{{instituicoe.nivel_ensino}}</td>
            <td >{{instituicoe.endereco}}</td>
            <td >{{instituicoe.complemento_endereco}}</td>
            <td >{{instituicoe.bairro}}</td>
            <td >{{instituicoe.cidade}}</td>
            <td >{{instituicoe.CEP}}</td>
            <td >{{instituicoe.telefone}}</td>
            <td >{{instituicoe.email}}</td>
        </tr>
    </tbody>
</table>
{/literal}
