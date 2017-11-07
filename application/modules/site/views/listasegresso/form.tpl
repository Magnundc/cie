{literal}
<form name="frm-listasegresso" method="post">
    <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#listasegress">Dados do egresso</a></li>
                    <li><a data-toggle="tab" href="#arquivos">Documento apresentado pela instituição</a></li>
                </ul>
                <p>&nbsp;</p>
                <div class="tab-content">
                    <div id="listasegress" class="tab-pane fade in active">  
                    <section class="oculta">
                        <label for="id" class="upper">id:</label>
                        <input type="text" ng-model="listasegress.id" id="id" readonly="readonly" class="short_field form-control" />
                    </section>
                    <section class="form-group">
                        <label for="nome_instituicao" class="upper">Instituição de Ensino:</label>
                        <label type="text" class="form-control" maxlength="1" />{{curso.nome_instituicao}}</label>        
                    </section>
                    <section class="form-group">
                        <label for="nome_instituicao" class="upper">Curso:</label>
                        <label type="text" class="form-control" maxlength="1" />{{curso.nome}}</label>        
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
                                                            <td class="min"><i ng-click="removerArquivo($index)" class="link icone icon icon-trash"></i></td>
                                                            <td class="upper">{{a.arquivos.nome}} </td>                                                    
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
