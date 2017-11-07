app.controller("ver_cursoController", function($scope, $http, $timeout){
    var $ = jQuery;
    var ng = $scope;

    vercurso = function(id){
        $http.get(base_url+'/cursos/carregar/'+id).success(function(data){
            ng.curso = data[0];
            var data = ng.curso.data_rec_mec.split("-");
            ng.curso.data_rec_mec = data[2] + "-" + data[1] + "-" + data[0];
            var data = ng.curso.data_deferimento.split("-");
            ng.curso.data_deferimento = data[2] + "-" + data[1] + "-" + data[0];
            var data = ng.curso.data_validade_ini.split("-");
            ng.curso.data_validade_ini = data[2] + "-" + data[1] + "-" + data[0];
            var data = ng.curso.data_validade.split("-");
            ng.curso.data_validade = data[2] + "-" + data[1] + "-" + data[0];
            });
    };
    
    carregar_historicodecisoes = function(id){
        $http.get(base_url+'/historicodecisoes/listar_historicodecisoes_json/'+id).success(function(data){
            ng.historicodecisoes = data;
            console.log(data);
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
            url:base_url+'/cursos/excluir/'+ng.curso.id,
            type:'delete',
            dataType:'json',
            success:function(json){
            $("#modal-delete").modal("hide");
                if(json.result){
                    $.dialogo_sucesso(json.message);
                    location.replace(document.referrer); //recarrega a página anterior
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
        $("#modal-form").modal("show");
    };

    ng.editar = function(id){
        ng.curso = id;
        $("#nomecurso").val(ng.curso.nome);
        $("#nometitulo").val(ng.curso.titulo);
        $("#modal-form").modal("show");
    };
    
    ng.salvar = function(){
        if(validar("frm-cursos")){
            ng.curso.arquivos = ng.arquivos;
            $.ajax({
                url:base_url+'/cursos/salvar',
                type:'post',
                data:ng.curso,
                success:function(json){
                    if(json.result){
                        $("#modal-form").modal("hide");
                        $.dialogo_sucesso(json.message, 2000);
                        //ng.curso = {};
                        //ng.reload(atual);
                    }else{
                        $.dialogo_erro(json.message);
                    }
                },
                error:function(r){
                    $.dialogo_erro('Erro na estrutura dos dados.');
                }
            });
            if(json.result)
            setTimeout(function () {location.reload();}, 3000);
        }
    };

    ng.excluir = function(id){
        ng.curso = id;
        if(ng.historicodecisoes.length>0){
            $("#modal-alerta-subregistro").modal("show");
        }
        $("#modal-delete").modal("show");
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
    
    ng.cadastramento = function(x){
        var a = [];
        a[1] = "DEFINITIVO";
        a[0] = "PROVISÓRIO";
        return a[x];
    }
    
    ng.modalidade = function(x){
        var a = [];
        a[1] = "PRESENCIAL";
        a[0] = "À DISTÂNCIA";
        return a[x];
    };
    
    ng.gerarPdfValch = function (x) {        
        if(validar("frm-ingresso")){
        var data = x.split("/");
        x = data[2] + "-" + data[1] + "-" + data[0];
        if(validar("frm-ingresso")){
           for (var i in ng.historicodecisoes){
                var j = 0;
                j++;
                if(ng.historicodecisoes[i].data_validade > ng.historicodecisoes[j].data_validade)
                    var recente = ng.historicodecisoes[i].id;
                else
                    var recente = ng.historicodecisoes[j].id;
                if((ng.historicodecisoes[i].data_validade_ini <= x)&&(ng.historicodecisoes[i].data_validade >= x)){
                    $('#modal_ingresso').modal("hide");
                    var url = base_url + '/cursoshist/pdf/' + ng.historicodecisoes[i].id;
                    var win = window.open(url, '_blank');
                    win.focus();
                    return null;
                }
            }
            $('#modal_ingresso').modal("hide");
            var url = base_url + '/historicodecisoes/pdf/' + recente;
            var win = window.open(url, '_blank');
            win.focus();
        }
        }
    };
    
    ng.gerarPdfVal = function (x) {        
        if(validar("frm-ingresso")){
        var data = x.split("/");
        x = data[2] + "-" + data[1] + "-" + data[0];
        if(validar("frm-ingresso")){
           for (var i in ng.historicodecisoes){
                var j = 0;
                j++;
                if(ng.historicodecisoes[i].data_validade > ng.historicodecisoes[j].data_validade)
                    var recente = ng.historicodecisoes[i].id;
                else
                    var recente = ng.historicodecisoes[j].id;
                if((ng.historicodecisoes[i].data_validade_ini <= x)&&(ng.historicodecisoes[i].data_validade >= x)){
                    $('#modal_ingresso').modal("hide");
                    var url = base_url + '/historicodecisoes/pdf/' + ng.historicodecisoes[i].id;
                    var win = window.open(url, '_blank');
                    win.focus();
                    return null;
                }
            }
            $('#modal_ingresso').modal("hide");
            var url = base_url + '/historicodecisoes/pdf/' + recente;
            var win = window.open(url, '_blank');
            win.focus();
        }
        }
    };
    
    ng.gerarPdf = function (v) {        
        if((ng.historicodecisoes.length>1)&&((ng.curso.nivel!='M')||(ng.curso.nivel!='S'))){
            $('#modal_ingresso').modal("show");
        }else{
            var url = base_url + '/cursos/pdf/' + v;
            var win = window.open(url, '_blank');
            win.focus();
        }
        
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
        
        getMask();
        vercurso(id);
        ativaUpload();
        carregarArquivos(id);
        carregar_historicodecisoes(id);
        ng.base_url=base_url;
    };
    
    

});
