<?php

define("BASE_APPLICATION", str_replace("system", "", dirname(__DIR__)));
define("BASEPATH", BASE_APPLICATION);
echo "\n\nGerando views...\n";
define("tab", chr(32) . chr(32) . chr(32) . chr(32));
$tab = chr(32);
include (BASE_APPLICATION . "application/config/database.php");

define("database", $db['default']['database']);

$host = $db['default']['hostname'];
$user = $db['default']['username'];
$pass = $db['default']['password'];
$db = $db['default']['database'];
mysql_pconnect($host, $user, $pass);
mysql_select_db($db);
$pri = array();
$sql = "show tables";
$query = mysql_query($sql);

function criar_view($tabela) {
    echo "Gerando templates...\n";
    $sql = "desc {$tabela}";
    $query = mysql_query($sql);
    $filename = explode("_", $tabela);
    $name = "";
    foreach ($filename as $fn) {
        $name.=ucfirst($fn);
    }
    $pri = array();
    while ($row = mysql_fetch_array($query)) {
        if ($row['Key'] == "PRI") {
            $pri[] = $row['Field'];
        }
    }
    $key = isset($pri[0]) ? $pri[0] : "id";
    $view = strtolower($name);
    $dir = BASE_APPLICATION . "/application/modules/site/views/";


    if (!file_exists(BASE_APPLICATION . "/application/modules/site/")) {
        mkdir(BASE_APPLICATION . "/application/modules/site/", 0775);
    }

    if (!file_exists(BASE_APPLICATION . "/application/modules/site/views/")) {
        mkdir(BASE_APPLICATION . "/application/modules/site/views/", 0775);
    }

    $folder = $dir . "layout";
    if (!file_exists($folder)) {
        mkdir($folder, 0775);
    }

    $folder = $dir . "home";
    if (!file_exists($folder)) {
        mkdir($folder, 0775);
    }

    //Cria o index.tpl
    $file = $dir . "home/index.tpl";
    if (!file_exists($file)) {
        $fp = fopen($file, "w+");
        $mtabelas = mysql_query("show tables");
        $str = "{extends file=\"layout/template.tpl\"}\n";
        $str .= "{block name=\"conteudo\"}\n";
        $str .= tab . "<div class=\"row\">\n";
        $str .= tab . tab . "<h1>Code Igniter HMVC Smarty</h1>\n";
        $str .= tab . "</div>\n";
        $str .="{/block}";
        $fp = fopen($file, "w+");
        fwrite($fp, $str);
        fclose($fp);
    }

    //Cria o pagination.tpl
    $file = $dir . "layout/pagination.tpl";
    if (!file_exists($file)) {
        $fp = fopen($file, "w+");
        $str = tab . "<div>\n";
        $str .= tab . tab . "<ul class=\"pagination\" ng-show=\"paginas.numeros.length > 1\">\n";
        $str .= tab . tab . tab . "<li ng-if=\"paginas.primeira > 0\"><a href=\"javascript:void(0)\" ng-click=\"reload(pagina.primeira)\">Página 1</a></li>\n";
        $str .= tab . tab . tab . "<li ng-if=\"paginas.primeira > 0\"></li>\n";
        $str .= tab . tab . tab . "<li ng-repeat=\"pagina in paginas.numeros\">\n";
        $str .= tab . tab . tab . tab . "<a class=\"{literal}{{pagina.classe}}{/literal}\" href=\"javascript:void(0)\" ng-click=\"reload(pagina.pag)\"><span ng-if=\"pagina.pag < 10\">0</span>{literal}{{pagina.pag}}{/literal}</a>\n";
        $str .= tab . tab . tab . "</li>\n";
        $str .= tab . tab . tab . "<li ng-if=\"paginas.ultima > 0\"></li>\n";
        $str .= tab . tab . tab . "<li ng-if=\"paginas.ultima > 0\"><a href=\"javascript:void(0)\" ng-click=\"reload(paginas.ultima)\">Página {literal}{{paginas.ultima}}{/literal}</a></li>\n";
        $str .= tab . tab . tab . "</li>\n";
        $str .= tab . tab . "</ul>\n";
        $str .= tab . "</div>\n";
        $fp = fopen($file, "w+");
        fwrite($fp, $str);
        fclose($fp);
    }

    //Cria o emplate.tpl

    if (!file_exists(BASE_APPLICATION . "/application/modules/site/views/layout")) {
        mkdir(BASE_APPLICATION . "/application/modules/site/views/layout", 0775);
    }

    $file = $dir . "layout/template.tpl";
    if (!file_exists($file)) {
        $fp = fopen($file, "w+");
        $str = "<!DOCTYPE html>\n";
        $str .= "<html lang=\"pt_br\">\n";
        $str .= tab . "<head>\n";
        $str .= tab . tab . "<head>\n";
        $str .= tab . tab . tab . "<meta charset=\"utf-8\">\n";
        $str .= tab . tab . tab . "<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\n";
        $str .= tab . tab . tab . "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n";
        $str .= tab . tab . tab . "<meta name=\"description\" content=\"Nova Aplicação CREA-GO\">\n";
        $str .= tab . tab . tab . "<meta name=\"author\" content=\"Wender Fernandes\">\n";
        $str .= tab . tab . tab . "<title>{block name=\"title\"}Novo projeto{/block}</title>\n\n";
        $str .= tab . tab . tab . "<meta name=\"mobile-web-app-capable\" content=\"yes\" />\n";
        $str .= tab . tab . tab . "<link rel=\"icon\" sizes=\"48x48\" href=\"{base_url}/public/icons/icon-48.png\" />\n";
        $str .= tab . tab . tab . "<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\" />\n";
        $str .= tab . tab . tab . "<link rel=\"apple-touch-startup-image\" href=\"{base_url}/public/icons/icon-48.png\" />\n";
        $str .= tab . tab . tab . "<link rel=\"manifest\" href=\"{base_url}/public/manifest.json\" />\n\n";        
        $str .= tab . tab . tab . "<!-- Bootstrap Core CSS -->\n";
        $str .= tab . tab . tab . "<link href=\"{base_url}/public/componentes/sb/bower_components/bootstrap/dist/css/bootstrap.min.css\" rel=\"stylesheet\">\n\n";
        $str .= tab . tab . tab . "<link href=\"{base_url}/public/componentes/sb/bower_components/metisMenu/dist/metisMenu.min.css\" rel=\"stylesheet\">\n";
        $str .= tab . tab . tab . "<!-- Custom CSS -->\n";
        $str .= tab . tab . tab . "<link href=\"{base_url}/public/componentes/sb/dist/css/sb-admin-2.css\" rel=\"stylesheet\">\n\n";
        $str .= tab . tab . tab . "<!-- Custom Fonts -->\n";
        $str .= tab . tab . tab . "<link href=\"{base_url}/public/componentes/sb/bower_components/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">\n\n";
        $str .= tab . tab . tab . "<!-- FontAwesome -->\n";
        $str .= tab . tab . tab . "<link rel=\"stylesheet\" href=\"{base_url}/public/componentes/FontAwesome/css/font-awesome.min.css\" />\n";
        $str .= tab . tab . tab . "<link rel=\"stylesheet\" href=\"{base_url}/public/componentes/fontes/style.css\" />\n\n";
        $str .= tab . tab . tab . "<!-- Toast message -->\n";
        $str .= tab . tab . tab . "<link rel=\"stylesheet\" href=\"{base_url}/public/componentes/toast-message/src/main/resources/css/jquery.toastmessage.css\" />\n\n";
        $str .= tab . tab . tab . "<!-- Custom CSS -->\n";
        $str .= tab . tab . tab . "<link href=\"{base_url}/public/css/estilo.css\" rel=\"stylesheet\" type=\"text/css\">\n\n";
        $str .= tab . tab . tab . "<!-- jQuery -->\n";
        $str .= tab . tab . tab . "<script src=\"{base_url}/public/componentes/sb/bower_components/jquery/dist/jquery.min.js\"></script>\n\n";
        $str .= tab . tab . tab . "<!-- AngularJS -->\n";
        $str .= tab . tab . tab . "<script src=\"{base_url}/public/componentes/angular/angular.min.js\" type=\"text/javascript\"></script>\n\n";        
        $str .= tab . tab . tab . "<!-- mascaras -->\n";
        $str .= tab . tab . tab . "<script src=\"{base_url}/public/componentes/mascaras/js/jquery.inputmask.js\" type=\"text/javascript\"></script>\n";
        $str .= tab . tab . tab . "<script src=\"{base_url}/public/componentes/maskmoney/src/jquery.maskMoney.js\"></script>\n\n";        
        $str .= tab . tab . tab . "<!--Application -->\n";
        $str .= tab . tab . tab . "<script src=\"{base_url}/public/js/application.js\" type=\"text/javascript\"></script>\n\n";        
        $str .= tab . tab . tab . "<!-- Application AngularJS -->\n";
        $str .= tab . tab . tab . "<script src=\"{base_url}/public/js/app.js\" type=\"text/javascript\"></script>\n\n";
        $str .= tab . tab . tab . "<!-- Bootstrap Core JavaScript -->\n";
        $str .= tab . tab . tab . "<script src=\"{base_url}/public/componentes/sb/bower_components/bootstrap/dist/js/bootstrap.min.js\"></script>\n\n";
        $str .= tab . tab . tab . "<!-- Metis Menu Plugin JavaScript -->\n";
        $str .= tab . tab . tab . "<script src=\"{base_url}/public/componentes/sb/bower_components/metisMenu/dist/metisMenu.min.js\"></script>\n\n";
        $str .= tab . tab . tab . "<!-- Custom Theme JavaScript -->\n";
        $str .= tab . tab . tab . "<script src=\"{base_url}/public/componentes/sb/dist/js/sb-admin-2.js\"></script>\n\n";
        $str .= tab . tab . tab . "<!--Toast message -->\n";
        $str .= tab . tab . tab . "<script src=\"{base_url}/public/componentes/toast-message/src/main/javascript/jquery.toastmessage.js\" type=\"text/javascript\"></script>\n";
        $str .= tab . tab . tab . "<script src=\"{base_url}/public/js/dialog.js\" type=\"text/javascript\"></script>\n\n";
        $str .= tab . tab . tab . "<!-- Jquery Ui -->\n";
        $str .= tab . tab . tab . "<script src=\"{base_url}/public/componentes/jquery-ui-1.11.4/jquery-ui.js\" type=\"text/javascript\"></script>\n";
        $str .= tab . tab . tab . "<script type=\"text/javascript\" src=\"{base_url}/public/componentes/jquery/jquery.ui.touch-punch.min.js\"></script>\n\n";
        $str .= tab . tab . tab . "<script>\n";
        $str .= tab . tab . tab . tab . "var base_url = \"{base_url}\";\n";
        $str .= tab . tab . tab . "</script>\n";
        $str .= tab . tab . "</head>\n";
        $str .= tab . tab . "<body ng-app=\"app\">\n";
        $str .= tab . tab . "<nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">\n";
        $str .= tab . tab . tab . "<div class=\"navbar-header\">\n";
        $str .= tab . tab . tab . tab . "<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"navbar-collapse\">\n";
        $str .= tab . tab . tab . tab . tab . "<span class=\"sr-only\">Toggle navigation</span>\n";
        $str .= tab . tab . tab . tab . tab . "<span class=\"icon-bar\"></span>\n";
        $str .= tab . tab . tab . tab . tab . "<span class=\"icon-bar\"></span>\n";
        $str .= tab . tab . tab . tab . tab . "<span class=\"icon-bar\"></span>\n";
        $str .= tab . tab . tab . tab . "</button>\n";
        $str .= tab . tab . tab . "<a class=\"navbar-brand\" href=\"{base_url}/\">Novo projeto CREA-GO</a>\n";
        $str .= tab . tab . "</div>\n";
        $str .= tab . tab . "<div class=\"navbar-default sidebar\" role=\"navigation\">\n";
        $str .= tab . tab . tab . "<div class=\"sidebar-nav navbar-collapse\">\n";
        $str .= tab . tab . tab . tab . "<ul class=\"nav\" id=\"side-menu\">\n";
        $str .= tab . tab . tab . tab . tab . "<li>\n";
        $str .= tab . tab . tab . tab . tab . tab . "<a href=\"{base_url}/#1\"><i class=\"fa icon-link\"></i> Link 1</a>\n";
        $str .= tab . tab . tab . tab . tab . "</li>\n";
        $str .= tab . tab . tab . tab . "</ul>\n";
        $str .= tab . tab . tab . "</div>\n";
        $str .= tab . tab . "</div>\n";
        $str .= tab . "</nav>\n";
        $str .= tab . "<div id=\"wrapper\">\n";
        $str .= tab . tab . "<div id=\"page-wrapper\">\n";
        $str .= tab . tab . tab . "<div class=\"container-fluid\">\n";
        $str .= tab . tab . tab . tab . "<div class=\"v_space\">{block name=\"conteudo\"}{/block}</div>\n";
        $str .= tab . tab . tab . "</div>\n";
        $str .= tab . tab . "</div>\n";
        $str .= tab . "</body>\n";
        $str .= "</html>\n";

        $fp = fopen($file, "w+");
        fwrite($fp, $str);
        fclose($fp);
    }

    $folder = $dir . str_replace("_", "", $tabela) . "/";
    if (!file_exists($folder)) {
        mkdir($folder, 0775);
    }

    $file = $folder . "index.tpl";
    if (!file_exists($file)) {
        $fp = fopen($file, "w+");
        $mtabelas = mysql_query("show tables");
        $str = "{extends file=\"layout/template.tpl\"}\n";
        $str .= "{block name=\"conteudo\"}\n";
        $str .= tab . "<div class=\"row\" ng-controller=\"" . ucfirst($tabela) . "Controller\">\n";
        $str .= tab . tab . "{include file=\"{$tabela}/modal-form.tpl\"}\n";
        $str .= tab . tab . "{include file=\"{$tabela}/modal-delete.tpl\"}\n";
        $str .= tab . tab . "<div class=\"panel panel-default\">\n";
        $str .= tab . tab . tab . "<div class=\"panel-heading\">\n";
        $str .= tab . tab . tab . tab . "<h1 class=\"panel-title\">{$tabela}</h1>\n";
        $str .= tab . tab . tab . "</div>\n";
        $str .= tab . tab . tab . "<div class=\"panel-body table-container\">\n";
        $str .= tab . tab . tab . tab . "{include file=\"{$tabela}/lista.tpl\"}\n";
        $str .= tab . tab . tab . "</div>\n";
        $str .= tab . tab . tab . "<div class=\"panel-footer table-container\">\n";
        $str .= tab . tab . tab . tab . "{include file=\"layout/pagination.tpl\"}\n";
        $str .= tab . tab . tab . "</div>\n";
        $str .= tab . tab . "</div>\n";
        $str .= tab . "</div>\n";
        $str .= tab . "<script src=\"{base_url}/public/js/modules/site/{$tabela}/index.js\"></script>\n";
        $str .= "{/block}\n";

        fwrite($fp, $str);
        fclose($fp);
        echo "Templates gerados!\n";
    }


    $file = $folder . "modal-delete.tpl";
    if (!file_exists($file)) {
        $fp = fopen($file, "w+");
        $str = "<div class=\"modal fade\" id=\"modal-delete\" tabindex=\"-1\" role=\"dialog\"  aria-hidden=\"false\">\n";
        $str .= tab . "<div class=\"modal-dialog\">\n";
        $str .= tab . tab . "<div class=\"modal-content\">\n";
        $str .= tab . tab . tab . "<div class=\"modal-header\">\n";
        $str .= tab . tab . tab . tab . "<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"false\">&times;</button>\n";
        $str .= tab . tab . tab . tab . "<h4 class=\"modal-title\"><i class=\"glyphicon glyphicon-question-sign\"></i> Confirmação de segurança</h4>\n";
        $str .= tab . tab . tab . "</div>\n";
        $str .= tab . tab . tab . "<div class=\"modal-body\">\n";
        $str .= tab . tab . tab . tab . "<p>Atenção!</p><p>&nbsp;</p> <p>Esta operação não poderá ser desfeita, confirma a exclusão desse registro?</p>\n";
        $str .= tab . tab . tab . "</div>\n";
        $str .= tab . tab . tab . "<div class=\"modal-footer\">\n";
        $str.= tab . tab . tab . tab . "<button ng-click=\"delete()\" class=\"btn btn-success\"><i class=\"glyphicon glyphicon-ok\"></i> Sim</button>\n";
        $str.= tab . tab . tab . tab . "<button data-dismiss=\"modal\" class=\"btn btn-danger\"><i class=\"glyphicon glyphicon-remove\"></i> Não</button>\n";
        $str .= tab . tab . tab . "</div>\n";
        $str .= tab . tab . "</div>\n";
        $str .= tab . "</div>\n";
        $str.= "</div>\n";
        fwrite($fp, $str);
        fclose($fp);
        echo "Templates gerados!\n";
    }

    $file = $folder . "modal-form.tpl";
    if (!file_exists($file)) {
        $fp = fopen($file, "w+");
        $str = "<div class=\"modal fade\" id=\"modal-form\" tabindex=\"-1\" role=\"dialog\"  aria-hidden=\"false\">\n";
        $str .= tab . "<div class=\"modal-dialog\">\n";
        $str .= tab . tab . "<div class=\"modal-content\">\n";
        $str .= tab . tab . tab . "<div class=\"modal-header\">\n";
        $str .= tab . tab . tab . tab . "<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"false\">&times;</button>\n";
        $str .= tab . tab . tab . tab . "<h4 class=\"modal-title\"><i class=\"glyphicon glyphicon-pencil\"></i> Cadastro</h4>\n";
        $str .= tab . tab . tab . "</div>\n";
        $str .= tab . tab . tab . "<div class=\"modal-body\">\n";
        $str .= tab . tab . tab . tab . "{include file=\"" . strtolower($tabela) . "/form.tpl\"}\n";
        $str .= tab . tab . tab . "</div>\n";
        $str .= tab . tab . tab . "<div class=\"modal-footer\">\n";
        $str .= tab . tab . tab . tab . "<button ng-click=\"salvar()\" class=\"btn btn-default\"><i class=\"icon-ok\"></i> Salvar</button>\n";
        $str .= tab . tab . tab . "</div>\n";
        $str .= tab . tab . "</div>\n";
        $str .= tab . "</div>\n";
        $str.= "</div>\n";
        fwrite($fp, $str);
        fclose($fp);
        echo "Templates gerados!\n";
    }
}

