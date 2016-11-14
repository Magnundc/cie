{literal}
<form name="frm-contatos" method="post">
    <section class="oculta">
        <label for="idcontatos" class="upper">idcontatos:</label>
        <input type="text" ng-model="contato.idcontatos" id="idcontatos" readonly="readonly" class="short_field form-control" />
    </section>
    <section class="form-group">
        <label for="nome_contato" class="upper">nome contato:</label>
        <input type="text" ng-model="contato.nome_contato" class="form-control" id="nome_contato" autocomplete="off" maxlength="45" />
    </section>
    <section class="form-group">
        <label for="cargo_contato" class="upper">cargo contato:</label>
        <input type="text" ng-model="contato.cargo_contato" class="form-control" id="cargo_contato" autocomplete="off" maxlength="45" />
    </section>
    <section class="form-group">
        <label for="email_contato" class="upper">email contato:</label>
        <input type="text" ng-model="contato.email_contato" class="form-control" id="email_contato" autocomplete="off" maxlength="45" />
    </section>
    <section class="form-group">
        <label for="instituicoes_id" class="upper">instituicoes id:</label>
        <select ng-model="contato.instituicoes_id" class="form-control" id="instituicoes_id">
            <option ng-repeat="i in instituicoes" value="{{i.id}}">{{i.nome}}</option>
        </select>
    </section>
</form>
{/literal}
