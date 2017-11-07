<div class="modal fade" id="modal_ingresso" tabindex="-1" role="dialog"  aria-hidden="false">
    <div class="modal-dialog" style="width: 60%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Data de ingresso do curso</h4>
            </div>
            <div class="modal-body">
                {literal}
                    <form name="frm-ingresso" method="post" style="text-align: center">
                                    <label for="ingresso" >Informe a data em que o profissional iniciou o curso</label>
                                    <br>
                                    <br>
                                    <div>
                                        <input type="text" ng-model="curso.ingresso" class="data form-control-center" style="text-align: center; width: 30%" id="ingresso" required=""/>
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
