{literal}
<form name="frm-log" method="post">
    <section class="oculta">
        <label for="id" class="upper">id:</label>
        <input type="text" ng-model="lo.id" id="id" readonly="readonly" class="short_field form-control" />
    </section>
    <section class="form-group">
        <label for="data" class="upper">data:</label>
        <input type="text" ng-model="lo.data" class="data medium_field form-control" id="data" />
    </section>
    <section class="form-group">
        <label for="operacao" class="upper">operacao:</label>
        <textarea ng-model="lo.operacao" class="form-control" id="operacao" ></textarea>
    </section>
    <section class="form-group">
        <label for="criado_por" class="upper">criado por:</label>
        <input type="text" ng-model="lo.criado_por" class="form-control" id="criado_por" autocomplete="off" maxlength="45" />
    </section>
</form>
{/literal}
