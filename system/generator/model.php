<?php

define("BASE_APPLICATION", str_replace("system", "", dirname(__DIR__)));
define("BASEPATH", BASE_APPLICATION);
echo "\n\nGerando models...\n";
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

function criar_model($tabela) {
    $sql = "desc {$tabela}";
    $query = mysql_query($sql);
    $filename = str_replace("_", "", $tabela);
    $name = strtolower($filename);
    $pri = array();
    while ($row = mysql_fetch_array($query)) {
        if ($row['Key'] == "PRI") {
            $pri[] = $row['Field'];
        }
    }
    $file = BASE_APPLICATION . "/application/models/m_{$name}.php";
    if (!file_exists($file)) {
        $fp = fopen($file, "w+");
        $str = "<?php\n\n";
        $str .= "class M_" . strtolower($tabela) . " extends CI_Model {\n\n";
        fwrite($fp, $str);
        criar_create($tabela, $fp, $name);        
        criar_delete($tabela, $fp, $name);
        criar_select($tabela, $fp, $name, $pri);
        $str = "}";        
        fwrite($fp, $str);
        fclose($fp);
        criar_vo($tabela, $name);
    }
}

function criar_create($tabela, $fp, $name) {
    $str = tab . "public function salvar(\$data) {\n";
    $str .= tab . tab . "if (isset(\$data['$\$hashKey'])) {\n";
    $str .= tab . tab . tab. "unset(\$data['$\$hashKey']);\n";
    $str .= tab . tab . "}\n";
    $str .= tab . tab . "if (isset(\$data['id'])) {\n";
    $str .= tab . tab . tab . "\$this->db->where('id', \$data['id']);\n";
    $str .= tab . tab . tab . "\$result = \$this->db->update('" . strtolower($tabela) . "', \$data);\n";
    $str .= tab . tab . "}else{\n";
    $str .= tab . tab . tab . "\$result = \$this->db->insert('" . strtolower($tabela) . "', \$data);\n";
    $str .= tab . tab . "}\n";
    $str .= tab . tab . "return array('result' => \$result, 'message' => \$result ? 'Registro gravado' : 'Erro ao gravar o registro', 'error' => \$this->db->_error_message());\n";
    $str .= tab . "}\n\n";
    fwrite($fp, $str);    
}

function criar_delete($tabela, $fp, $name, $pri = null) {
    $key = isset($pri[0]) ? $pri[0] : "id";
    $str =  tab . "public function excluir(\$id) {\n";
    $str.=  tab . tab . "\$this->db->where('id', \$id);\n";
    $str.=  tab . tab . "\$result = \$this->db->delete('".$tabela."');\n";
    $str.=  tab . tab . "return array('result' => \$result, 'message' => \$result ? 'Registro excluído' : 'Erro ao excluir o registro', 'error' => \$this->db->_error_message());\n";    
    $str.=  tab . "}\n\n";
    fwrite($fp, $str);    
}

