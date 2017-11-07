app.controller("verController", function($scope, $http, $timeout){
    var $ = jQuery;
    var ng = $scope;
    var indice;
    
    verinstituicao = function(id){
        $http.get(base_url+'/instituicoes/carregar/'+id).success(function(data){
            ng.instituicoe = data[0];
            var datas = data[0].data_registro.split("-");
            ng.instituicoe.data_registro = datas[2] + "-" + datas[1] + "-" + datas[0];
            
        });
    };
    
    lista_da_instituicao = function(id){ //função que recebe os dados dos cursos enviados pela função listar_cursos_json do arquvio /modules/site/controllers/cursos.php.php
        $http.get(base_url+'/cursos/listar_cursos_json/'+id).success(function(data){
            ng.cursos = data;
        });
    }
    
    carregarArquivos = function (id) {
        $http.get(base_url + "/carregar/arquivos/" + id).success(function (data) {
            ng.arquivos = data;
            console.log(ng.arquivos);
        });
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
                }else{
                    $.dialogo_erro(json.message);
                }
            },
            error:function(r){
                $.dialogo_erro('Erro na estrutura dos dados.');
            }
        });
        setTimeout(function () {location.replace(document.referrer);}, 3000);
    };
    
    ng.salvar = function(){
        if(validar("frm-instituicoes")){
            ng.instituicoe.arquivos = ng.arquivos;
            $.ajax({
                url:base_url+'/instituicoes/salvar',
                type:'post',
                data:ng.instituicoe,
                success:function(json){
                    if(json.result){
                        $("#modal-form").modal("hide");
                        $.dialogo_sucesso(json.message, 2000);
                    }else{
                        $.dialogo_erro(json.message);
                    }
                },
                error:function(r){
                    $.dialogo_erro('Erro na estrutura dos dados.');
                }
            });
            if(json.result){
            setTimeout(function () {location.reload();}, 3000);
            }
        }
        
    };
    
    ng.excluir = function(id){
        ng.instituicoe = id;
        if(ng.cursos.length>0){
            $("#modal-alerta-subregistro").modal("show");
        }
        $("#modal-delete").modal("show");
    };
    
    ng.editar = function(id){
        ng.instituicoe = id;
        //ng.arquivos = [];
        $("#modal-form").modal("show");
    }
    
    ng.nivel = function(x){
        var a = [];
        a["S"] = "SUPERIOR";
        a["M"] = "MÉDIO";
        a["H"] = "HÍBRIDO";
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
   
    ng.gerarPdf = function (v) {        
        var url = base_url + '/pdf/' + ng.instituicoe.id;
        var win = window.open(url, '_blank');
        win.focus();
    };
    
    ng.init = function(id){
        getMask();
        carregarArquivos(id);
        verinstituicao(id);
        lista_da_instituicao(id);
        ativaUpload();
        ng.base_url=base_url;
    };


});
