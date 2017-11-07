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
                        <li ng-click="incluir(titulosconfe)"><a href="javascript:void(0)"><i class="icon-plus-2"></i> Incluir</a></a></li>
                    </ul>
                </span>
            </th>
            <th width="5%">id</th>
            <th>titulo</th>
            <th>abreviado</th>
            <th>titulofeminino</th>
            <th>criado por</th>
            <th>data criacao</th>
            <th>alterado por</th>
            <th>data alteracao</th>
        </tr>
    </thead>
    <tfoot class="msg">
        <tr>
            <td colspan="8" class="center" ng-show="lista.length < 1">Nenhum registro encontrado</td>
        </tr>
    </tfoot>
    <tbody>
        <tr ng-repeat="titulosconfe in lista">
            <td class="center">
                <span class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="icon-cogs"></i>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li ng-click="editar(titulosconfe)"><a href="javascript:void(0)"><i class="icon-pencil-4"></i> Editar</a></li>
                        <li ng-click="excluir(titulosconfe)"><a href="javascript:void(0)"><i class="icon-trashcan"></i> Excluir</a></li>
                    </ul>
                </div>
            </span>
        </td>
            <td  class="right">{{titulosconfe.id}}</td>
            <td >{{titulosconfe.titulo}}</td>
            <td >{{titulosconfe.abreviado}}</td>
            <td >{{titulosconfe.titulofeminino}}</td>
            <td >{{titulosconfe.criado_por}}</td>
            <td >{{titulosconfe.data_criacao}}</td>
            <td >{{titulosconfe.alterado_por}}</td>
            <td >{{titulosconfe.data_alteracao}}</td>
        </tr>
    </tbody>
</table>
{/literal}
