app.controller("InstituicoesController", function($scope, $http, $timeout){
    var $ = jQuery;
    var ng = $scope;

    var limite = 15;
    var inicio = 0;
    var atual = 1;
    var total;
    var ordem = 'DESC';
    var by = 'totalcursos';
    
    
    ng.reload = function(pg){
        atual = pg ? pg : 1;
        $http.get(base_url+'/instituicoes/total').success(function(data){
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
           
        $http.get(base_url+'/instituicoes/listar/'+limite+'/'+inicio+'/'+ordem+'/'+by+'/instituicoes').success(function(data){
            ng.lista = data;
            $timeout(function () {
                ng.paginar(total, atual);
            }, 500);
        });
        for (var i in ng.instituicoes){
            $http.get(base_url+'/cursos/listar_cursos_json/'+ng.instituicoes[i].id).success(function(data){
            ng.lista[i].totalcursos = data.length
            
            });
            console.log(ng.lista[i].totalcursos);
        } 
        
    };

    ng.salvar = function(){
        if(validar("frm-instituicoes")){//validação do formulário antes de salvar
            if(ng.arquivos!=null){
                ng.instituicoe.arquivos = ng.arquivos;
            }
            $.ajax({
                url:base_url+'/instituicoes/salvar',
                type:'post',
                data:ng.instituicoe,
                success:function(json){
                    console.log(json);
                    if(json.result){
                        $("#modal-form").modal("hide");
                        $.dialogo_sucesso(json.message, 2000);
//                        ng.instituicoe = {};
//                        console.log(json);
                        ng.instituicoe.id=json.id

                    }else{
                        $.dialogo_erro(json.message);
                    }
                },
                error:function(r){
                    $.dialogo_erro('Erro na estrutura dos dados.');
                }
            });
            setTimeout(function () {window.location.replace(base_url+'/instituicoes/vertinstituicao/'+ng.instituicoe.id);}, 3000);
        }
        
    };

    ng.delete = function(){
        $.ajax({
            url:base_url+'/instituicoes/excluir/'+ng.instituicoe.id,
            type:'delete',
            dataType:'json',
            success:function(json){
            $("#modal-delete").modal("hide");
                if(json.result){
                    $.dialogo_sucesso(json.message);
                    ng.reload(atual);
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
        ng.instituicoe = {};
        $("#modal-form").modal("show");
    };

    ng.editar = function(i){
        ng.instituicoe = i;
        var data = i.data_registro.split("-");
        ng.instituicoe.data_registro = data[2] + "-" + data[1] + "-" + data[0];
        $("#modal-form").modal("show");
    };

    ng.excluir = function(i){
        ng.instituicoe = i;
        $("#modal-delete").modal("show");
    };
    
    ng.pesquisar = function(id){
        
        $http.get(base_url+'/instituicoes/pesquisa/'+id).success(function(json){
            
            ng.dados = json;
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
    
    var init = function(){
        
        $('#pesquisa').autocomplete({
            
            paramName: 'pesquisa',
            serviceUrl: base_url + '/instituicoes/pesquisa',
            transformResult: function (result) {
                return {
                    suggestions: $.map(JSON.parse(result), function (json) {
                        return {data: json.id + '|' + json.nome, value: json.nome};
                    })
                };
            },
            onSelect: function (json) {
                var tmp = json.data.split('|');
               // ng.instituicoe.id = tmp[0];
                location.href = base_url + '/instituicoes/vertinstituicao/' + tmp[0];

            }
        });
        getMask();
        ng.dados = {};
        ng.form = {};
        ativaUpload();
        ng.reload();
        ng.arquivos = [];
        ng.base_url=base_url;
    };

    init();

});
