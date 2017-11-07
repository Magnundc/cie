app.controller("InstituicoesController", function($scope, $http, $timeout){
    var $ = jQuery;
    var ng = $scope;

    var limite = 5;
    var inicio = 0;
    var atual = 1;
    var total;
    var totalcursos;
    var ordem = 'DESC';
    var by = 'totalcursos';
    
    
    
    ng.reload = function(pg){
        atual = pg ? pg : 1;
        
        $http.get(base_url+'/publico/total').success(function(data){
            total = parseInt(data[0].total);
            ng.total = total;
        });
        
        $http.get(base_url+'/publico/totalcursos').success(function(data){
            totalcursos = parseInt(data[0].totalcursos);
            ng.totalcursos = totalcursos;
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
        
        ng.paginar2 = function (registros, pagina) {
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
                ng.paginasc = {primeira: 1};
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

            ng.paginasc = {
                numeros: link_paginacao,
                primeira: first,
                ultima: last
            };

        };
           
        $http.get(base_url+'/publico/listar/'+limite+'/'+inicio+'/'+ordem+'/'+by+'/instituicoes').success(function(data){
            ng.lista = data;
            $timeout(function () {
                ng.paginar(total, atual);
            }, 500);
        });
        
        $http.get(base_url+'/publico/listar_por_curso/'+limite+'/'+inicio+'/ASC/data_rec_mec/cursos').success(function(data){
            ng.listac = data;
            $timeout(function () {
                ng.paginar2(totalcursos, atual);
            }, 500);
        });
        
        for (var i in ng.cursos){
            $http.get(base_url+'/publico/listar_cursos_json/'+ng.cursos[i].id).success(function(data){
            ng.listac[i].totalcursos = data.length
            
            });
            console.log(ng.listac[i].totalcursos);
        } 
        
        for (var i in ng.instituicoes){
            $http.get(base_url+'/publico/listar_cursos_json/'+ng.instituicoes[i].id).success(function(data){
            ng.lista[i].totalcursos = data.length
            
            });
            console.log(ng.lista[i].totalcursos);
        } 
        
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
    };
    
    ng.op_curso = function(id){
        $http.get(base_url+'/publico/carregar_curso/'+id).success(function(data){
            ng.curso = data[0];
            console.log(ng.curso);
                $http.get(base_url + "/publico/arquivos/" + id).success(function (data) {
                ng.arquivos = data;
                $('#modal_op_curso').modal("show");
                });
        });
    };
    
    inst_por_curso = function(id){
        $http.get(base_url+'/publico/lista_cursos_por_cursosconfea/'+id).success(function(data){
            ng.lista_por_cursosconfea = data;
            $('#modal_inst_por_curso').modal("show");
            });
    };
    
    cursos_por_instituicao = function(id){
        $http.get(base_url+'/publico/listar_cursos_json/'+id).success(function(data){
            ng.cursos = data;
            $('#modal_cursos_por_instituicao').modal("show");
            });
    };
    
    ng.cursos_por_instituicao = function(id){
        $http.get(base_url+'/publico/listar_cursos_json/'+id).success(function(data){
            ng.cursos = data;
            $('#modal_cursos_por_instituicao').modal("show");
            });
    };
    
    ng.gerarPdfValch = function (x) {        
        console.log(ng.historicodecisoes)
        var data = x.split("/");
        x = data[2] + "-" + data[1] + "-" + data[0];
       
           for (var i in ng.historicodecisoes){
                var j = 0;
                j++;
                if(ng.historicodecisoes[i].data_validade > ng.historicodecisoes[j].data_validade)
                    var recente = ng.historicodecisoes[i].id;
                else
                    var recente = ng.historicodecisoes[j].id;
                if((ng.historicodecisoes[i].data_validade_ini <= x)&&(ng.historicodecisoes[i].data_validade >= x)){
                    $('#modal_ingresso').modal("hide");
                    $('#modal_pdf').modal("show");
                    var url = base_url + '/cursoshist/pdf/' + ng.historicodecisoes[i].id;
                    ng.pdf = url;
                    return null;
                }
            }
            $('#modal_ingresso').modal("hide");
            $('#modal_pdf').modal("show");
            var url = base_url + '/historicodecisoes/pdf/' + recente;
            ng.pdf = url;
    };
    
    ng.gerarPdfVal = function (x) {        
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
                    $('#modal_pdf').modal("show");
                    var url = base_url + '/historicodecisoes/pdf/' + recente;
                    ng.pdf = url;
                    return null;
                }
            }
            $('#modal_ingresso').modal("hide");
            $('#modal_pdf').modal("show");
            var url = base_url + '/historicodecisoes/pdf/' + recente;
            ng.pdf = url;
        }
        
    };
    
    ng.gerarPdf = function (v) {
        $http.get(base_url + "/publico/carregar_curso/" + v).success(function (data) {
            ng.curso = data[0];
            $http.get(base_url + "/publico/arquivos/" + v).success(function (data) {
                ng.arquivos = data;
                    $http.get(base_url+'/publico/listar_historicodecisoes_json/'+v).success(function(data){
                    ng.historicodecisoes = data;
                    if((ng.historicodecisoes.length>1)&&((ng.curso.nivel=='M')||(ng.curso.nivel=='S'))){
                        $('#modal_ingresso').modal("show");
                    }else{
                        $('#modal_pdf').modal("show");
                        var url = base_url + '/cursos/pdf/' + v;
                        ng.pdf = url;
                    }
                });
            });
        });
    };
    
    grafico_cf = function(){
      $http.get(base_url + "/publico/graf_cursosconfea_cursos").success(function (data) {
            ng.cf = [];
            console.log(data);
            for(var i in data){
                ng.cf[i] = [data[i].name, data[i].y];
            }; 
            console.log(ng.cf);
        
//            ng.cf.data[0] = [data[0].name, data[0].y];
//            ng.cf.data[1] = [data[1].name, data[1].y];
//            ng.cf.data[2] = [data[2].name, data[2].y];
//            ng.cf.data[3] = [data[3].name, data[3].y];
//            ng.cf.data[4] = [data[4].name, data[4].y];
            
            
            
            
            
            Highcharts.chart('grafcursos', {
                chart: {
                    type: 'column'
                },
                credits: {
                    enabled: false
                },
                title: {
                    text: 'Cursos mais ofertados por instituições cadastradas'
                },
                subtitle: {
                    text: 'CREA-GO'
                },
                xAxis: {
                    type: 'category',
                    labels: {
                        rotation: -45,
                        style: {
                            fontSize: '13px',
                            fontFamily: 'Verdana, sans-serif'
                        }
                    }
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Quantidade de instituições'
                    }
                },
                legend: {
                    enabled: false
                },
                tooltip: {
                    pointFormat: 'Ofertado em <b>{point.y}</b> instituições de Goiás'
                },
                series: [{
                    name: 'Cursos',
                    data: [
                        ['TÉCNICO EM SEGURANÇA DO TRABALHO', 33],
                        ['TÉCNICO EM ELETROTÉCNICA', 21],
                        ['AGRONOMIA', 17],
                        ['TÉCNICO EM EDIFICAÇÕES', 16],
                        ['TÉCNICO EM AGROPECUÁRIA', 14],
                        ['TÉCNICO EM MECÂNICA', 14],
                        ['ENGENHARIA CIVIL', 12],
                        ['TÉCNICO EM ELETROMECÂNICA', 11],
                        ['ENGENHARIA ELÉTRICA', 9],
                        ['TÉCNICO EM MEIO AMBIENTE', 8],
                    ],
                    dataLabels: {
                        enabled: true,
                        rotation: 0,
                        color: '#FFFFFF',
                        align: 'center',
                        format: '{point.y}', // one decimal
                        y: 10, // 10 pixels down from the top
                        style: {
                            fontSize: '13px',
                            fontFamily: 'Verdana, sans-serif'
                        }
                    }
                }]
            });
        
      });
        
    };
    
    var init = function(){
        
        
        $('#pesquisa_instituicao').autocomplete({
            paramName: 'pesquisa',
            serviceUrl: base_url + '/publico/pesquisa',
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
               cursos_por_instituicao(tmp[0]);
               $('#pesquisa_instituicao').val(null);
            }
        });
        
        $('#pesquisa_curso').autocomplete({
            paramName: 'pesquisa',
            serviceUrl: base_url + '/publico/pesquisa_curso',
            transformResult: function (result) {
                return {
                    suggestions: $.map(JSON.parse(result), function (json) {
                        return {data: json.id + '|' + json.nome, value: json.nome};
                    })
                };
            },
            onSelect: function (json) {
               var tmp = json.data.split('|');
               inst_por_curso(tmp[0]);
               $('#pesquisa_curso').val(null);
            }
            
        });
        getMask();
        ng.reload();
        grafico_cf();
        ng.base_url=base_url;
        
        
        
    };

    init();

});