function criar_lista($tabela) {
    $dir = BASE_APPLICATION . "/application/modules/site/views/";
    echo "Gerando listas...\n";
    $sql = "desc {$tabela}";
    $query = mysql_query($sql);
    $filename = explode("_", $tabela);
    $name = "";
    $str = "";
    foreach ($filename as $fn) {
        $name.=ucfirst($fn);
    }
    $pri = array();
    while ($row = mysql_fetch_array($query)) {
        if ($row['Key'] == "PRI") {
            $pri[] = $row['Field'];
        }
    }
    $key = isset($pri[0]) ? $pri[0] : "id";
    $view = strtolower($name);
    $folder = $dir . str_replace("_", "", $tabela) . "/";
    if (!file_exists($folder)) {
        mkdir($folder, 0775);
    }
    $file = $folder . "lista.tpl";
    if (!file_exists($file)) {
        $fp = fopen($file, "w+");
        $str.= "{literal}\n";
        $str.= "<table class=\"table table-condensed table-bordered\">\n";
        $str.= tab . "<thead>\n";
        $str.= tab . tab . "<tr>\n";
        $str.= tab . tab . tab . "<th class=\"min\">\n";
        $str.=tab . tab . tab . tab . "<span class=\"btn-group\">\n";
        $str.=tab . tab . tab . tab . tab . "<button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">\n";
        $str.=tab . tab . tab . tab . tab . tab . "<i class=\"glyphicon glyphicon-menu-hamburger\"></i>\n";
        $str.=tab . tab . tab . tab . tab . tab . "<span class=\"caret\"></span>\n";
        $str.=tab . tab . tab . tab . tab . "</button>\n";
        $str.=tab . tab . tab . tab . tab . "<ul class=\"dropdown-menu\" role=\"menu\">\n";
        $str.=tab . tab . tab . tab . tab . tab . "<li ng-click=\"incluir(" . substr($tabela, 0, strlen($tabela) - 1) . ")\"><a href=\"javascript:void(0)\"><i class=\"icon-plus-2\"></i> Incluir</a></a></li>\n";
        $str.=tab . tab . tab . tab . tab . "</ul>\n";
        $str.=tab . tab . tab . tab . "</span>\n";
        $str.= tab . tab . tab . "</th>\n";
        $sql = "desc {$tabela}";
        $query = mysql_query($sql);
        while ($row = mysql_fetch_array($query)) {
            $l = "";
            if ($row['Extra'] == "auto_increment") {
                $l = " width=\"5%\"";
            }
            $str.= tab . tab . tab . "<th{$l}>" . str_replace("_", " ", $row['Field']) . "</th>\n";
        }
        $str.= tab . tab . "</tr>\n";
        $str.= tab . "</thead>\n";
        $str.= tab . "<tfoot class=\"msg\">\n";
        $str.= tab . tab . "<tr>\n";
        $str.= tab . tab . tab . "<td colspan=\"" . (mysql_num_fields($query) + 2) . "\" class=\"center\" ng-show=\"lista.length < 1\">Nenhum registro encontrado</td>\n";
        $str.= tab . tab . "</tr>\n";
        $str.= tab . "</tfoot>\n";
        $str.= tab . "<tbody>\n";
        $str.= tab . tab . "<tr ng-repeat=\"" . substr($tabela, 0, strlen($tabela) - 1) . " in lista\">\n";
        $sql = "desc {$tabela}";
        $query = mysql_query($sql);
        $str.=tab . tab . tab . "<td class=\"center\">\n";
        $str.=tab . tab . tab . tab . "<span class=\"btn-group\">\n";
        $str.=tab . tab . tab . tab . tab . "<button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">\n";
        $str.=tab . tab . tab . tab . tab . tab . "<i class=\"icon-cogs\"></i>\n";
        $str.=tab . tab . tab . tab . tab . tab . "<span class=\"caret\"></span>\n";
        $str.=tab . tab . tab . tab . tab . "</button>\n";
        $str.=tab . tab . tab . tab . tab . "<ul class=\"dropdown-menu\" role=\"menu\">\n";
        $str.=tab . tab . tab . tab . tab . tab . "<li ng-click=\"editar(" . substr($tabela, 0, strlen($tabela) - 1) . ")\"><a href=\"javascript:void(0)\"><i class=\"icon-pencil-4\"></i> Editar</a></li>\n";
        $str.=tab . tab . tab . tab . tab . tab . "<li ng-click=\"excluir(" . substr($tabela, 0, strlen($tabela) - 1) . ")\"><a href=\"javascript:void(0)\"><i class=\"icon-trashcan\"></i> Excluir</a></li>\n";
        $str.=tab . tab . tab . tab . tab . "</ul>\n";
        $str.=tab . tab . tab . tab . "</div>\n";
        $str.=tab . tab . tab . "</span>\n";
        $str.=tab . tab . "</td>\n";
        $total = 2;
        while ($row = mysql_fetch_array($query)) {
            $total+=1;
            $l = "";
            if ($row['Extra'] == "auto_increment") {
                $l = " class=\"right\"";
            }
            $str.= tab . tab . tab . "<td {$l}>{{" . substr($tabela, 0, strlen($tabela) - 1) . "." . $row['Field'] . "}}</td>\n";
        }
        $str.= tab . tab . "</tr>\n";
        $str.= tab . "</tbody>\n";
        $str.= "</table>\n";
        $str.= "{/literal}\n";        
        fwrite($fp, $str);
        fclose($fp);
        echo "Listas geradas!\n";
    }
}

