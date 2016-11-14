<?php

define("BASE_APPLICATION", str_replace("system", "", dirname(__DIR__)));
define("BASEPATH", BASE_APPLICATION);
echo "\n\nGerando conrollers...\n";
define("tab", chr(32) . chr(32) . chr(32) . chr(32));
$tab = chr(32);
include (BASE_APPLICATION . "application/config/database.php");

define("database", $db['default']['database']);

$user = $db['default']['username'];
$host = $db['default']['hostname'];
$pass = $db['default']['password'];
$db = $db['default']['database'];

mysql_pconnect($host, $user, $pass);
mysql_select_db($db);
$pri = array();
$sql = "show tables";
$query = mysql_query($sql);

if (!file_exists(BASE_APPLICATION . "/application/modules")) {
    mkdir(BASE_APPLICATION . "/application/modules", 0775);
}

if (!file_exists(BASE_APPLICATION . "/application/modules/site")) {
    mkdir(BASE_APPLICATION . "/application/modules/site", 0775);
}

if (!file_exists(BASE_APPLICATION . "/application/modules/site/controllers")) {
    mkdir(BASE_APPLICATION . "/application/modules/site/controllers", 0775);
}

//Cria o IndexController
$file = BASE_APPLICATION . "/application/modules/site/controllers/home.php";

if (!file_exists($file)) {
    $fp = fopen($file, "w+");
    $str = "<?php\n\n";
    $str .= "(defined('BASEPATH')) OR exit('Acesso direto ao script não permitido'); \n\n";
    $str .= "class Home extends MX_Controller {\n\n";

    $str.=tab . "function __construct() {\n";
    $str.=tab . tab . "parent::__construct();\n";
    $str.=tab . tab . "\$this->parser->setModule('site');\n";
    $str.=tab . "}\n\n";

    $str .= tab . "public function index(){\n";
    $str .= tab . tab . "\$this->parser->parse(\"home/index\");\n";
    $str .= tab . "}\n\n";
    $str .="}\n\n";

    fwrite($fp, $str);
    fclose($fp);
}

function criar_controller($tabela) {
    $sql = "desc {$tabela}";
    $query = mysql_query($sql);
    $filename = str_replace("_", "", $tabela);
    $name = $filename;
    $pri = array();
    while ($row = mysql_fetch_array($query)) {
        if ($row['Key'] == "PRI") {
            $pri[] = $row['Field'];
        }
    }
    $controller = strtolower($name);
    $file = BASE_APPLICATION . "/application/modules/site/controllers/{$controller}.php";

    if (!file_exists($file)) {
        $fp = fopen($file, "w+");
        $str = "<?php\n\n";
        $str .= "(defined('BASEPATH')) OR exit('Acesso direto ao script não permitido'); \n\n";
        $str .= "class " . ucfirst($name) . " extends MX_Controller{\n\n";
        $str.=tab . "function __construct() {\n";
        $str.=tab . tab . "parent::__construct();\n";
        $str.=tab . tab . "\$this->parser->setModule('site');\n";
        $str.=tab . tab . "\$this->params = \$this->uri->segment_array();\n";
        $str.=tab . tab . "\$this->model = \$this->load->model('m_" . $tabela . "');\n";
        $str.=tab . "}\n";
        fwrite($fp, $str);
        criar_index($tabela, $fp, $name);
        criar_save($tabela, $fp, $name, $pri);
        criar_delete($tabela, $fp, $name, $pri);
        criar_select($tabela, $fp, $name, $pri);
        $str = "}";
        fwrite($fp, $str);
        fclose($fp);
    }
}

function criar_index($tabela, $fp, $name) {
    $key = isset($pri[0]) ? $pri[0] : "id";
    $str = "\n" . tab . "public function index(){\n";
    //$str .= tab . tab . "\$dados = \$this->model->carregar(\$this->params[2]);\n";
    $str .= tab . tab . "\$this->parser->parse(\"{$name}/index\");\n";
    $str .= tab . "}\n\n";
    fwrite($fp, $str);
}

