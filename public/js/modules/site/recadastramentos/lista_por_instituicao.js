app.controller("Lista_por_instituicaoController", function($scope, $http, $timeout){
    var $ = jQuery;
    var ng = $scope;

    var limite = 10;
    var inicio = 0;
    var atual = 1;
    var total;
    var ordem = 'DESC';
    var by = 'id';
    var instituicao_id;
    var nome_instituicao;
    var retorno;
    

    var loadInstituicoes = function(){
        $http.get(base_url+'/instituicoes/listar/1000/0/ASC/id/instituicoes').success(function(data){
            ng.instituicoes = data;
        });
    };

    ng.reload = function(pg){
        atual = pg ? pg : 1;
        $http.get(base_url+'/recadastramentos/total').success(function(data){
            total = parseInt(data[0].total);
            ng.total = total;
        });
        inicio = limite * (atual - 1);

        ng.paginar = function (registros, pagina) {
            var qtd_total_pg = parseInt(registros / limite);
            qtd_total_pg = parseInt(registros % limite) === 0 ? qtd_total_pg : qtd_total_pg + 1;
            var link_paginacao = [];
            var first = false;
            var last = 0;
            var anterior;
            var posterior;

            if (pagina > 5) {
            first = true;
            }

            if (pagina > 1) {
                ng.paginas = {primeira: 1};
            }

            if ((parseInt(pagina - 4)) < 1) {
                anterior = 1;
            } else {
                anterior = pagina - 4;
            }

            if ((pagina + 4) > qtd_total_pg) {
                posterior = qtd_total_pg;
            } else {
                posterior = pagina + 4;
            }

            for (i = anterior; i <= posterior; i++) {
                cl = (atual === i) ? 'atual' : '';
                link_paginacao.push({pag: i,classe: cl});
            };

            if (pagina < qtd_total_pg - 4) {
                last = qtd_total_pg;
            } else {
                last = 0;
            }

            ng.paginas = {
                numeros: link_paginacao,
                primeira: first,
                ultima: last
            };

        };

        $http.get(base_url+'/recadastramentos/listar/'+limite+'/'+inicio+'/'+ordem+'/'+by+'/recadastramentos').success(function(data){
            ng.lista = data;
            $timeout(function () {
                ng.paginar(total, atual);
            }, 500);
        });
    };

    
    
    ng.salvar = function(){
        if(validar("frm-recadastramentos")){
        ng.recadastramento.instituicao_id = ng.id;
        
        ng.recadastramento.arquivos = ng.arquivos;
            $.ajax({
            url:base_url+'/recadastramentos/salvar',
            type:'post',
            data:ng.recadastramento,
            success:function(json){
                if(json.result){
                    retorno = json;
                    console.log(retorno);
                    $("#modal-form").modal("hide");
                    $.dialogo_sucesso(json.message, 2000);
                    ng.recadastramento.id=json.id;
                    
                }else{
                    $.dialogo_erro(json.message);
                }
            },
            error:function(r){
                $.dialogo_erro('Erro na estrutura dos dados.');
            }
        });
        setTimeout(function () {window.location.replace(base_url+'/instituicoes/verrecadastramento/'+ng.recadastramento.id);}, 3000);
        }
    };

    ng.delete = function(){
        $.ajax({
            url:base_url+'/recadastramentos/excluir/'+ng.recadastramento.id,
            type:'delete',
            dataType:'json',
            success:function(json){
            $("#modal-delete").modal("hide");
                if(json.result){
                    $.dialogo_sucesso(json.message);
                    ng.lista_da_instituicao(instituicao_id);
                }else{
                    $.dialogo_erro(json.message);
                }
            },
            error:function(r){
                $.dialogo_erro('Erro na estrutura dos dados.');
            }
        });
    };

    ng.incluir = function(){
        ng.recadastramento = {};
        ng.recadastramento.instituicao_id = instituicao_id;
        $http.get(base_url+'/recadastramentos/Ver_nome_instituicao/'+ng.id).success(function(data){
            ng.recadastramento = data[0];
            console.log(ng.recadastramento);
        });
        ng.recadastramento.nome_instituicao = nome_instituicao;
        $("#modal-form").modal("show");
    };

       
    ng.editar = function(c){
        ng.recadastramento.instituicao_id = instituicao_id;
        ng.recadastramento = c;
        var data = ng.recadastramento.data_recadastro.split("-");
        ng.recadastramento.data_recadastro = data[2] + "-" + data[1] + "-" + data[0];
        $("#modal-form").modal("show");
    };

    ng.excluir = function(c){
        ng.recadastramento = c;
        $("#modal-delete").modal("show");
    };
    
    ng.lista_da_instituicao = function(id){ //função que recebe os dados dos cursos enviados pela função listar_cursos_json do arquvio /modules/site/controllers/cursos.php.php
        instituicao_id = id;
        ng.recadastramento = {};
        ng.recadastramento.instituicao_id = id;
        $http.get(base_url+'/recadastramentos/listar_recadastramentos_json/'+id).success(function(data){
            ng.recadastramentos = data;
            console.log(ng.recadastramentos);
        });
    }
    
    verrecadastramento = function(id){
        
        $http.get(base_url+'/recadastramento/carregar/'+id).success(function(data){
            ng.recadastramento = data;
            
        });
    };
    
    ng.openUpload = function () {
        ng.msg = '';
        $("#modal-upload").modal("show");
        $("#upload").trigger("click");
    };


    ativaUpload = function () {
        ng.upload = new Dropzone("div#upload", {
            url: base_url + "/upload",
            maxFilesize: 10, //3MB
            maxFiles: 10,
            uploadMultiple: false,
            dictMaxFilesExceeded: 'É permitido enviar no máximo 10 arquivos',
            dictRemoveFile: 'Remover',
            addRemoveLinks: true,
            accept: function (file, done) {
                if (file.type != "application/pdf") {
                    done("Formato de arquivo inválido, o arquivo deve ser anexado em formato PDF.");
                } else {
                    done();
                }
            },
            init: function () {
                this.on("success", function (file, json) {
                    $timeout(function () {
                        $('div.dz-success').remove();
                        if (json.arquivos.nome) {
                            ng.arquivos.push(json);
                            console.log(ng.arquivos);
                        }
                        $timeout(function () {
                            $("#modal-upload").modal("hide");
                        }, 10);
                    }, 500);
                });
            }
        });
    };
    
    ng.excluirArquivo = function(item){
        ng.item = item;
        $("#modal-delete-arquivo").modal("show");
    };
    
    ng.removerArquivo = function(item) {
        if(ng.arquivos[item].md5_nome != undefined){
        var md5_nome = ng.arquivos[item].md5_nome;
        var indice = item;
        $.ajax({
            url: base_url + '/remover/arquivos/' + md5_nome,
            type: 'get',
            success: function (data, textStatus, jqXHR) {
                if (data.result) {
                    $timeout(function () {
                        ng.arquivos.splice(indice, 1);
                    }, 100);
                }
            }
        });
        }else{
        var md5_nome = ng.arquivos[item].arquivos.md5_nome;
        var indice = item;
        $.ajax({
            url: base_url + '/remover/arquivos/' + md5_nome,
            type: 'get',
            success: function (data, textStatus, jqXHR) {
                if (data.result) {
                    $timeout(function () {
                        ng.arquivos.splice(indice, 1);
                    }, 100);
                }
            }
        });
        }
        $("#modal-delete-arquivo").modal("hide");
    };
    
    ng.init = function(id){
        ng.id = id;
        ng.arquivos = [];
        $http.get(base_url+'/recadastramentos/Ver_nome_instituicao/'+ng.id).success(function(data){
            ng.rec = data[0];
        });
        ng.lista_da_instituicao(id);
        getMask();
        //ng.reload();
        ativaUpload();
        ng.base_url=base_url;
        //loadInstituicoes();
    };

    

});
