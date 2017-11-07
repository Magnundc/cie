app.controller("ver_recadastramentoController", function($scope, $http, $timeout){
    var $ = jQuery;
    var ng = $scope;

    verrecadastramento = function(id){
        $http.get(base_url+'/recadastramentos/carregar/'+id).success(function(data){
            console.log(data);
            ng.recadastramento = data[0];
            var data = ng.recadastramento.data_recadastro.split("-");
            ng.recadastramento.data_recadastro = data[2] + "-" + data[1] + "-" + data[0];
            $http.get(base_url+'/recadastramentos/Ver_nome_instituicao/'+ng.recadastramento.instituicao_id).success(function(data){
                ng.recadastramento.nome_instituicao = data[0].nome_instituicao;
            });
        });
    };
    
    carregarArquivos = function (id) {
        $http.get(base_url + "/carregar/arquivos/" + id).success(function (data) {
            ng.arquivos = data;
            console.log(ng.arquivos);
        });
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
                     //recarrega a página anterior
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

    ng.incluir = function(){
        ng.recadastramento = {};
        $("#modal-form").modal("show");
    };

    ng.editar = function(id){
        ng.recadastramento = id;
        $("#modal-form").modal("show");
    };
    
    ng.salvar = function(){
        if(validar("frm-recadastramentos")){
            ng.recadastramento.arquivos = ng.arquivos;
            $.ajax({
                url:base_url+'/recadastramentos/salvar',
                type:'post',
                data:ng.recadastramento,
                success:function(json){
                    if(json.result){
                        $("#modal-form").modal("hide");
                        $.dialogo_sucesso(json.message, 2000);
                        //ng.recadastramento = {};
                        //ng.reload(atual);
                    }else{
                        $.dialogo_erro(json.message);
                    }
                },
                error:function(r){
                    $.dialogo_erro('Erro na estrutura dos dados.');
                }
            });
        }
        setTimeout(function () {location.reload();}, 3000);
    };

    ng.excluir = function(id){
        ng.recadastramento = id;
        $("#modal-delete").modal("show");
    };
    
    ng.gerarPdf = function (v) {        
        var url = base_url + '/pdf/' + r.id;
        var win = window.open(url, '_blank');
        win.focus();
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
        getMask();
        verrecadastramento(id);
        carregarArquivos(id);
        ativaUpload();
        ng.base_url=base_url;
    };
    
    

});
