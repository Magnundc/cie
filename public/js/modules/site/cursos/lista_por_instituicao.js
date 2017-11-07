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
    

    var loadInstituicoes = function(){
        $http.get(base_url+'/instituicoes/listar/1000/0/ASC/id/instituicoes').success(function(data){
            ng.instituicoes = data;
        });
    };

    ng.reload = function(pg){
        atual = pg ? pg : 1;
        $http.get(base_url+'/cursos/total').success(function(data){
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

        $http.get(base_url+'/cursos/listar/'+limite+'/'+inicio+'/'+ordem+'/'+by+'/cursos').success(function(data){
            ng.lista = data;
            $timeout(function () {
                ng.paginar(total, atual);
            }, 500);
        });
    };

    
    
    ng.salvar = function(){
        if(validar("frm-cursos")){
        ng.curso.instituicao_id = ng.id;
            if (ng.arquivos != null) {
                ng.curso.arquivos = ng.arquivos;
            }
        $.ajax({
            url:base_url+'/cursos/salvar',
            type:'post',
            data:ng.curso,
            success:function(json){
                if(json.result){
                    $("#modal-form").modal("hide");
                    $.dialogo_sucesso(json.message, 2000);
                    ng.curso.id=json.id;
                    
                    $('#nometitulo').val("");
                    $('#nomecurso').val("");
                    //location.reload(); //carrega página
                    //ng.reload(0);
//                    ng.lista_da_instituicao(instituicao_id);
                }else{
                    $.dialogo_erro(json.message);
                }
            },
            error:function(r){
                $.dialogo_erro('Erro na estrutura dos dados.');
            }
        });
        if(json.result)
        setTimeout(function () {window.location.replace(base_url+'/instituicoes/vercurso/'+ng.curso.id);}, 3000);
        }
    };

    ng.delete = function(){
        $.ajax({
            url:base_url+'/cursos/excluir/'+ng.curso.id,
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
        ng.curso = {};
        ng.curso.instituicao_id = instituicao_id;
        $http.get(base_url+'/cursos/Ver_nome_instituicao/'+ng.id).success(function(data){
            ng.curso = data[0];
            console.log(ng.curso);
        });
        ng.curso.nome_instituicao = nome_instituicao;
        $("#modal-form").modal("show");
    };

       
    ng.editar = function(c){
        ng.curso.instituicao_id = instituicao_id;
        ng.curso = c;
        var data = ng.curso.data_rec_mec.split("-");
        ng.curso.data_rec_mec = data[2] + "-" + data[1] + "-" + data[0];
        var data = ng.curso.data_deferimento.split("-");
        ng.curso.data_deferimento = data[2] + "-" + data[1] + "-" + data[0];
        var data = ng.curso.data_validade.split("-");
        ng.curso.data_validade = data[2] + "-" + data[1] + "-" + data[0];
        $("#modal-form").modal("show");
    };

    ng.excluir = function(c){
        ng.curso = c;
        $("#modal-delete").modal("show");
    };
    
    ng.lista_da_instituicao = function(id){ //função que recebe os dados dos cursos enviados pela função listar_cursos_json do arquvio /modules/site/controllers/cursos.php.php
        instituicao_id = id;
        ng.curso = {};
        ng.curso.instituicao_id = id;
        $http.get(base_url+'/cursos/listar_cursos_json/'+id).success(function(data){
            ng.cursos = data;
        });
    }
    
    ng.seg = function(id){
        $http.get(base_url+'/cursosconfea/obter/'+id).success(function(data){
            ng.curso.nome = data[0].nomecurso;
            ng.curso.cursosconfea_id = data[0].id;
        });
    }
    
    vercurso = function(id){
        $http.get(base_url+'/cursos/carregar/'+id).success(function(data){
            ng.curso = data;
            });
    };
    
    ng.nivel = function(x){
        var a = [];
        a["S"] = "SUPERIOR";
        a["M"] = "MÉDIO";
        a["H"] = "HÍBRIDO";
        a["E"] = "ESPECIALIZAÇÃO";
        a["T"] = "MESTRADO";
        a["D"] = "DOUTORADO";
        a["A"] = "APERFEIÇOAMENTO";
        return a[x];
    }
    
    ng.openUpload = function () {
        ng.msg = '';
        $("#modal-upload").modal("show");
        $("#upload").trigger("click");
    };


    ativaUpload = function () {
        ng.upload = new Dropzone("div#upload", {
            url: base_url + "/upload",
            maxFilesize: 10, //10MB
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
                            console.log(json)
                            ng.arquivos.push(json);
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
        
        ng.arquivos=[];
        ativaUpload();
        ng.id = id;
        $("#modal-form").on("hidden.bs.modal", function () { //Resolvendo o problema da data invertida;
        var data = ng.curso.data_rec_mec.split("-");
        ng.curso.data_rec_mec = data[2] + "-" + data[1] + "-" + data[0];
        var data = ng.curso.data_deferimento.split("-");
        ng.curso.data_deferimento = data[2] + "-" + data[1] + "-" + data[0];
        var data = ng.curso.data_validade.split("-");
        ng.curso.data_validade = data[2] + "-" + data[1] + "-" + data[0];
        });
        
        $http.get(base_url+'/cursos/Ver_nome_instituicao/'+ng.id).success(function(data){
            ng.cur = data[0];
        });
        
        $('#nomecurso').autocomplete({
            paramName: 'pesquisa',
            serviceUrl: base_url + '/cursosconfea/pesquisa',
            transformResult: function (result) {
                return {
                    suggestions: $.map(JSON.parse(result), function (json) {
                        return {data: json.id + '|' + json.nome, value: json.nome};
                    })
                };
            },
            onSelect: function (json) {
                var tmp = json.data.split('|');
                ng.curso.cursosconfea_id = tmp[0];
            }
        });
        
        $('#nometitulo').autocomplete({
            paramName: 'pesquisa',
            serviceUrl: base_url + '/titulosconfea/pesquisa',
            transformResult: function (result) {
                return {
                    suggestions: $.map(JSON.parse(result), function (json) {
                        return {data: json.id + '|' + json.titulo, value: json.titulo};
                    })
                };
            },
            onSelect: function (json) {
                var tmp = json.data.split('|');
                ng.curso.titulosconfea_id = tmp[0];
           }
        });
        ng.lista_da_instituicao(id);
        getMask();
        //ng.reload();
        ng.base_url=base_url;
        //loadInstituicoes();
    };
});
