{literal}
<div class="modal fade" id="modal_op_curso" tabindex="-1" role="dialog"  aria-hidden="false">
    <div class="modal-dialog" style="width: 60%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Curso</h4>
            </div>
            <div class="modal-body">
                        <br>
                        <div class="row">
                            <div class="col-lg-12" style="text-align: center">
                                <label ng-click="gerarPdf(curso.id)" style="text-align: left; font-family: arial">Gerar <button class="btn btn-xs"><i class="icon icon-file-pdf"></i>PDF</button> dos dados do curso</label>
                            </div>
                        </div>
                        <br>
                        <table class="table table-hover"> 
                            <tbody>
                                <tr>
                                    <td>Documentos:</td>
                                </tr>
                                <tr>
                                    <td colspan="8" class="center" ng-show="arquivos.length < 1">Nenhum arquivo</td>
                                </tr>
                                <tr ng-repeat="x in arquivos">
                                    <td class="upper"><a title="Visualizar documento" style="color: black" ng-href="{{ base_url+'/public/arquivos/'+x.md5_nome}}">{{x.nome}}</a></td>
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
