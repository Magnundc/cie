<div class="modal fade" id="modal-form" tabindex="-1" role="dialog"  aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                {literal}<h4 class="modal-title"><i class="glyphicon glyphicon-pencil"></i> Cadastro de histórico de decisão do curso de nível <ins>{{nivel(curso.nivel)|lowercase}}</ins> em <ins>{{curso.nomecursol|lowercase}}{{historico.nome|lowercase}}</ins> da instituição <ins>{{historicodec.nome_instituicao|lowercase}}</h4>{/literal}
            </div>
            <div class="modal-body">
                {include file="historicodecisoes/form.tpl"}
            </div>
            <div class="modal-footer">
                <button ng-click="salvar()" class="btn btn-default"><i class="icon-ok"></i> Salvar</button>
            </div>
        </div>
    </div>
</div>
