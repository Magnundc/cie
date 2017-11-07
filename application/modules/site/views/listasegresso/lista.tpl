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
                        <li ng-click="incluir(listasegress)"><a href="javascript:void(0)"><i class="icon-plus-2"></i> Incluir</a></a></li>
                    </ul>
                </span>
            </th>
            <th width="5%">id</th>
            <th>nome egresso</th>
            <th>cpf</th>
            <th>colacao</th>
            <th>cursos id</th>
            <th>arquivos id</th>
            <th>criado por</th>
            <th>alterado por</th>
        </tr>
    </thead>
    <tfoot class="msg">
        <tr>
            <td colspan="8" class="center" ng-show="lista.length < 1">Nenhum registro encontrado</td>
        </tr>
    </tfoot>
    <tbody>
        <tr ng-repeat="listasegress in lista">
            <td class="center">
                <span class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="icon-cogs"></i>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li ng-click="editar(listasegress)"><a href="javascript:void(0)"><i class="icon-pencil-4"></i> Editar</a></li>
                        <li ng-click="excluir(listasegress)"><a href="javascript:void(0)"><i class="icon-trashcan"></i> Excluir</a></li>
                    </ul>
                </div>
            </span>
        </td>
            <td  class="right">{{listasegress.id}}</td>
            <td >{{listasegress.nome_egresso}}</td>
            <td >{{listasegress.cpf}}</td>
            <td >{{listasegress.colacao}}</td>
            <td >{{listasegress.cursos_id}}</td>
            <td >{{listasegress.arquivos_id}}</td>
            <td >{{listasegress.criado_por}}</td>
            <td >{{listasegress.alterado_por}}</td>
        </tr>
    </tbody>
</table>
{/literal}