function criar_select($tabela, $fp, $name, $pri) {
    $key = isset($pri[0]) ? $pri[0] : "id";
    $sql = "desc {$tabela}";
    $query = mysql_query($sql);
    $estrangeira = array();
    $chaves = array();
    while ($row = mysql_fetch_array($query)) {
        //Verifica chaves estrangeiras
        $campos = "select * from information_schema.key_column_usage where constraint_schema = '" . database . "' and TABLE_NAME='{$tabela}' and REFERENCED_TABLE_NAME!='{$tabela}' and COLUMN_NAME='{$row['Field']}'";
        $pesquisa = mysql_query($campos);
        while ($dados = mysql_fetch_array($pesquisa)) {
            $estrangeira[] = $dados['COLUMN_NAME'];
            $chaves[$dados['COLUMN_NAME']] = array("tabela_referenciada" => $dados['REFERENCED_TABLE_NAME'], "campo_referenciado" => $dados['REFERENCED_COLUMN_NAME']);
            $busca = "desc {$dados['REFERENCED_TABLE_NAME']}";
            $buscar = mysql_query($busca);
            $campo_referenciado = array();
            while ($referencia = mysql_fetch_array($buscar)) {
                $campo_referenciado[$dados['COLUMN_NAME']] = $referencia['Field'];
            }
        }
    }

    $joins = "";
    $total = count($estrangeira);
    $i = 0;
    $print = "array(";
    foreach ($estrangeira as $row) {
        $i++;
        if ($i > 0) {
            $joins .= tab .tab. "\$this->db->join(";
        } else {
            $joins .="\$this->db->join(";
        }
        //Cria o array de impressao
        $pre = substr($chaves[$row]['tabela_referenciada'], 0, 2);
        $prefixo_principal = substr($tabela, 0, 2);
        $print.= "'" . $pre . ".*" . "',";
        $joins.="\"".$chaves[$row]['tabela_referenciada']." ".substr($chaves[$row]['tabela_referenciada'], 0, 2)."\",\"".substr($chaves[$row]['tabela_referenciada'], 0, 2).".".$chaves[$row]['campo_referenciado']." = ".substr($tabela, 0, 2).".".$row."\", \"left\"";
        $joins.=");\n";
        
        //$this->db->join('especies e', 'e.id = i.especie_id', 'left');
    }

    //Total de registros
    $str = tab . "public function total() {\n";
    $str.= tab . tab . "\$this->db->select('count(id) as total');\n";
    $str.= tab . tab . "\$this->db->from('".$name."');\n";    
    $str.= tab . tab . "\$query = \$this->db->get();\n";
    $str.= tab . tab . "return \$query->result();\n";    
    $str.= tab . "}\n\n";

    //Lista
    $indice_tabela = substr($tabela, 0, 2);
    $str.= tab . "public function lista(\$limite, \$inicio, \$coluna, \$ordem) { \n";
    $str.= tab . tab . "\$this->db->select(\"".$indice_tabela.".*\");\n";
    $str.= tab . tab . "\$this->db->from(\"".$name." ".$indice_tabela."\");\n";
    $str.= $joins;    
    $str.= tab . tab . "\$this->db->limit(\$limite, \$inicio);\n";
    $str.= tab . tab . "\$this->db->order_by(\$ordem, \$coluna);\n";
    $str.= tab . tab . "\$query = \$this->db->get();\n";
    $str.= tab . tab . "return is_object(\$query)?\$query->result():array();\n";
    $str.= tab."}\n\n";
    
    
    //Carregar
    $indice_tabela = substr($tabela, 0, 2);
    $str.= tab . "public function carregar(\$id) { \n";
    $str.= tab . tab . "\$this->db->select(\"".$indice_tabela.".*\");\n";
    $str.= tab . tab . "\$this->db->from(\"".$name." ".$indice_tabela."\");\n";
    $str.= $joins;    
    $str.= tab . tab . "\$this->db->where(\"{$indice_tabela}.id = \",\$id);\n";    
    $str.= tab . tab . "\$query = \$this->db->get();\n";
    $str.= tab . tab . "return \$query->result();\n";
    $str.= tab."}\n\n";
    fwrite($fp, $str);
}

function criar_vo($tabela, $name) {
    /*
    $sql = "desc {$tabela}";
    $query = mysql_query($sql);
    $dir = BASE_APPLICATION . "application/models/Vo";
    if (!file_exists($dir))
        mkdir($dir, 0777);
    $file = BASE_APPLICATION . "application/models/Vo/{$name}.php";
    if (!file_exists($file)) {
        $fp = fopen(BASE_APPLICATION . "application/models/Vo/{$name}.php", "w+");
        $str = "<?php\n";
        $str .= tab . "class Application_Model_Vo_{$name}{\n\n";
        while ($row = mysql_fetch_array($query)) {
            $str.=tab . tab . "public \${$row['Field']};\n";
        }
        $str.="\n" . tab . tab . "public function __set(\$prop, \$val) {\n";
        $str.=tab . tab . tab . "\$this->\$prop = \$val;\n";
        $str.=tab . tab . "}\n";
        $str.="\n" . tab . tab . "public function __get(\$prop) {\n";
        $str.=tab . tab . tab . "return \$this->\$prop;\n";
        $str.=tab . tab . "}\n";
        $str .= tab . "}";
        $str .= "\n?>";
        fwrite($fp, $str);
        fclose($fp);
    }
     * 
     */
}

while ($row = mysql_fetch_array($query)) {
    $tabela = $row[0];
    criar_model($tabela);
}
echo "Models gerados!\n";
?>