function criar_form($tabela) {
    echo "Gerando formularios...\n";
    $sql = "desc {$tabela}";
    $query = mysql_query($sql);
    $filename = explode("_", $tabela);
    $name = "";
    foreach ($filename as $fn) {
        $name.=ucfirst($fn);
    }
    $pri = array();
    $view = strtolower($name);
    $dir = BASE_APPLICATION . "/application/modules/site/views/";
    $folder = $dir . str_replace("_", "", $tabela) . "/";
    if (!file_exists($folder)) {
        mkdir($folder, 0775);
    }
    $file = $folder . "form.tpl";
    if (!file_exists($file)) {
        $fp = fopen($file, "w+");
        
        $str = "{literal}\n<form name=\"frm-{$tabela}\" method=\"post\">\n";
        while ($row = mysql_fetch_array($query)) {
            //Verifica chaves estrangeiras
            $campos = "select * from information_schema.key_column_usage where constraint_schema = '" . database . "' and TABLE_NAME='{$tabela}' and REFERENCED_TABLE_NAME!='{$tabela}' and COLUMN_NAME='{$row['Field']}'";
            $pesquisa = mysql_query($campos);
            $estrangeira = array();
            $chaves = array();
            $combobox = array();
            while ($dados = mysql_fetch_array($pesquisa)) {
                $estrangeira[] = $dados['COLUMN_NAME'];
                $chaves[$dados['COLUMN_NAME']] = array("tabela_referenciada" => $dados['REFERENCED_TABLE_NAME'], "campo_referenciado" => $dados['REFERENCED_COLUMN_NAME']);
                $tabela2 = $dados['REFERENCED_TABLE_NAME'];
                $sql2 = "desc {$tabela2}";
                $query2 = mysql_query($sql2);
                while ($externo = mysql_fetch_array($query2)) {
                    $combobox[$dados['REFERENCED_TABLE_NAME']][] = $externo['Field'];
                }
                //dados da tabela referenciada
                $busca = "desc {$dados['REFERENCED_TABLE_NAME']}";
                $buscar = mysql_query($busca);
                $campo_referenciado = array();
                while ($referencia = mysql_fetch_array($buscar)) {
                    $campo_referenciado[$dados['COLUMN_NAME']] = $referencia['Field'];
                }
            }
            if (preg_match("/char/i", $row[1])) {
                $c = explode("(", $row[1]);
                $max = str_replace(")", "", $c);
                $max = "maxlength=\"" . trim($max[1]) . "\"";
            } else {
                $max = "";
            }

            if ($row['Extra'] == "auto_increment") {
                $oculta = " class=\"oculta\"";
            } else {
                $oculta = " class=\"form-group\"";
            }
            $label = str_replace("_", " ", $row['Field']);
            $str.=tab . "<section{$oculta}>\n";
            $str.=tab . tab . "<label for=\"{$row['Field']}\" class=\"upper\">$label:</label>\n";
            $null = $row['Null'] == "NO" ? true : false;
            if ($row['Extra'] == "auto_increment") {
                $str.=tab . tab . "<input type=\"text\" ng-model=\"" . substr($tabela, 0, strlen($tabela) - 1) . ".{$row['Field']}\" id=\"{$row['Field']}\" readonly=\"readonly\" class=\"short_field form-control\" />\n";
            } elseif (($row['Type'] == "text" OR $row['Type'] == "longtext") AND $row['Key'] != 'MUL') {
                $obg = $null ? "class=\"required\"" : "";
                $str.=tab . tab . "<textarea ng-model=\"" . substr($tabela, 0, strlen($tabela) - 1) . ".{$row['Field']}\" class=\"form-control\" id=\"{$row['Field']}\" ></textarea>\n";
            } elseif ($row['Type'] == "date" OR $row['Type'] == "datetime") {
                $obg = $null ? "required" : "";
                $str.=tab . tab . "<input type=\"text\" ng-model=\"" . substr($tabela, 0, strlen($tabela) - 1) . ".{$row['Field']}\" class=\"data medium_field form-control\" id=\"{$row['Field']}\" />\n";
            } elseif ($row['Type'] == "float") {
                $obg = $null ? "required" : "";
                $str.=tab . tab . "<input type=\"text\" ng-model=\"" . substr($tabela, 0, strlen($tabela) - 1) . ".{$row['Field']}\" class=\"float medium_field form-control\" id=\"{$row['Field']}\" />\n";
            } elseif ($row['Type'] == "time") {
                $obg = $null ? "required" : "";
                $str.=tab . tab . "<input type=\"text\" ng-model=\"" . substr($tabela, 0, strlen($tabela) - 1) . ".{$row['Field']}\" class=\"time form-control\" maxlength=\"5\" id=\"{$row['Field']}\" />\n";
            } elseif (in_array($row['Field'], $estrangeira)) {
                $obg = $null ? "class=\"required\"" : "";
                $str.=tab . tab . "<select ng-model=\"" . substr($tabela, 0, strlen($tabela) - 1) . "." . $row['Field'] . "\" class=\"form-control\" id=\"{$row['Field']}\">\n";
                $str.=tab . tab . tab . "<option ng-repeat=\"" . substr($chaves[$row['Field']]['tabela_referenciada'], 0, 1) . " in " . $chaves[$row['Field']]['tabela_referenciada'] . "\" value=\"{{" . substr($chaves[$row['Field']]['tabela_referenciada'], 0, 1) . "." . $combobox[$chaves[$row['Field']]['tabela_referenciada']][0] . "}}\">{{" . substr($chaves[$row['Field']]['tabela_referenciada'], 0, 1) . "." . $combobox[$chaves[$row['Field']]['tabela_referenciada']][1] . "}}</option>\n";
                $str.=tab . tab . "</select>\n";
            } else {
                $obg = $null ? "class=\"required\"" : "";
                $str.=tab . tab . "<input type=\"text\" ng-model=\"" . substr($tabela, 0, strlen($tabela) - 1) . ".{$row['Field']}\" class=\"form-control\" id=\"{$row['Field']}\" autocomplete=\"off\" $max />\n";
            }
            $str.=tab . "</section>\n";            
        }
        $str.="</form>\n";
        $str .= "{/literal}\n";
        fwrite($fp, $str);
        fclose($fp);
        echo "Formularios gerados!\n";
    }
}

