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
                        <li ng-click="incluir(contatoscre)"><a href="javascript:void(0)"><i class="icon-plus-2"></i> Incluir</a></a></li>
                    </ul>
                </span>
            </th>
            <th>id</th>
            <th>nome</th>
            <th>crea</th>
            <th>departamento</th>
            <th>email</th>
            <th>telefone</th>
            <th>endereco</th>
            <th>bairro</th>
            <th>cep</th>
            <th>cidade</th>
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
        <tr ng-repeat="contatoscre in lista">
            <td class="center">
                <span class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="icon-cogs"></i>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li ng-click="editar(contatoscre)"><a href="javascript:void(0)"><i class="icon-pencil-4"></i> Editar</a></li>
                        <li ng-click="excluir(contatoscre)"><a href="javascript:void(0)"><i class="icon-trashcan"></i> Excluir</a></li>
                    </ul>
                </div>
            </span>
        </td>
            <td >{{contatoscre.id}}</td>
            <td >{{contatoscre.nome}}</td>
            <td >{{contatoscre.crea}}</td>
            <td >{{contatoscre.departamento}}</td>
            <td >{{contatoscre.email}}</td>
            <td >{{contatoscre.telefone}}</td>
            <td >{{contatoscre.endereco}}</td>
            <td >{{contatoscre.bairro}}</td>
            <td >{{contatoscre.cep}}</td>
            <td >{{contatoscre.cidade}}</td>
            <td >{{contatoscre.criado_por}}</td>
            <td >{{contatoscre.alterado_por}}</td>
        </tr>
    </tbody>
</table>
{/literal}
