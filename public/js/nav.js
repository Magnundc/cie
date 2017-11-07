app.controller("NavController", function ($scope, $http, $timeout) {
    var $ = jQuery;
    var ng = $scope;
    
    /**
     * Componente da solução de logout de usuário logado por htpasswd
     * O método consiste em enviar uma chamada no modo síncrono para uma página qualquer fornecendo credenciais inválidas no cabeçalho httpd
     * @author  Wender Fernandes
     * @returns void
     */
    ng.logout = function () {
        $http.get(base_url+'/sair').success(function(data){
        });        
        var secUrl = base_url + '/private';
        //var redirUrl = 'http://crea-go.org.br/portal/sistemas.php';
        var redirUrl = base_url + '/sistemas.php';
        redirUrl = redirUrl.replace('cie','portal');
        if (bowser.msie) {
            document.execCommand('ClearAuthenticationCache', 'false');
        } else if (bowser.gecko) {            
            $.ajax({
                async: false,
                url: secUrl,
                type: 'GET',
                username: 'logout'
            });
        } else{       
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET", secUrl, true);
            xmlhttp.setRequestHeader("Authorization", "Basic logout");
            xmlhttp.send();
        }
        setTimeout(function () {
            window.location.href = redirUrl;
        }, 1);
    };

});


