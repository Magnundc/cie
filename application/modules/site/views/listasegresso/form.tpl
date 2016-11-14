{literal}
<form name="frm-listasegresso" method="post">
    <section class="oculta">
        <label for="id" class="upper">id:</label>
        <input type="text" ng-model="listasegress.id" id="id" readonly="readonly" class="short_field form-control" />
    </section>
    <section class="form-group">
        <label for="nome_egresso" class="upper">nome egresso:</label>
        <input type="text" ng-model="listasegress.nome_egresso" class="form-control" id="nome_egresso" autocomplete="off" maxlength="45" />
    </section>
    <section class="form-group">
        <label for="cpf" class="upper">cpf:</label>
        <input type="text" ng-model="listasegress.cpf" class="form-control" id="cpf" autocomplete="off" maxlength="45" />
    </section>
    <section class="form-group">
        <label for="colacao" class="upper">colacao:</label>
        <input type="text" ng-model="listasegress.colacao" class="data medium_field form-control" id="colacao" />
    </section>
    <section class="form-group">
        <label for="cursos_id" class="upper">cursos id:</label>
        <select ng-model="listasegress.cursos_id" class="form-control" id="cursos_id">
            <option ng-repeat="c in cursos" value="{{c.id}}">{{c.nome_curso}}</option>
        </select>
    </section>
</form>
{/literal}
