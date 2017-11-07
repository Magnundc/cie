{literal}
<form name="frm-cursos" method="post">
    <div class="row">
        <div class="col-lg-12">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#curso">Dados do Curso</a></li>
                <li><a data-toggle="tab" href="#arquivos">Documentos</a></li>
            </ul>
            <p>&nbsp;</p>
            <div class="tab-content">
                <div id="curso" class="tab-pane fade in active">
                    <div class="col-lg-6">  
                        <section class="form-group">
                            <label for="nivel" class="upper">Nível de Ensino:</label>
                            <select type="text" ng-model="curso.nivel" class="form-control" id="nivel" autocomplete="off" maxlength="1" required="">
                                <option value="">SELECIONE</option>
                                <option value="">---------</option>
                                <option value="S">SUPERIOR</option>
                                <option value="M">MÉDIO</option>
                                <option value="E">ESPECIALIZAÇÃO</option>
                                <option value="A">APERFEIÇOAMENTO</option>
                                <option value="T">MESTRADO</option>
                                <option value="D">DOUTORADO</option>
                            </select>
                        </section>
                        <section class="form-group" ng-show="curso.nivel=='E'">
                            <label for="seg" class="upper">Pós em Engenharia de Segurança do Trabalho?</label>
                            <select type="text" ng-model="curso.seg" class="form-control" id="seg" autocomplete="off" maxlength="1">
                                <option value="">SELECIONE</option>
                                <option value="">---------</option>
                                <option value="S">SIM</option>
                                <option value="N">NÃO</option>
                            </select>
                        </section>
                        <section class="oculta">
                            <label for="id" class="upper">id:</label>
                            <input type="text" ng-model="curso.id" id="id" readonly="readonly" class="short_field form-control" />
                        </section>
                        <section class="form-group">
                            <label for="nome_instituicao" class="upper">Instituição de Ensino:</label>
                            <label type="text" class="form-control" maxlength="1" />{{curso.nome_instituicao}}</label>        
                        </section>
                        <section class="form-group" id="cursosconfea_id">
                                <label for="cursosconfea_id" class="upper">Curso:</label>
                                <input ng-show="curso.nivel=='S' || curso.nivel=='M' || curso.nivel==NULL" type="text" class="form-control" id="nomecurso" autocomplete="off"/>                           
                                <input ng-show="(curso.nivel=='E' && curso.seg!='S') || curso.nivel=='T' || curso.nivel=='D' || curso.nivel=='A'" ng-model="curso.nomecursol" type="text" class="form-control" id="nomecursol" autocomplete="off"/>
                                <label ng-show="curso.seg=='S' && curso.nivel=='E'" ng-hide="(curso.nivel!='E' && curso.seg!='S') || curso.seg!='S'" type="text" class="form-control" id="cursoseg" autocomplete="off">ENGENHARIA DE SEGURANÇA DO TRABALHO</label>
                        </section>
                        <section class="form-group" id="titulosconfea_id" ng-hide="(curso.nivel=='E' && curso.seg!='S') || curso.nivel=='T' || curso.nivel=='D' || curso.nivel=='A'">
                                <label for="titulosconfea_id" class="upper">Título:</label>
                                <input ng-show="curso.nivel!='E' && curso.seg!='N'" type="text" class="form-control" id="nometitulo" autocomplete="off"/>
                                <label ng-show="curso.seg=='S'" ng-hide="curso.nivel!='E'" type="text" class="form-control" id="tituloseg" autocomplete="off">Engenheiro de Segurança do Trabalho</label>
                        </section>
                        <section class="form-group">
                            <label for="atribuicoes" class="upper">Atribuições:</label>
                            <textarea ng-hide="curso.seg=='S' && curso.nivel=='E'" ng-model="curso.atribuicoes" class="form-control" id="atribuicoes"></textarea>
                            <label ng-show="curso.seg=='S'" ng-hide="(curso.nivel!='E' && curso.seg!='S') || curso.seg!='S' type="text" class="form-control" id="atribuicoes" autocomplete="off">Artigo 4º da Resolução 359/91 do Confea</label>
                        </section>
                        <section class="form-group">
                            <label for="data_deferimento" class="upper">data deferimento:</label>
                            <input type="text" ng-model="curso.data_deferimento" class="data medium_field form-control" id="data_deferimento" required=""/>
                        </section>
                        <section class="form-group" ng-show="curso.nivel=='S' || curso.nivel=='M'">
                            <label for="reconhecimento" class="upper">Cadastramento:</label>
                            <select type="text" ng-model="curso.cadastramento" class="form-control" id="reconhecimento">
                                <option value="">SELECIONE</option>
                                <option value="">-----------</option>
                                <option value="1">DEFINITIVO</option>
                                <option value="0">PROVISÓRIO<option>
                            </select>
                        </section>
                        <section class="form-group">
                            <label for="portaria_reconhecimento" class="upper" >Documento de autorização / reconhecimento:</label>
                            <input type="text" ng-model="curso.portaria_reconhecimento" class="form-control" id="portaria_reconhecimento" autocomplete="off" maxlength="45" required=""/>
                        </section>
                        <section class="form-group">
                            <label for="orgao_exp" class="upper" >Orgão expedidor:</label>
                            <input type="text" ng-model="curso.orgao_exp" class="form-control" id="orgao_exp" autocomplete="off" maxlength="45" required=""/>
                        </section>
                        <section class="form-group">
                            <label for="data_rec_mec" class="upper">Data de autorização / reconhecimento:</label>
                            <input type="text" ng-model="curso.data_rec_mec" class="data medium_field form-control" id="data_rec_mec" required=""/>
                        </section>
                        <section class="form-group" ng-show="curso.nivel=='S' || curso.nivel=='M'">
                            <label for="data_validade_ini" class="upper">data de validade inicial:</label>
                            <input type="text" ng-model="curso.data_validade_ini" class="data medium_field form-control" id="data_validade_ini" />
                        </section>
                        <section class="form-group" ng-show="curso.nivel=='S' || curso.nivel=='M'">
                            <label for="data_validade" class="upper">data de validade fim:</label>
                            <input type="text" ng-model="curso.data_validade" class="data medium_field form-control" id="data_validade" />
                        </section>
                        <section class="form-group" ng-show="curso.nivel=='S' || curso.nivel=='M'">
                            <label for="desc_validade" class="upper" >Descrição da validade:</label>
                            <input type="text" ng-model="curso.desc_validade" class="form-control" id="desc_validade" autocomplete="off" maxlength="255"/>
                        </section>
                    </div>
                    <div class="col-lg-6">
                         <section class="form-group">
                            <label for="reconhecimento" class="upper">Modalidade de Ensino:</label>
                            <select type="text" ng-model="curso.modalidade" class="form-control" id="modalidade" required="">
                                <option value="">SELECIONE</option>
                                <option value="">-----------</option>
                                <option value="1">PRESENCIAL</option>
                                <option value="0">À DISTÂNCIA<option>
                            </select>
                        </section>
                        <section class="form-group">
                            <label for="processo" class="upper">processo:</label>
                            <input type="text" ng-model="curso.processo" class="form-control" id="processo" autocomplete="off" maxlength="45" required=""/>
                        </section>
                        <section class="form-group">
                            <label for="nome_coordenador" class="upper">nome coordenador:</label>
                            <input type="text" ng-model="curso.nome_coordenador" class="form-control" id="nome_coordenador" autocomplete="off" maxlength="90" />
                        </section>
                        <section class="form-group">
                            <label for="telefone_coordenador" class="upper">telefone coordenador:</label>
                            <input type="text" ng-model="curso.telefone_coordenador" class="form-control" id="telefone_coordenador" autocomplete="off"  />
                        </section>
                        <section class="form-group">
                            <label for="email_coordenador" class="upper">email coordenador:</label>
                            <input type="email" ng-model="curso.email_coordenador" class="form-control" id="email_coordenador" autocomplete="off" maxlength="90" />
                        </section>
                        <section class="form-group">
                            <label for="endereco_coordenacao" class="upper">endereco coordenacao:</label>
                            <input type="text" ng-model="curso.endereco_coordenacao" class="form-control" id="endereco_coordenacao" autocomplete="off" maxlength="90" />
                        </section>
                        <section class="form-group">
                            <label for="complemento_endereco_coordenacao" class="upper">complemento endereco coordenacao:</label>
                            <input type="text" ng-model="curso.complemento_endereco_coordenacao" class="form-control" id="complemento_endereco_coordenacao" autocomplete="off" maxlength="90" />
                        </section>
                        <section class="form-group">
                            <label for="cep_coordenacao" class="upper">cep coordenacao:</label>
                            <input type="text" ng-model="curso.cep_coordenacao" class="form-control" id="cep_coordenacao" autocomplete="off"  />
                        </section>
                        <section class="form-group">
                            <label for="cidade_coordenacao" class="upper">cidade coordenacao:</label>
                            <input type="text" ng-model="curso.cidade_coordenacao" class="form-control" id="cidade_coordenacao" autocomplete="off" maxlength="45" />
                        </section>
                        <section class="form-group">
                            <label for="estado_coordenacao" class="upper">estado coordenacao:</label>
                            <input type="text" ng-model="curso.estado_coordenacao" class="form-control" id="estado_coordenacao" autocomplete="off" maxlength="2" />
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