function criar_javascript($tabela) {
    echo "Gerando javascripts...\n";
    $folder = BASE_APPLICATION . "/public/js/modules";
    if (!file_exists($folder)) {
        mkdir($folder, 0775);
    }

    $folder = BASE_APPLICATION . "/public/js/modules/site";
    if (!file_exists($folder)) {
        mkdir($folder, 0775);
    }

    $file = BASE_APPLICATION . "/public/js/app.js";
    if (!file_exists($file)) {
        $fp = fopen($file, "w+");
        $str = "var app = angular.module(\"app\", []);";
        fwrite($fp, $str);
        fclose($fp);
    }

    $sql = "desc {$tabela}";
    $query = mysql_query($sql);
    $filename = explode("_", $tabela);
    $name = "";
    foreach ($filename as $fn) {
        $name.=ucfirst($fn);
    }
    $pri = array();
    $view = strtolower($name);
    $dir = BASE_APPLICATION . "/public/js/modules/site/";
    $folder = $dir . str_replace("_", "", $tabela) . "/";
    if (!file_exists($folder)) {
        mkdir($folder, 0775);
    }
    $file = $folder . "index.js";
    if (!file_exists($file)) {
        $fp = fopen($file, "w+");
        $str = "app.controller(\"" . ucfirst($tabela) . "Controller\", function(\$scope, \$http, \$timeout){\n";

        $str.=tab . "var \$ = jQuery;\n";
        $str.=tab . "var ng = \$scope;\n\n";

        $str.=tab . "var limite = 10;\n";
        $str.=tab . "var inicio = 0;\n";
        $str.=tab . "var atual = 1;\n";
        $str.=tab . "var total;\n";
        $str.=tab . "var ordem = 'DESC';\n";
        $str.=tab . "var by = 'id';\n\n";


        //Verifica chaves estrangeiras
        $init = array();
        while ($row = mysql_fetch_array($query)) {
            $campos = "select * from information_schema.key_column_usage where constraint_schema = '" . database . "' and TABLE_NAME='{$tabela}' and REFERENCED_TABLE_NAME!='{$tabela}' and COLUMN_NAME='{$row['Field']}'";
            $pesquisa = mysql_query($campos);
            $estrangeira = array();
            $chaves = array();
            while ($dados = mysql_fetch_array($pesquisa)) {
                $referencia = $dados['REFERENCED_TABLE_NAME'];
                $str.=tab . "var load" . ucfirst($dados['REFERENCED_TABLE_NAME']) . " = function(){\n";
                $str.=tab . tab . "\$http.get(base_url+'/{$referencia}/listar/1000/0/ASC/id/{$referencia}').success(function(data){\n";
                $str.=tab . tab . tab . "ng." . $dados['REFERENCED_TABLE_NAME'] . " = data;\n";
                $str.=tab . tab . "});\n";
                $str.=tab . "};\n\n";
                $init[] = "load" . ucfirst($dados['REFERENCED_TABLE_NAME']);
            }
        }
        //fim da verificacao das chaves

        $str.=tab . "ng.reload = function(pg){\n";
        $str.=tab . tab . "atual = pg ? pg : 1;\n";

        $str.=tab . tab . "\$http.get(base_url+'/{$tabela}/total').success(function(data){\n";
        $str.= tab . tab . tab . "total = parseInt(data[0].total);\n";
        $str.= tab . tab . tab . "ng.total = total;\n";
        $str.= tab . tab . "});\n";
        $str.= tab . tab . "inicio = limite * (atual - 1);\n\n";

        $str.=tab . tab . "ng.paginar = function (registros, pagina) {\n";
        $str.=tab . tab . tab . "var qtd_total_pg = parseInt(registros / limite);\n";
        $str.=tab . tab . tab . "qtd_total_pg = parseInt(registros % limite) === 0 ? qtd_total_pg : qtd_total_pg + 1;\n";
        $str.=tab . tab . tab . "var link_paginacao = [];\n";
        $str.=tab . tab . tab . "var first = false;\n";
        $str.=tab . tab . tab . "var last = 0;\n";
        $str.=tab . tab . tab . "var anterior;\n";
        $str.=tab . tab . tab . "var posterior;\n\n";
        $str.=tab . tab . tab . "if (pagina > 5) {\n";
        $str.=tab . tab . tab . "first = true;\n";
        $str.=tab . tab . tab . "}\n\n";
        $str.=tab . tab . tab . "if (pagina > 1) {\n";
        $str.=tab . tab . tab . tab . "ng.paginas = {primeira: 1};\n";
        $str.=tab . tab . tab . "}\n\n";
        $str.=tab . tab . tab . "if ((parseInt(pagina - 4)) < 1) {\n";
        $str.=tab . tab . tab . tab . "anterior = 1;\n";
        $str.=tab . tab . tab . "} else {\n";
        $str.=tab . tab . tab . tab . "anterior = pagina - 4;\n";
        $str.=tab . tab . tab . "}\n\n";

        $str.=tab . tab . tab . "if ((pagina + 4) > qtd_total_pg) {\n";
        $str.=tab . tab . tab . tab . "posterior = qtd_total_pg;\n";
        $str.=tab . tab . tab . "} else {\n";
        $str.=tab . tab . tab . tab . "posterior = pagina + 4;\n";
        $str.=tab . tab . tab . "}\n\n";

        $str.=tab . tab . tab . "for (i = anterior; i <= posterior; i++) {\n";
        $str.=tab . tab . tab . tab . "cl = (atual === i) ? 'atual' : '';\n";
        $str.=tab . tab . tab . tab . "link_paginacao.push({";
        $str.="pag: i,";
        $str.="classe: cl";
        $str.="});\n";
        $str.=tab . tab . tab . "};\n\n";

        $str.=tab . tab . tab . "if (pagina < qtd_total_pg - 4) {\n";
        $str.=tab . tab . tab . tab . "last = qtd_total_pg;\n";
        $str.=tab . tab . tab . "} else {\n";
        $str.=tab . tab . tab . tab . "last = 0;\n";
        $str.=tab . tab . tab . "}\n\n";

        $str.=tab . tab . tab . "ng.paginas = {\n";
        $str.=tab . tab . tab . tab . "numeros: link_paginacao,\n";
        $str.=tab . tab . tab . tab . "primeira: first,\n";
        $str.=tab . tab . tab . tab . "ultima: last\n";
        $str.=tab . tab . tab . "};\n\n";
        $str.=tab . tab . "};\n\n";

        $str.=tab . tab . "\$http.get(base_url+'/{$tabela}/listar/'+limite+'/'+inicio+'/'+ordem+'/'+by+'/{$tabela}').success(function(data){\n";
        $str.=tab . tab . tab . "ng.lista = data;\n";
        $str.=tab . tab . tab . "\$timeout(function () {\n";
        $str.=tab . tab . tab . tab . "ng.paginar(total, atual);\n";
        $str.=tab . tab . tab . "}, 500);\n";
        $str.=tab . tab . "});\n";
        $str.=tab . "};\n\n";


        $str.=tab . "ng.salvar = function(){\n";
        $str.=tab . tab . "$.ajax({\n";
        $str.=tab . tab . tab . "url:base_url+'/{$tabela}/salvar',\n";
        $str.=tab . tab . tab . "type:'post',\n";
        $str.=tab . tab . tab . "data:ng." . substr($tabela, 0, strlen($tabela) - 1) . ",\n";
        $str.=tab . tab . tab . "success:function(json){\n";
        $str.=tab . tab . tab . tab . "if(json.result){\n";
        $str.=tab . tab . tab . tab . tab . "$(\"#modal-form\").modal(\"hide\");\n";
        $str.=tab . tab . tab . tab . tab . "$.dialogo_sucesso(json.message, 2000);\n";
        $str.=tab . tab . tab . tab . tab . "ng." . substr($tabela, 0, strlen($tabela) - 1) . " = {};\n";
        $str.=tab . tab . tab . tab . tab . "ng.reload(atual);\n";
        $str.=tab . tab . tab . tab . "}";
        $str.="else{\n";
        $str.=tab . tab . tab . tab . tab . "$.dialogo_erro(json.message);\n";
        $str.=tab . tab . tab . tab . "}\n";
        $str.=tab . tab . tab . "},\n";
        $str.=tab . tab . tab . "error:function(r){\n";
        $str.=tab . tab . tab . tab . "$.dialogo_erro('Erro na estrutura dos dados.');\n";
        $str.=tab . tab . tab . "}\n";
        $str.=tab . tab . "});\n";
        $str.=tab . "};\n\n";

        $str.=tab . "ng.delete = function(){\n";
        $str.=tab . tab . "$.ajax({\n";
        $str.=tab . tab . tab . "url:base_url+'/{$tabela}/excluir/'+ng." . substr($tabela, 0, strlen($tabela) - 1) . ".id,\n";
        $str.=tab . tab . tab . "type:'delete',\n";
        $str.=tab . tab . tab . "dataType:'json',\n";
        $str.=tab . tab . tab . "success:function(json){\n";
        $str.=tab . tab . tab . "$(\"#modal-delete\").modal(\"hide\");\n";
        $str.=tab . tab . tab . tab . "if(json.result){\n";
        $str.=tab . tab . tab . tab . tab . "$.dialogo_sucesso(json.message);\n";
        $str.=tab . tab . tab . tab . tab . "ng.reload(atual);\n";
        $str.=tab . tab . tab . tab . "}";
        $str.="else{\n";
        $str.=tab . tab . tab . tab . tab . "$.dialogo_erro(json.message);\n";
        $str.=tab . tab . tab . tab . "}\n";
        $str.=tab . tab . tab . "},\n";
        $str.=tab . tab . tab . "error:function(r){\n";
        $str.=tab . tab . tab . tab . "$.dialogo_erro('Erro na estrutura dos dados.');\n";
        $str.=tab . tab . tab . "}\n";
        $str.=tab . tab . "});\n";
        $str.=tab . "};\n\n";

        $str.=tab . "ng.incluir = function(){\n";
        $str.=tab . tab . "ng." . substr($tabela, 0, strlen($tabela) - 1) . " = {};\n";
        $str.=tab . tab . "$(\"#modal-form\").modal(\"show\");\n";
        $str.=tab . "};\n\n";

        $str.=tab . "ng.editar = function(" . substr($tabela, 0, 1) . "){\n";
        $str.=tab . tab . "ng." . substr($tabela, 0, strlen($tabela) - 1) . " = " . substr($tabela, 0, 1) . ";\n";
        $str.=tab . tab . "$(\"#modal-form\").modal(\"show\");\n";
        $str.=tab . "};\n\n";

        $str.=tab . "ng.excluir = function(" . substr($tabela, 0, 1) . "){\n";
        $str.=tab . tab . "ng." . substr($tabela, 0, strlen($tabela) - 1) . " = " . substr($tabela, 0, 1) . ";\n";
        $str.=tab . tab . "$(\"#modal-delete\").modal(\"show\");\n";
        $str.=tab . "};\n\n";

        $str.=tab . "var init = function(){\n";
        $str.=tab . tab . "getMask();\n";
        $str.=tab . tab . "ng.reload();\n";
        $str.=tab . tab . "ng.base_url=base_url;\n";
        foreach ($init as $ini) {
            $str.=tab . tab . "{$ini}();\n";
        }
        $str.=tab . "};\n\n";

        $str.=tab . "init();\n\n";

        $str.="});\n";
        fwrite($fp, $str);
        fclose($fp);
        echo "Javascripts gerados!\n";
    }
}

while ($row = mysql_fetch_array($query)) {
    $tabela = $row[0];
    criar_view($tabela);
    criar_form($tabela);
    criar_lista($tabela);
    criar_javascript($tabela);
}
echo "Views geradas com sucesso\n";
?>
