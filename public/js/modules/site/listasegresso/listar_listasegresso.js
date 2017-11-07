app.controller("Listar_listasegressoController", function($scope, $http, $timeout){
    var $ = jQuery;
    var ng = $scope;

    var limite = 10;
    var inicio = 0;
    var atual = 1;
    var total;
    var ordem = 'DESC';
    var by = 'id';
    var cursos_id;
    var instituicao_id;
    var nome_instituicao;

    var loadCursosconfea = function(){
        $http.get(base_url+'/cursosconfea/listar/1000/0/ASC/id/cursosconfea').success(function(data){
            ng.cursosconfea = data;
        });
    };
    
    var loadTitulosconfea = function(){
        $http.get(base_url+'/titulosconfea/listar/1000/0/ASC/id/titulosconfea').success(function(data){
            ng.titulosconfea = data;
        });
    };

   
    var loadCursos = function(){
        $http.get(base_url+'/cursos/listar/1000/0/ASC/id/cursos').success(function(data){
            ng.cursos = data;
        });
    };
    
    var loadListasegresso = function(){
        $http.get(base_url+'/listasegresso/listar/1000/0/ASC/id/listasegresso').success(function(data){
            ng.listasegresso = data;
        });
    };

    carregarArquivos = function (id) {
        $http.get(base_url + "/carregar/arquivos/" + id).success(function (data) {
            ng.arquivos = data;
        });
    };
    
    ng.reload = function(pg){
        atual = pg ? pg : 1;
        $http.get(base_url+'/listasegresso/total').success(function(data){
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

        $http.get(base_url+'/listasegresso/listar/'+limite+'/'+inicio+'/'+ordem+'/'+by+'/listasegresso').success(function(data){
            ng.lista = data;
            $timeout(function () {
                ng.paginar(total, atual);
            }, 500);
        });
    };

    ng.salvar = function(){
        if(validar("frm-listasegresso")){
            ng.listasegress.cursos_id = ng.id;
            $.ajax({
                url:base_url+'/listasegresso/salvar',
                type:'post',
                data:ng.listasegress,
                success:function(json){
                    if(json.result){
                        $("#modal-form").modal("hide");
                        $.dialogo_sucesso(json.message, 2000);
                        ng.listasegress = {};
                        ng.listar_listasegresso(ng.id);
                    }else{
                        $.dialogo_erro(json.message);
                    }
                },
                error:function(r){
                    $.dialogo_erro('Erro na estrutura dos dados.');
                }
            });
        }
    };

    ng.delete = function(){
        $.ajax({
            url:base_url+'/listasegresso/excluir/'+ng.listasegress.id,
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
        ng.listasegress = {};
        ng.listasegress.cursos_id = cursos_id;
        $("#modal-form").modal("show");
    };

    ng.editar = function(h){
        ng.listasegress = h;
        $("#modal-form").modal("show");
    };

    ng.excluir = function(h){
        ng.listasegress = h;
        $("#modal-delete").modal("show");
    };
    
    ng.listar_listasegresso = function(id){ //função que recebe os dados dos cursos enviados pela função listar_cursos_json do arquvio /modules/site/controllers/cursos.php.php
        cursos_id = id;
        ng.listasegress = {};
        ng.listasegress.cursos_id = id;
        $http.get(base_url+'/listasegresso/listar_listasegresso_json/'+id).success(function(data){
            ng.listasegresso = data;
        });
    }
    
    verlistasegresso = function(id){
       $http.get(base_url+'/listasegresso/carregar/'+id).success(function(data){
            ng.listasegress = data;
            });
    };
    
    ng.nomecurso = function(x){
        $http.get(base_url+'/cursos/carregar/'+id).success(function(data){
            ng.curso = data;
            });
        return ng.curso.nome;    
    };
    
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
        ng.id = id;
        
        $http.get(base_url+'/listasegresso/ver_nomeinstituicao/'+ng.id).success(function(data){
            ng.listasegress = data[0];
        });
        
        $http.get(base_url+'/listasegresso/ver_nomecurso/'+ng.id).success(function(data){
            ng.listasegress = data[0];
        });
        ng.listar_listasegresso(id);
        getMask();
        //ng.reload();
        carregarArquivos(id);
        ativaUpload();
        ng.base_url=base_url;
        //loadCursosconfea();
        //loadTitulosconfea();
        //loadCursos();
     };
});
