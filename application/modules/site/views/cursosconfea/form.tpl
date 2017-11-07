{literal}
<form name="frm-cursosconfea" method="post">
    <section class="oculta">
        <label for="id" class="upper">id:</label>
        <input type="text" ng-model="cursosconfe.id" id="id" readonly="readonly" class="short_field form-control" />
    </section>
    <section class="form-group">
        <label for="cod" class="upper">cod:</label>
        <input type="text" ng-model="cursosconfe.cod" class="form-control" id="cod" autocomplete="off"  />
    </section>
    <section class="form-group">
        <label for="nome" class="upper">nome:</label>
        <input type="text" ng-model="cursosconfe.nome" class="form-control" id="nome" autocomplete="off" maxlength="90" />
    </section>
    <section class="form-group">
        <label for="criado_por" class="upper">criado por:</label>
        <input type="text" ng-model="cursosconfe.criado_por" class="form-control" id="criado_por" autocomplete="off"  />
    </section>
    <section class="form-group">
        <label for="data_criacao" class="upper">data criacao:</label>
        <input type="text" ng-model="cursosconfe.data_criacao" class="data medium_field form-control" id="data_criacao" />
    </section>
    <section class="form-group">
        <label for="alterado_por" class="upper">alterado por:</label>
        <input type="text" ng-model="cursosconfe.alterado_por" class="form-control" id="alterado_por" autocomplete="off"  />
    </section>
    <section class="form-group">
        <label for="data_alteracao" class="upper">data alteracao:</label>
        <input type="text" ng-model="cursosconfe.data_alteracao" class="data medium_field form-control" id="data_alteracao" />
    </section>
</form>
{/literal}
