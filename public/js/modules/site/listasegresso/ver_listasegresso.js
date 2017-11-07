app.controller("ver_historicodecisoesController", function($scope, $http, $timeout){
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

    ng.reload = function(pg){
        atual = pg ? pg : 1;
        $http.get(base_url+'/historicodecisoes/total').success(function(data){
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

        $http.get(base_url+'/historicodecisoes/listar/'+limite+'/'+inicio+'/'+ordem+'/'+by+'/historicodecisoes').success(function(data){
            ng.lista = data;
            $timeout(function () {
                ng.paginar(total, atual);
            }, 500);
        });
    };

    ng.salvar = function(){
        if(validar("frm-historicodecisoes")){
            $.ajax({
                url:base_url+'/historicodecisoes/salvar',
                type:'post',
                data:ng.historicodecisoe,
                success:function(json){
                    if(json.result){
                        $("#modal-form").modal("hide");
                        $.dialogo_sucesso(json.message, 2000);
                        ng.historicodecisoe = {};
                        ver_historicodecisoes(ng.id);
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
            url:base_url+'/historicodecisoes/excluir/'+ng.historicodecisoe.id,
            type:'delete',
            dataType:'json',
            success:function(json){
            $("#modal-delete").modal("hide");
                if(json.result){
                    $.dialogo_sucesso(json.message);
                    location.replace(document.referrer);
                }else{
                    $.dialogo_erro(json.message);
                }
            },
            error:function(r){
                $.dialogo_erro('Erro na estrutura dos dados.');
            }
        });
    };

    ng.editar = function(h){
        ng.historicodecisoe = h;
        $("#nomecurso").val(ng.historicodecisoe.nome);
        $("#nometitulo").val(ng.historicodecisoe.titulo);
        $("#modal-form").modal("show");
    };

    ng.excluir = function(h){
        ng.historicodecisoe = h;
        $("#modal-delete").modal("show");
    };
    
    ng.gerarPdf = function (v) {        
        var url = base_url + '/pdf/' + h.id;
        var win = window.open(url, '_blank');
        win.focus();        
    };
    
    ver_historicodecisoes = function(id){
        $http.get(base_url+'/historicodecisoes/carregar/'+id).success(function(data){
            ng.historicodecisoe = data[0];
            var data = ng.historicodecisoe.data_rec_mec.split("-");
            ng.historicodecisoe.data_rec_mec = data[2] + "-" + data[1] + "-" + data[0];
            var data = ng.historicodecisoe.data_deferimento.split("-");
            ng.historicodecisoe.data_deferimento = data[2] + "-" + data[1] + "-" + data[0];
            var data = ng.historicodecisoe.data_validade.split("-");
            ng.historicodecisoe.data_validade = data[2] + "-" + data[1] + "-" + data[0];
            });
    };
    
    
    ng.reconhecimento = function(x){
        var a = [];
        a[1] = "DEFINITIVO";
        a[0] = "PROVISÓRIO";
        return a[x];
    }

    ng.init = function(id){
        //$('.sidebar ul li a:eq(0)').addClass('active');
        //$('.menuprincipal:eq(0)').addClass('visual').removeClass('sidebar');
        //$('.menuprincipal:eq(0)').attr('style', 'background-color: white !important; color: black');        
        ng.id = id;
        $("#modal-form").on("hidden.bs.modal", function () { //Resolvendo o problema da data invertida;
        var data = ng.historicodecisoe.data_rec_mec.split("-");
        ng.historicodecisoe.data_rec_mec = data[2] + "-" + data[1] + "-" + data[0];
        var data = ng.historicodecisoe.data_deferimento.split("-");
        ng.historicodecisoe.data_deferimento = data[2] + "-" + data[1] + "-" + data[0];
        var data = ng.historicodecisoe.data_validade.split("-");
        ng.historicodecisoe.data_validade = data[2] + "-" + data[1] + "-" + data[0];
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
                ng.historicodecisoe.cursosconfea_id = tmp[0];
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
                ng.historicodecisoe.titulosconfea_id = tmp[0];
           }
        });
        getMask();
        ver_historicodecisoes(id);
        //ng.reload();
        ng.base_url=base_url;
        //loadCursosconfea();
        //loadTitulosconfea();
        //loadCursos();
     };
});
