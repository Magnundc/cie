app.controller("CursosController", function($scope, $http, $timeout){
    var $ = jQuery;
    var ng = $scope;

    var limite = 10;
    var inicio = 0;
    var atual = 1;
    var total;
    var ordem = 'DESC';
    var by = 'id';

    var loadInstituicoes = function(){
        $http.get(base_url+'/instituicoes/listar/1000/0/ASC/id/instituicoes').success(function(data){
            ng.instituicoes = data;
        });
    };

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

    var loadArquivos = function(){
        $http.get(base_url+'/arquivos/listar/1000/0/ASC/id/arquivos').success(function(data){
            ng.arquivos = data;
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
        $.ajax({
            url:base_url+'/cursos/salvar',
            type:'post',
            data:ng.curso,
            success:function(json){
                if(json.result){
                    $("#modal-form").modal("hide");
                    $.dialogo_sucesso(json.message, 2000);
                    ng.curso = {};
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
            url:base_url+'/cursos/excluir/'+ng.curso.id,
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
        ng.curso = {};
        $("#modal-form").modal("show");
    };

    ng.editar = function(c){
        ng.curso = c;
        $("#modal-form").modal("show");
    };

    ng.excluir = function(c){
        ng.curso = c;
        $("#modal-delete").modal("show");
    };

    var init = function(){
        $('.menuprincipal:eq(0)').attr('style', 'background-color: white !important; color: black');
        getMask();
        ng.reload();
        ng.base_url=base_url;
        loadInstituicoes();
        loadCursosconfea();
        loadTitulosconfea();
        loadArquivos();
    };

    init();

});