function criar_save($tabela, $fp, $name, $pri = null) {
    $key = isset($pri[0]) ? $pri[0] : "id";
    $sql = "desc {$tabela}";
    $query = mysql_query($sql);
    $pri = array();
    $campos = "";
    /*
      while ($row = mysql_fetch_array($query)) {
      if ($row['Key'] == "PRI") {
      $pri[] = $row['Field'];
      }
      $campos .= tab.tab."\$dados['".$row['Field']."'] = \$this->input->post('".$row['Field']."');\n";
      }
     * 
     */
    $campos = tab . tab . "\$dados = \$this->params();\n";

    $str = tab . "public function salvar(){\n";
    $str.= tab . tab . "header('Content-type: application/json');\n";
    $str.= $campos;
    $str.= tab . tab . "\$result = \$this->model->salvar(\$dados);\n";
    $str.= tab . tab . "echo json_encode(\$result);\n";
    $str.= tab . "}\n\n";
    fwrite($fp, $str);
}

function criar_delete($tabela, $fp, $name, $pri = null) {
    $key = isset($pri[0]) ? $pri[0] : "id";
    $str = tab . "public function excluir(){\n";
    $str .= tab . tab . "header('Content-type: application/json');\n";
    $str .= tab . tab . "echo json_encode(\$this->model->excluir(\$this->params[3]));\n";
    $str.= tab . "}\n\n";
    fwrite($fp, $str);
}

function criar_select($tabela, $fp, $name, $pri = null) {
    $key = isset($pri[0]) ? $pri[0] : "id";
    $str = tab . "public function total(){\n";
    $str.= tab . tab . "header('Content-type: application/json');\n";
    $str.= tab . tab . "echo json_encode(\$this->model->total());\n";
    $str.= tab . "}\n\n";

    $str .= tab . "public function listar(){\n";
    $str.= tab . tab . "header('Content-type: application/json');\n";
    $str.= tab . tab . "\$dados = \$this->model->lista(\$this->params[3], \$this->params[4], \$this->params[5], \$this->params[6]);\n";
    $str.= tab . tab . "echo json_encode(\$dados);\n";
    $str.= tab . "}\n\n";
    fwrite($fp, $str);
}

//Criação do arquivo de rotas rotas
$rota = BASE_APPLICATION . "/application/config/default_routes.php";
$fpr = fopen($rota, "w");
$str = "<?php\n\n";
$str .= "(defined('BASEPATH')) OR exit('Acesso direto ao arquivo não permitido'); \n\n";
fwrite($fpr, $str);
echo "arquivo de rotas criado!\n";

//$route['marcas'] = 'site/marcas/index'; 
$str = "//Rota para site \n";
$str .= "\$route['site'] = 'site/home/index'; \n\n";
while ($row = mysql_fetch_array($query)) {
    $tabela = $row[0];
    criar_controller($tabela);
    //configuração das rotas
    $str = "//Rota para {$tabela} \n";
    $str .= "\$route['" . strtolower($tabela) . "'] = 'site/" . strtolower($tabela) . "/index'; \n";
    $str .= "\$route['" . strtolower($tabela) . "/total'] = 'site/" . strtolower($tabela) . "/total'; \n";
    $str .= "\$route['" . strtolower($tabela) . "/listar/(:num)/(:num)/(:any)'] = 'site/" . strtolower($tabela) . "/listar'; \n";
    $str .= "\$route['" . strtolower($tabela) . "/salvar'] = 'site/" . strtolower($tabela) . "/salvar'; \n";
    $str .= "\$route['" . strtolower($tabela) . "/excluir/(:num)'] = 'site/" . strtolower($tabela) . "/excluir'; \n";
    $str .= "\$route['" . strtolower($tabela) . "/obter/(:num)'] = 'site/" . strtolower($tabela) . "/obter'; \n\n";
    fwrite($fpr, $str);
}
echo "Controllers gerados!\n";
