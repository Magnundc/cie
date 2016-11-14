{literal}
<form name="frm-grades" method="post">
    <section class="oculta">
        <label for="id" class="upper">id:</label>
        <input type="text" ng-model="grade.id" id="id" readonly="readonly" class="short_field form-control" />
    </section>
    <section class="form-group">
        <label for="inicio" class="upper">inicio:</label>
        <input type="text" ng-model="grade.inicio" class="data medium_field form-control" id="inicio" />
    </section>
    <section class="form-group">
        <label for="fim" class="upper">fim:</label>
        <input type="text" ng-model="grade.fim" class="data medium_field form-control" id="fim" />
    </section>
    <section class="form-group">
        <label for="atribuicoes" class="upper">atribuicoes:</label>
        <textarea ng-model="grade.atribuicoes" class="form-control" id="atribuicoes" ></textarea>
    </section>
    <section class="form-group">
        <label for="cursos_id" class="upper">cursos id:</label>
        <select ng-model="grade.cursos_id" class="form-control" id="cursos_id">
            <option ng-repeat="c in cursos" value="{{c.id}}">{{c.nome_curso}}</option>
        </select>
    </section>
    <section class="form-group">
        <label for="processo_def" class="upper">processo def:</label>
        <input type="text" ng-model="grade.processo_def" class="form-control" id="processo_def" autocomplete="off" maxlength="45" />
    </section>
    <section class="form-group">
        <label for="decisao" class="upper">decisao:</label>
        <input type="text" ng-model="grade.decisao" class="form-control" id="decisao" autocomplete="off" maxlength="45" />
    </section>
</form>
{/literal}
