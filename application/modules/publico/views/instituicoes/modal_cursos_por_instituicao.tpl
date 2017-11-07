{literal}
<div class="modal fade" id="modal_cursos_por_instituicao" tabindex="-1" role="dialog"  aria-hidden="false">
    <div class="modal-dialog" style="width: 80%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Cursos</h4>
            </div>
            <div class="modal-body h_500">
                <table class="table table-hover" style="font-size: 12px; vertical-align: center;">
                    <thead>
                        <tr>
                            <th >Curso</th>
                            <th >Título</th>
                            <th >Nível</th>
                            <th style="text-align: center" >Documentos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="curso in cursos"> {/literal}{*cursos se refere ao objeto gerado pelo javascript no arquivo /public/js/moduules/site/cursos/lista_por_instituicao.js linha na função ng.lista_da_instituicao*}{literal}
                            <td ng-click="gerarPdf(curso.id)"><a href="javascript:void(0)" title="Gerar PDF do Cadastro do Curso" style="color:black">{{curso.nome}}{{curso.nomecursol}}</td>
                            <td ng-click="gerarPdf(curso.id)"><a href="javascript:void(0)" title="Gerar PDF do Cadastro do Curso" style="color:black">{{curso.titulo}}</td>
                            <td ng-click="gerarPdf(curso.id)"><a href="javascript:void(0)" title="Gerar PDF do Cadastro do Curso" style="color:black">{{nivel(curso.nivel)}}</td>
                            <td style="text-align: center" ng-click="op_curso(curso.id)"><a href="javascript:void(0)" title="Visualizar documentos do processo de Cadastro do Curso" style="color:black"><button class="btn btn-xs">&nbsp&nbsp&nbsp&nbsp<i class="glyphicon glyphicon-file center"></i>&nbsp&nbsp&nbsp&nbsp</button></td>
                        </tr>
                    </tbody>
                </table>
                {/literal}
            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn"><i class="icon-remove"></i> Fechar</button>
            </div>
        </div>
    </div>
</div>
