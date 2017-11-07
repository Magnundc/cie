{literal}
<form name="frm-comunicado" method="post">
    <section class="oculta">
        <label for="id" class="upper">id:</label>
        <input type="text" ng-model="comunicad.id" id="id" readonly="readonly" class="short_field form-control" />
    </section>
    <section class="form-group">
        <label for="data" class="upper">data:</label>
        <input type="text" ng-model="comunicad.data" class="time form-control" maxlength="5" id="data" />
    </section>
    <section class="form-group">
        <label for="emails_creas" class="upper">emails creas:</label>
        <textarea ng-model="comunicad.emails_creas" class="form-control" id="emails_creas" ></textarea>
    </section>
    <section class="form-group">
        <label for="diplomasnaoreconhecidosgo_id" class="upper">diplomasnaoreconhecidosgo id:</label>
        <select ng-model="comunicad.diplomasnaoreconhecidosgo_id" class="form-control" id="diplomasnaoreconhecidosgo_id">
            <option ng-repeat="d in diplomasnaoreconhecidosgo" value="{{d.id}}">{{d.nome}}</option>
        </select>
    </section>
</form>
{/literal}
