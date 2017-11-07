{literal}
<form name="frm-arquivos" method="post">
    <section class="oculta">
        <label for="id" class="upper">id:</label>
        <input type="text" ng-model="arquivo.id" id="id" readonly="readonly" class="short_field form-control" />
    </section>
    <section class="form-group">
        <label for="nome" class="upper">nome:</label>
        <input type="text" ng-model="arquivo.nome" class="form-control" id="nome" autocomplete="off" maxlength="45" />
    </section>
    <section class="form-group">
        <label for="caminnho" class="upper">caminnho:</label>
        <input type="text" ng-model="arquivo.caminnho" class="form-control" id="caminnho" autocomplete="off" maxlength="255" />
    </section>
    <section class="form-group">
        <label for="data" class="upper">data:</label>
        <input type="text" ng-model="arquivo.data" class="data medium_field form-control" id="data" />
    </section>
    <section class="form-group">
        <label for="criado_por" class="upper">criado por:</label>
        <input type="text" ng-model="arquivo.criado_por" class="form-control" id="criado_por" autocomplete="off"  />
    </section>
    <section class="form-group">
        <label for="alterado_por" class="upper">alterado por:</label>
        <input type="text" ng-model="arquivo.alterado_por" class="form-control" id="alterado_por" autocomplete="off"  />
    </section>
</form>
{/literal}
