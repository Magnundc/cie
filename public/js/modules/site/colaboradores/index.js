app.controller("ColaboradoresController", function($scope, $http, $timeout){
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
        $http.get(base_url+'/colaboradores/total').success(function(data){
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

        $http.get(base_url+'/colaboradores/listar/'+limite+'/'+inicio+'/'+ordem+'/'+by+'/colaboradores').success(function(data){
            ng.lista = data;
            $timeout(function () {
                ng.paginar(total, atual);
            }, 500);
        });
    };

    ng.salvar = function(){
        $.ajax({
            url:base_url+'/colaboradores/salvar',
            type:'post',
            data:ng.colaboradore,
            success:function(json){
                if(json.result){
                    $("#modal-form").modal("hide");
                    $.dialogo_sucesso(json.message, 2000);
                    ng.colaboradore = {};
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
            url:base_url+'/colaboradores/excluir/'+ng.colaboradore.id,
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
        ng.colaboradore = {};
        $("#modal-form").modal("show");
    };

    ng.editar = function(c){
        ng.colaboradore = c;
        $("#modal-form").modal("show");
    };

    ng.excluir = function(c){
        ng.colaboradore = c;
        $("#modal-delete").modal("show");
    };
    
    ng.pesquisar = function(id){
        $http.get(base_url+'/colaboradores/pesquisa/'+id).success(function(json){
            ng.dados = json;
        });
    };

    var init = function(){
        $('#pesquisa').autocomplete({
            
            paramName: 'pesquisa',
            serviceUrl: base_url + '/colaboradores/pesquisa',
            transformResult: function (result) {
                return {
                    suggestions: $.map(JSON.parse(result), function (json) {
                        return {data: json.id + '|' + json.login, value: json.login};
                    })
                };
            },
            onSelect: function (json) {
                var tmp = json.data.split('|');
               // ng.instituicoe.id = tmp[0];
                location.href = base_url + '/colaboradores/vertinstituicao/' + tmp[0];

            }
        });
        getMask();
        ng.reload();
        ng.base_url=base_url;
    };

    init();

});
