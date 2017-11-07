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
                        <li ng-click="incluir(historicodecisoe)"><a href="javascript:void(0)"><i class="icon-plus-2"></i> Incluir</a></a></li>
                    </ul>
                </span>
            </th>
            <th width="5%">id</th>
            <th>cursosconfea id</th>
            <th>titulosconfea id</th>
            <th>atribuicoes</th>
            <th>data rec mec</th>
            <th>data deferimento</th>
            <th>data validade</th>
            <th>reconhecimento</th>
            <th>portaria reconhecimento</th>
            <th>criado por</th>
            <th>data criacao</th>
            <th>alterado por</th>
            <th>data alteracao</th>
            <th>arquivos id</th>
            <th>cursos id</th>
        </tr>
    </thead>
    <tfoot class="msg">
        <tr>
            <td colspan="8" class="center" ng-show="lista.length < 1">Nenhum registro encontrado</td>
        </tr>
    </tfoot>
    <tbody>
        <tr ng-repeat="historicodecisoe in lista">
            <td class="center">
                <span class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="icon-cogs"></i>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li ng-click="editar(historicodecisoe)"><a href="javascript:void(0)"><i class="icon-pencil-4"></i> Editar</a></li>
                        <li ng-click="excluir(historicodecisoe)"><a href="javascript:void(0)"><i class="icon-trashcan"></i> Excluir</a></li>
                    </ul>
                </div>
            </span>
        </td>
            <td  class="right">{{historicodecisoe.id}}</td>
            <td >{{historicodecisoe.cursosconfea_id}}</td>
            <td >{{historicodecisoe.titulosconfea_id}}</td>
            <td >{{historicodecisoe.atribuicoes}}</td>
            <td >{{historicodecisoe.data_rec_mec}}</td>
            <td >{{historicodecisoe.data_deferimento}}</td>
            <td >{{historicodecisoe.data_validade}}</td>
            <td >{{historicodecisoe.reconhecimento}}</td>
            <td >{{historicodecisoe.portaria_reconhecimento}}</td>
            <td >{{historicodecisoe.criado_por}}</td>
            <td >{{historicodecisoe.data_criacao}}</td>
            <td >{{historicodecisoe.alterado_por}}</td>
            <td >{{historicodecisoe.data_alteracao}}</td>
            <td >{{historicodecisoe.arquivos_id}}</td>
            <td >{{historicodecisoe.cursos_id}}</td>
        </tr>
    </tbody>
</table>
{/literal}
