app.controller("InstituicoesController", function($scope, $http, $timeout){
    var $ = jQuery;
    var ng = $scope;

    var limite = 10;
    var inicio = 0;
    var atual = 1;
    var total;
    var ordem = 'DESC';
    var by = 'id';

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
    };

    ng.salvar = function(){
        $.ajax({
            url:base_url+'/instituicoes/salvar',
            type:'post',
            data:ng.instituicoe,
            success:function(json){
                if(json.result){
                    $("#modal-form").modal("hide");
                    $.dialogo_sucesso(json.message, 2000);
                    ng.instituicoe = {};
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
    
    ng.pesquisar = function(){
        $http.get(base_url+'/instituicoes/pesquisar/'+ng.form.pesquisa).success(function(json){
            console.log(json);
            ng.dados = json;
        })
    };
    
    ng.verinstituicao = function(i){
        ng.instituicoe = i;
        var data = i.data_registro.split("-");
        ng.instituicoe.data_registro = data[2] + "-" + data[1] + "-" + data[0];
        $("#modal-form").modal("show");
    };
    
    var init = function(){
        getMask();
        ng.dados = {};
        ng.form = {};
        ng.reload();
        ng.base_url=base_url;
    };

    init();

});
