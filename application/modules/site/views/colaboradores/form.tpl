{literal}
<form name="frm-colaboradores" method="post">
    <section class="oculta">
        <label for="id" class="upper">id:</label>
        <input type="text" ng-model="colaboradore.id" id="id" readonly="readonly" class="short_field form-control" />
    </section>
    <section class="form-group">
        <label for="login" class="upper">login:</label>
        <input type="text" ng-model="colaboradore.login" class="form-control" id="login" autocomplete="off" maxlength="45" />
    </section>
    <section class="form-group">
        <label for="lista_egresso" class="upper">lista egresso:</label>
        <input type="text" ng-model="colaboradore.lista_egresso" class="form-control" id="lista_egresso" autocomplete="off"  />
    </section>
    <section class="form-group">
        <label for="admin" class="upper">admin:</label>
        <input type="text" ng-model="colaboradore.admin" class="form-control" id="admin" autocomplete="off"  />
    </section>
    <section class="form-group">
        <label for="master" class="upper">master:</label>
        <input type="text" ng-model="colaboradore.master" class="form-control" id="master" autocomplete="off"  />
    </section>
    <section class="form-group">
        <label for="email" class="upper">email:</label>
        <input type="text" ng-model="colaboradore.email" class="form-control" id="email" autocomplete="off" maxlength="90" />
    </section>
    <section class="form-group">
        <label for="avatar" class="upper">avatar:</label>
        <input type="text" ng-model="colaboradore.avatar" class="form-control" id="avatar" autocomplete="off" maxlength="45" />
    </section>
    <section class="form-group">
        <label for="matricula" class="upper">matricula:</label>
        <input type="text" ng-model="colaboradore.matricula" class="form-control" id="matricula" autocomplete="off"  />
    </section>
</form>
{/literal}
