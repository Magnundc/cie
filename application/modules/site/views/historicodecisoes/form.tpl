{literal}
<form name="frm-historicodecisoes" method="post">
    <section class="oculta">
        <label for="id" class="upper">id:</label>
        <input type="text" ng-model="historicodecisoe.id" id="id" readonly="readonly" class="short_field form-control" />
    </section>
    
    <div class="row">
        <div class="col-lg-12">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#historicodecisoes">Dados do Curso</a></li>
                <li><a data-toggle="tab" href="#arquivos">Documentos</a></li>
            </ul>
            <p>&nbsp;</p>
            <div class="tab-content">
                <div id="historicodecisoes" class="tab-pane fade in active">
                    <div class="col-lg-6">  
                        <section class="oculta">
                            <label for="id" class="upper">id:</label>
                            <input type="text" ng-model="historicodecisoe.id" id="id" readonly="readonly" class="short_field form-control" />
                        </section>
                        <section class="form-group">
                            <label for="nome_instituicao" class="upper">Instituição de Ensino:</label>
                            <label type="text" class="form-control" maxlength="1" />{{curso.nome_instituicao}}</label>        
                        </section>
                        <section class="form-group" id="cursosconfea_id">
                                <label for="cursosconfea_id" class="upper">Curso:</label>
                                <input ng-show="curso.nivel=='S' || curso.nivel=='M'" type="text" class="form-control" id="nomecurso" autocomplete="off"/>                           
                                <input ng-show="(curso.nivel=='E' && curso.cursosconfea_id!='2974') || curso.nivel=='T' || curso.nivel=='D' || curso.nivel=='A'" ng-hide="curso.nivel=='M' || curso.nivel=='S'" ng-model="historicodecisoe.nomecursol" type="text" class="form-control" id="nomecursol" autocomplete="off"/>
                                <label ng-show="curso.cursosconfea_id=='2974'" ng-hide="curso.cursosconfea_id!='2974'" type="text" class="form-control" id="cursoseg" autocomplete="off">ENGENHARIA DE SEGURANÇA DO TRABALHO</label>
                        </section>
                        <section class="form-group" id="titulosconfea_id" ng-hide="(curso.nivel=='E' && curso.cursosconfea_id!='2974') || curso.nivel=='T' || curso.nivel=='D' || curso.nivel=='A'">
                                <label for="titulosconfea_id" class="upper">Título:</label>
                                <input ng-show="curso.nivel=='S' || curso.nivel=='M'" type="text" class="form-control" id="nometitulo" autocomplete="off"/>
                                <label ng-show="curso.cursosconfea_id=='2974'" ng-hide="curso.nivel!='E'" type="text" class="form-control" id="tituloseg" autocomplete="off">Engenheiro de Segurança do Trabalho</label>
                        </section>
                        <section class="form-group">
                            <label for="atribuicoes" class="upper">Atribuições:</label>
                            <textarea rows="8" ng-hide="curso.cursosconfea_id=='2974' && curso.nivel=='E'" ng-model="historicodecisoe.atribuicoes" class="form-control" id="atribuicoes"></textarea>
                            <label ng-show="curso.cursosconfea_id=='2974'" ng-hide="(curso.nivel!='E' && curso.cursosconfea_id!='2974') || curso.cursosconfea_id!='2974'" type="text" class="form-control" id="atribuicoes" autocomplete="off">Artigo 4º da Resolução 359/91 do Confea</label>
                        </section>
                        </div>
                        <div class="col-lg-6">
                        <section class="form-group">
                            <label for="data_deferimento" class="upper">data deferimento:</label>
                            <input type="text" ng-model="historicodecisoe.data_deferimento" class="data medium_field form-control" id="data_deferimento" required=""/>
                        </section>
                        <section class="form-group" ng-show="curso.nivel=='S' || curso.nivel=='M'">
                            <label for="reconhecimento" class="upper">Cadastramento:</label>
                            <select type="text" ng-model="historicodecisoe.cadastramento" class="form-control" id="reconhecimento">
                                <option value="">SELECIONE</option>
                                <option value="">-----------</option>
                                <option value="1">DEFINITIVO</option>
                                <option value="0">PROVISÓRIO<option>
                            </select>
                        </section>
                        <section class="form-group">
                            <label for="portaria_reconhecimento" class="upper" >Documento de autorização / reconhecimento:</label>
                            <input type="text" ng-model="historicodecisoe.portaria_reconhecimento" class="form-control" id="portaria_reconhecimento" autocomplete="off" maxlength="45" required=""/>
                        </section>
                        <section class="form-group">
                            <label for="orgao_exp" class="upper" >Orgão expedidor:</label>
                            <input type="text" ng-model="historicodecisoe.orgao_exp" class="form-control" id="orgao_exp" autocomplete="off" maxlength="45" required=""/>
                        </section>
                        <section class="form-group">
                            <label for="data_rec_mec" class="upper">Data de autorização / reconhecimento:</label>
                            <input type="text" ng-model="historicodecisoe.data_rec_mec" class="data medium_field form-control" id="data_rec_mec" required=""/>
                        </section>
                        <section class="form-group" ng-show="curso.nivel=='S' || curso.nivel=='M'">
                            <label for="data_validade_ini" class="upper">data de validade inicial:</label>
                            <input type="text" ng-model="historicodecisoe.data_validade_ini" class="data medium_field form-control" id="data_validade_ini" />
                        </section>
                        <section class="form-group" ng-show="curso.nivel=='S' || curso.nivel=='M'">
                            <label for="data_validade" class="upper">data de validade fim:</label>
                            <input type="text" ng-model="historicodecisoe.data_validade" class="data medium_field form-control" id="data_validade" />
                        </section>
                        <section class="form-group" ng-show="curso.nivel=='S' || curso.nivel=='M'">
                            <label for="desc_validade" class="upper" >Descrição da validade:</label>
                            <input type="text" ng-model="historicodecisoe.desc_validade" class="form-control" id="desc_validade" autocomplete="off" maxlength="255"/>
                        </section>
                        <section class="form-group">
                            <label for="processo" class="upper">processo:</label>
                            <input type="text" ng-model="historicodecisoe.processo" class="form-control" id="processo" autocomplete="off" maxlength="45" required=""/>
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
