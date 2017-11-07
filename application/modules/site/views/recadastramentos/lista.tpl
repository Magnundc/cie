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
                        <li ng-click="incluir(recadastramento)"><a href="javascript:void(0)"><i class="icon-plus-2"></i> Incluir</a></a></li>
                    </ul>
                </span>
            </th>
            <th width="5%">id</th>
            <th>nome</th>
            <th>data recadastro</th>
            <th>instituicoes id</th>
            <th>criado por</th>
            <th>alterado por</th>
            <th>arquivos id</th>
        </tr>
    </thead>
    <tfoot class="msg">
        <tr>
            <td colspan="8" class="center" ng-show="lista.length < 1">Nenhum registro encontrado</td>
        </tr>
    </tfoot>
    <tbody>
        <tr ng-repeat="recadastramento in lista">
            <td class="center">
                <span class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="icon-cogs"></i>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li ng-click="editar(recadastramento)"><a href="javascript:void(0)"><i class="icon-pencil-4"></i> Editar</a></li>
                        <li ng-click="excluir(recadastramento)"><a href="javascript:void(0)"><i class="icon-trashcan"></i> Excluir</a></li>
                    </ul>
                </div>
            </span>
        </td>
            <td  class="right">{{recadastramento.id}}</td>
            <td >{{recadastramento.nome}}</td>
            <td >{{recadastramento.data_recadastro}}</td>
            <td >{{recadastramento.instituicoes_id}}</td>
            <td >{{recadastramento.criado_por}}</td>
            <td >{{recadastramento.alterado_por}}</td>
            <td >{{recadastramento.arquivos_id}}</td>
        </tr>
    </tbody>
</table>
{/literal}
