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
                        <li ng-click="incluir(colaboradore)"><a href="javascript:void(0)"><i class="icon-plus-2"></i> Incluir</a></a></li>
                    </ul>
                </span>
            </th>
            <th width="5%">id</th>
            <th>login</th>
            <th>lista egresso</th>
            <th>admin</th>
            <th>master</th>
            <th>email</th>
            <th>avatar</th>
            <th>matricula</th>
        </tr>
    </thead>
    <tfoot class="msg">
        <tr>
            <td colspan="8" class="center" ng-show="lista.length < 1">Nenhum registro encontrado</td>
        </tr>
    </tfoot>
    <tbody>
        <tr ng-repeat="colaboradore in lista">
            <td class="center">
                <span class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="icon-cogs"></i>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li ng-click="editar(colaboradore)"><a href="javascript:void(0)"><i class="icon-pencil-4"></i> Editar</a></li>
                        <li ng-click="excluir(colaboradore)"><a href="javascript:void(0)"><i class="icon-trashcan"></i> Excluir</a></li>
                    </ul>
                </div>
            </span>
        </td>
            <td  class="right">{{colaboradore.id}}</td>
            <td >{{colaboradore.login}}</td>
            <td >{{colaboradore.lista_egresso}}</td>
            <td >{{colaboradore.admin}}</td>
            <td >{{colaboradore.master}}</td>
            <td >{{colaboradore.email}}</td>
            <td >{{colaboradore.avatar}}</td>
            <td >{{colaboradore.matricula}}</td>
        </tr>
    </tbody>
</table>
{/literal}
