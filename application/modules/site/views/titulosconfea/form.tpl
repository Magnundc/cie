{literal}
<form name="frm-titulosconfea" method="post">
    <section class="oculta">
        <label for="id" class="upper">id:</label>
        <input type="text" ng-model="titulosconfe.id" id="id" readonly="readonly" class="short_field form-control" />
    </section>
    <section class="form-group">
        <label for="titulo" class="upper">titulo:</label>
        <input type="text" ng-model="titulosconfe.titulo" class="form-control" id="titulo" autocomplete="off" maxlength="90" />
    </section>
    <section class="form-group">
        <label for="abreviado" class="upper">abreviado:</label>
        <input type="text" ng-model="titulosconfe.abreviado" class="form-control" id="abreviado" autocomplete="off" maxlength="45" />
    </section>
    <section class="form-group">
        <label for="titulofeminino" class="upper">titulofeminino:</label>
        <input type="text" ng-model="titulosconfe.titulofeminino" class="form-control" id="titulofeminino" autocomplete="off" maxlength="90" />
    </section>
    <section class="form-group">
        <label for="criado_por" class="upper">criado por:</label>
        <input type="text" ng-model="titulosconfe.criado_por" class="form-control" id="criado_por" autocomplete="off"  />
    </section>
    <section class="form-group">
        <label for="data_criacao" class="upper">data criacao:</label>
        <input type="text" ng-model="titulosconfe.data_criacao" class="form-control" id="data_criacao" autocomplete="off" maxlength="45" />
    </section>
    <section class="form-group">
        <label for="alterado_por" class="upper">alterado por:</label>
        <input type="text" ng-model="titulosconfe.alterado_por" class="form-control" id="alterado_por" autocomplete="off" maxlength="45" />
    </section>
    <section class="form-group">
        <label for="data_alteracao" class="upper">data alteracao:</label>
        <input type="text" ng-model="titulosconfe.data_alteracao" class="form-control" id="data_alteracao" autocomplete="off" maxlength="45" />
    </section>
</form>
{/literal}
