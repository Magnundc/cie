{literal}
<div class="modal fade" id="modal_inst_por_curso" tabindex="-1" role="dialog"  aria-hidden="false">
    <div class="modal-dialog" style="width: 80%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Cursos e instituições</h4>
            </div>
            <div class="modal-body h_500">
                <table class="table table-hover" style="font-size: 12px; vertical-align: center;">
                    <thead>
                        <tr>
                            <th >Curso</th>
                            <th >Instituição</th>
                            <th >Cidade</th>
                            <th >Documentos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="curso in lista_por_cursosconfea"> {/literal}{*cursos se refere ao objeto gerado pelo javascript no arquivo /public/js/moduules/site/cursos/lista_por_instituicao.js linha na função ng.lista_da_instituicao*}{literal}
                            <td ><a ng-click="gerarPdf(curso.cursoid)" href="javascript:void(0)" title="Gerar PDF do Cadastro do Curso" style="color:black">{{curso.nome}}{{curso.nomecursol}}</td>
                            <td ><a ng-click="gerarPdf(curso.cursoid)" href="javascript:void(0)" title="Gerar PDF do Cadastro do Curso" style="color:black">{{curso.nomeins}}</td>
                            <td ><a ng-click="gerarPdf(curso.cursoid)" href="javascript:void(0)" title="Gerar PDF do Cadastro do Curso" style="color:black">{{curso.cidade}}</td>
                            <td style="text-align: center" ng-click="op_curso(curso.cursoid)"><a href="javascript:void(0)" title="Visualizar documentos do processo de Cadastro do Curso" style="color:black"><button class="btn btn-xs">&nbsp&nbsp&nbsp&nbsp<i class="glyphicon glyphicon-file center"></i>&nbsp&nbsp&nbsp&nbsp</button></td>
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
