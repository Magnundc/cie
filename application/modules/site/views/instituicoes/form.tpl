{literal}
<form name="frm-instituicoes" method="post">
    <section class="oculta">
        <label for="id" class="upper">id:</label>
        <input type="text" ng-model="instituicoe.id" id="id" readonly="readonly" class="short_field form-control" />
    </section>
    <section class="form-group">
        <label for="nome" class="upper">nome:</label>
        <input type="text" ng-model="instituicoe.nome" class="form-control" id="nome" autocomplete="off" maxlength="45" />
    </section>
    <section class="form-group">
        <label for="nome_abreviado" class="upper">Nome Abreviado:</label>
        <input type="text" ng-model="instituicoe.nome_abreviado" class="form-control" id="nome_abreviado" autocomplete="off" maxlength="45" />
    </section>
    <section class="form-group">
        <label for="data_registro" class="upper">data registro:</label>
        <input type="text" ng-model="instituicoe.data_registro" class="data medium_field form-control" id="data_registro" />
    </section>
    <section class="form-group">
        <label for="nivel_ensino" class="upper">nível ensino:</label>
        <input type="text" ng-model="instituicoe.nivel_ensino" class="form-control" id="nivel_ensino" autocomplete="off" maxlength="45" />
    </section>
    <section class="form-group">
        <label for="endereco" class="upper">endereço:</label>
        <input type="text" ng-model="instituicoe.endereco" class="form-control" id="endereco" autocomplete="off" maxlength="45" />
    </section>
    <section class="form-group">
        <label for="complemento_endereco" class="upper">complemento endereço:</label>
        <input type="text" ng-model="instituicoe.complemento_endereco" class="form-control" id="complemento_endereco" autocomplete="off" maxlength="45" />
    </section>
    <section class="form-group">
        <label for="bairro" class="upper">bairro:</label>
        <input type="text" ng-model="instituicoe.bairro" class="form-control" id="bairro" autocomplete="off" maxlength="45" />
    </section>
    <section class="form-group">
        <label for="cidade" class="upper">cidade:</label>
        <input type="text" ng-model="instituicoe.cidade" class="form-control" id="cidade" autocomplete="off" maxlength="45" />
    </section>
    <section class="form-group">
        <label for="CEP" class="upper">CEP:</label>
        <input type="text" ng-model="instituicoe.CEP" class="form-control" id="CEP" autocomplete="off" maxlength="45" />
    </section>
    <section class="form-group">
        <label for="telefone" class="upper">telefone:</label>
        <input type="text" ng-model="instituicoe.telefone" class="form-control" id="telefone" autocomplete="off" maxlength="45" />
    </section>
    <section class="form-group">
        <label for="email" class="upper">e-mail:</label>
        <input type="text" ng-model="instituicoe.email" class="form-control" id="email" autocomplete="off" maxlength="45" />
    </section>
</form>
{/literal}
