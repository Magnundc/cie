<div class="modal fade" id="modal_ingresso" tabindex="-1" role="dialog"  aria-hidden="false">
    <div class="modal-dialog" style="width: 40%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title"><i class="glyphicon glyphicon-pencil"></i>Informe a data de ingresso no curso</h4>
            </div>
            <div class="modal-body">
                {literal}
                    <form name="frm-ingresso" method="post">
                        <div class="row">
                            <div class="col-lg-14" style="text-align: center">
                                <section class="form-group">
                                    <label style="text-align: center" for="ingresso" class="upper" >informe a data de ingresso no curso</label>
                                    </div>
                                    <div class="col-lg-4"></div>
                                    <div class="col-lg-4" style="padding-left: 10%; text-align: center">
                                        <input type="text" style="text-align: center" ng-model="curso.ingresso" class="data medium_field form-control" id="ingresso" required=""/>
                                    </div>
                                </section>
                           
                        </div>
                    </form>
                {/literal}
            </div>
            <div class="modal-footer">
                <button ng-click="gerarPdfValch(curso.ingresso)" class="btn btn-default"><i class="icon-ok"></i> Enviar</button>
            </div>
        </div>
    </div>
</div>
