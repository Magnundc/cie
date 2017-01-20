app.controller("verController", function($scope, $http, $timeout){
    var $ = jQuery;
    var ng = $scope;

    verinstituicao = function(id){
        
        $http.get(base_url+'/instituicao/carregar/'+id).success(function(data){
            ng.instituicao = data;
            var datas = data.data_registro.split("-");
            ng.instituicao.data_registro = datas[2] + "-" + datas[1] + "-" + datas[0];
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
    
    ng.excluir = function(id){
        ng.instituicoe = id;
        $("#modal-delete").modal("show");
    };
    
    ng.editar = function(id){
        ng.instituicoe = id;
        var data = id.data_registro.split("-");
        ng.instituicoe.data_registro = data[2] + "-" + data[1] + "-" + data[0];
        $("#modal-form").modal("show");
    }
    
    ng.init = function(id){
        getMask();
        verinstituicao(id);
        ng.base_url=base_url;
    };


});
