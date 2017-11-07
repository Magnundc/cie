{literal}
    <form name="frm-instituicoes" method="post">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#instituicao">Dados da Instituição</a></li>
                    <li><a data-toggle="tab" href="#arquivos">Documentos</a></li>
                </ul>
                <p>&nbsp;</p>
                <div class="tab-content">
                <div id="instituicao" class="tab-pane fade in active">  
                    <div class="col-lg-6">   
                        <section class="oculta">
                            <label for="id" class="upper">id:</label>
                            <input type="text" ng-model="instituicoe.id" id="id" readonly="readonly" class="short_field form-control"/>
                        </section>
                        <section class="form-group">
                            <label for="nome" class="upper">nome:</label>
                            <input type="text" ng-model="instituicoe.nome" class="form-control" id="nome" autocomplete="off" maxlength="255" required=""/>
                        </section>
                        <section class="form-group">
                            <label for="nome_abreviado" class="upper">nome abreviado:</label>
                            <input type="text" ng-model="instituicoe.nome_abreviado" class="form-control" id="nome_abreviado" autocomplete="off" maxlength="45"/>
                        </section>
                        <section class="form-group">
                            <label for="data_registro" class="upper">data registro:</label>
                            <input type="text" ng-model="instituicoe.data_registro" class="data medium_field form-control" id="data_registro" required=""/>
                        </section>
                        <section class="form-group">
                            <label for="nivel_ensino" class="upper">nível de ensino:</label>
                            <select type="text" ng-model="instituicoe.nivel_ensino" class="form-control" id="nivel_ensino" autocomplete="off" maxlength="1" required=""/>
                                <option value="S">SUPERIOR</option>
                                <option value="M">MÉDIO</option>
                                <option value="H">HÍBRIDO</option>
                            </select>
                        </section>
                        <section class="form-group">
                            <label for="endereco" class="upper">endereco:</label>
                            <input type="text" ng-model="instituicoe.endereco" class="form-control" id="endereco" autocomplete="off" maxlength="90" required=""/>
                        </section>
                        <section class="form-group">
                            <label for="complemento_endereco" class="upper">complemento endereco:</label>
                            <input type="text" ng-model="instituicoe.complemento_endereco" class="form-control" id="complemento_endereco" autocomplete="off" maxlength="45" />
                        </section>
                        <section class="form-group">
                            <label for="bairro" class="upper">bairro:</label>
                            <input type="text" ng-model="instituicoe.bairro" class="form-control" id="bairro" autocomplete="off" maxlength="45" required=""/>
                        </section>
                        <section class="form-group">
                            <label for="cidade" class="upper">cidade:</label>
                            <input type="text" ng-model="instituicoe.cidade" class="form-control" id="cidade" autocomplete="off" maxlength="45" required="" />
                        </section>
                        <section class="form-group">
                            <label for="estado" class="upper">estado:</label>
                            <input type="text" ng-model="instituicoe.estado" class="form-control" id="estado" autocomplete="off" maxlength="2" required="" />
                        </section>
                    </div>
                    <div class="col-lg-6">
                        <section class="form-group">
                            <label for="CEP" class="upper">CEP:</label>
                            <input type="text" ng-model="instituicoe.CEP" class="form-control" id="CEP" autocomplete="off" maxlength="45" required=""/>
                        </section>
                        <section class="form-group">
                            <label for="telefone" class="upper">telefone:</label>
                            <input type="text" ng-model="instituicoe.telefone" class="form-control" id="telefone" autocomplete="off" maxlength="15" required=""/>
                        </section>
                        <section class="form-group">
                            <label for="email" class="upper">email:</label>
                            <input type="text" ng-model="instituicoe.email" class="form-control" id="email" autocomplete="off" maxlength="90" required=""/>
                        </section>
                        <section class="form-group">
                            <label for="CNPJ" class="upper">CNPJ:</label>
                            <input type="text" ng-model="instituicoe.CNPJ" class="form-control" id="CNPJ" autocomplete="off" maxlength="15" />
                        </section>
                        <section class="form-group">
                            <label for="RNI" class="upper">RNI:</label>
                            <input type="text" ng-model="instituicoe.RNI" class="form-control" id="RNI" autocomplete="off" maxlength="10" />
                        </section>
                         <section class="form-group">
                            <label for="reitor_diretor" class="upper">reitor / diretor:</label>
                            <input type="text" ng-model="instituicoe.reitor_diretor" class="form-control" id="reitor_diretor" autocomplete="off" maxlength="90" required=""/>
                        </section>
                        <section class="form-group">
                            <label for="email_reitor" class="upper">email reitor / diretor::</label>
                            <input type="text" ng-model="instituicoe.email_reitor" class="form-control" id="email_reitor" autocomplete="off" maxlength="90" required=""/>
                        </section>
                        <section class="form-group">
                            <label for="telefone_reitor" class="upper">telefone reitor / diretor::</label>
                            <input type="text" ng-model="instituicoe.telefone_reitor" class="form-control" id="telefone_reitor" autocomplete="off" maxlength="15"required="" />
                        </section>
                    </div>
                </div>
                <!-- ARQUIVOS -->
                <div id="arquivos" class="tab-pane fade">
                    <div class="col-lg-12">                        
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2 ng-show="arquivos.length == 0"><code>Nenhum <small>arquivo anexo</small></code></h2>
                                    <h2 ng-show="arquivos.length == 1">1 <small>arquivo anexo</small></h2>
                                    <h2 ng-show="arquivos.length > 1">{{arquivos.length}} <small>arquivos anexos</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">                                        
                                            <li>
                                                <a href="javascript:;" ng-click="openUpload()">
                                                    <i class="fa fa-paperclip"></i> 
                                                    <span>Anexar arquivo</span>
                                                </a>                                            
                                            </li>
                                        </ul>
                                    <div class="clearfix"></div>
                                </div>
                                    <div class="x_content">                                    
                                        <div class="table-responsive">
                                            <table class="table table-striped jambo_table bulk_action">
                                                <tbody>
                                                    <tr class="even pointer" ng-repeat="a in arquivos">
                                                        <td class="min"><i ng-click="excluirArquivo($index)" class="link icone icon icon-trash"></i></td>
                                                        <td class="upper">{{a.nome}}{{a.arquivos.nome}} </td>                                                    
                                                    </tr>                                                
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
{/literal}
