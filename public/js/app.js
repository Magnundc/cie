var app = angular.module("app", []);

app.directive("contenteditable", function () {
    return {
        restrict: "A",
        require: "ngModel",
        link: function (scope, element, attrs, ngModel) {
            function read() {
                ngModel.$setViewValue(element.text());
            }

            ngModel.$render = function () {
                element.text(ngModel.$viewValue || "");
            };

            element.bind("blur keyup change", function () {
                scope.$apply(read);
            });
        }
    };
});

app.filter('formatarData', function () {
    return function (date) {
        if (date) {
            var d = date.split(" ");
            var data = d[0].split("-");
            return data[2] + "-" + data[1] + "-" + data[0];
        } else {
            return "";
        }
    };
});

app.filter('formatarHora', function () {
    return function (date) {
        if (date) {
            var d = date.split(" ");
            var data = d[0].split("-");
            var hora = d[1].split(":");
            return hora[0] + "h" + hora[1];
        } else {
            return "";
        }
    };
});

app.filter('moeda', function () {
    return function (text) {
        if (text) {
            var str = text.replace('.', '*').split(',').join('.').replace('*', ',');
            return str.toLowerCase();
        } else {
            return text;
        }
    };
});

app.filter('str_pad_left', function () {
    return function (text) {
        if (text) {
            var count = parseInt(text.length);
            var str = "";
            for (i = 0; i < (5 - count); i++) {
                str += "0";
            }
            return str += text;
        } else {
            return "";
        }
    };
});

app.filter('nomeCurto', function () {
    return function (text) {
        if (text) {
            var txt = text.split(" ");
            var curto = txt[0];
            if (txt.length > 1) {
                curto += " " + txt[1];
            }
            return curto;
        } else {
            return "";
        }
    };
});

app.filter('tempo', function () {
    return function (d1) {
        var now = new Date;
        var atual = now.getFullYear() + '-' + (now.getMonth() + 1) + '-' + now.getDate() + ' ' + now.getHours() + ':' + now.getMinutes() + ':' + now.getSeconds();
        var date1 = new Date(d1);
        var date2 = new Date(atual);
        var diferenca = Math.abs(date1 - date2);
        var minutos = 1000 * 60; // tempo em minutos
        var m = Math.round(diferenca / minutos);
        var msg = m <= 1 ? '' : 'há ';
        if (m <= 60) {
            if (m <= 1) {
                msg += ' agora';
            } else {
                msg += m + ' minutos';
            }
        } else if (m >= 60 && m < 1440) {
            var h = parseInt(m / 60);
            if (h > 1) {
                msg += h + ' horas';
            } else {
                msg += h + ' hora';
            }
        } else if (m >= 1440 && m < 10080) {
            var d = parseInt(m / 1440);
            if (d > 1) {
                msg += d + ' dias';
            } else {
                msg += d + ' dia';
            }
        } else if (m >= 10080 && m < 43200) {
            var s = parseInt(m / 10080);
            if (s > 1) {
                msg += s + ' semanas';
            } else {
                msg += s + ' semana';
            }
        } else if (m >= 43200 && m < 518400) {
            var mes = parseInt(m / 43200);
            if (mes > 1) {
                msg += mes + ' meses';
            } else {
                msg += mes + ' mês';
            }
        } else {
            var ano = parseInt(m / 518400);
            if (ano > 1) {
                msg += ano + ' anos';
            } else {
                msg += ano + ' ano';
            }
        }


        return msg;
    };
});


app.filter('contador', function () {
    return function (d1) {
        var now = new Date;
        var atual = now.getFullYear() + '-' + (now.getMonth() + 1) + '-' + now.getDate() + ' ' + now.getHours() + ':' + now.getMinutes() + ':' + now.getSeconds();
        var date1 = new Date(d1);
        var date2 = new Date(atual);
        var diferenca = Math.abs(date1 - date2);
        var minutos = 1000 * 60; // tempo em minutos
        var m = Math.round(diferenca / minutos);
        var msg = "";
        var cm = (m < 60) ? m : parseInt(m % 60);
        if (m <= 60) {
            if (m <= 1) {
                msg += ' cerca de 1 minuto';
            }              
            else {
                msg += m + ' minutos';
            }
        } else {
            var h = parseInt(m / 60);
            if (h > 1) {
                msg += h + ' horas';
            } else {
                msg += h + ' hora';
            }
            if (cm == 1) {
                msg += ' e 1 minuto';
            } else if (cm > 1) {
                msg += ' e ' + cm + ' minutos';
            }
        }
        return msg;
    };
});

app.filter('truncate', function () {
    return function (value, wordwise, max, tail) {
        if (!value)
            return '';

        max = parseInt(max, 10);
        if (!max)
            return value;
        if (value.length <= max)
            return value;

        value = value.substr(0, max);
        if (wordwise) {
            var lastspace = value.lastIndexOf(' ');
            if (lastspace != -1) {
                value = value.substr(0, lastspace);
            }
        }

        return value + (tail || ' ...');
    };
});