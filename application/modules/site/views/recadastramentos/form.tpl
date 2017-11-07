{literal}
<form name="frm-recadastramentos" method="post">
     <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#instituicao">Dados da Instituição</a></li>
                    <li><a data-toggle="tab" href="#arquivos">Documentos</a></li>
                </ul>
                <p>&nbsp;</p>
            <div class="tab-content">
                <div id="instituicao" class="tab-pane fade in active">  
                    <section class="oculta">
                        <label for="id" class="upper">id:</label>
                        <input type="text" ng-model="recadastramento.id" id="id" readonly="readonly" class="short_field form-control" />
                    </section>
                    <section class="form-group">
                        <label for="nome" class="upper">nome:</label>
                        <input type="text" ng-model="recadastramento.nome" class="form-control" id="nome" autocomplete="off" maxlength="90" />
                    </section>
                    <section class="form-group">
                        <label for="data_recadastro" class="upper">data recadastro:</label>
                        <input type="text" ng-model="recadastramento.data_recadastro" class="data medium_field form-control" id="data_recadastro" />
                    </section>
                    <section class="form-group">
                        <label for="processo" class="upper">processo:</label>
                        <input type="text" ng-model="recadastramento.processo" class="form-control" id="processo" />
                    </section>
                    <section class="form-group">
                        <label for="alteracoes" class="upper">Alterações:</label>
                        <input type="text" ng-model="recadastramento.alteracoes" class="form-control" id="alteracoes" />
                    </section>
                    <section class="form-group">
                        <label for="nome_instituicao" class="upper">Instituição de Ensino:</label>
                        <label type="text" class="form-control" maxlength="1" />{{recadastramento.nome_instituicao}}</label>        
                    </section>
                </div>
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
