{literal}
<form name="frm-diplomasnaoreconhecidos" method="post">
    <section class="oculta">
        <label for="id" class="upper">id:</label>
        <input type="text" ng-model="diplomasnaoreconhecido.id" id="id" readonly="readonly" class="short_field form-control" />
    </section>
    <section class="form-group">
        <label for="nome" class="upper">nome:</label>
        <input type="text" ng-model="diplomasnaoreconhecido.nome" class="form-control" id="nome" autocomplete="off" maxlength="90" />
    </section>
    <section class="form-group">
        <label for="cpf" class="upper">cpf:</label>
        <input type="text" ng-model="diplomasnaoreconhecido.cpf" class="form-control" id="cpf" autocomplete="off"  />
    </section>
    <section class="form-group">
        <label for="curso" class="upper">curso:</label>
        <select ng-model="diplomasnaoreconhecido.curso" class="form-control" id="curso">
            <option ng-repeat="c in cursos" value="{{c.id}}">{{c.instituicao_id}}</option>
        </select>
    </section>
    <section class="form-group">
        <label for="instituicao" class="upper">instituicao:</label>
        <input type="text" ng-model="diplomasnaoreconhecido.instituicao" class="form-control" id="instituicao" autocomplete="off"  />
    </section>
    <section class="form-group">
        <label for="crea" class="upper">crea:</label>
        <input type="text" ng-model="diplomasnaoreconhecido.crea" class="form-control" id="crea" autocomplete="off" maxlength="2" />
    </section>
    <section class="form-group">
        <label for="criado_por" class="upper">criado por:</label>
        <input type="text" ng-model="diplomasnaoreconhecido.criado_por" class="form-control" id="criado_por" autocomplete="off"  />
    </section>
    <section class="form-group">
        <label for="alterado_por" class="upper">alterado por:</label>
        <input type="text" ng-model="diplomasnaoreconhecido.alterado_por" class="form-control" id="alterado_por" autocomplete="off"  />
    </section>
    <section class="form-group">
        <label for="arquivos_id" class="upper">arquivos id:</label>
        <select ng-model="diplomasnaoreconhecido.arquivos_id" class="form-control" id="arquivos_id">
            <option ng-repeat="a in arquivos" value="{{a.id}}">{{a.nome}}</option>
        </select>
    </section>
</form>
{/literal}
