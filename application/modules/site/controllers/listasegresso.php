<?php

(defined('BASEPATH')) OR exit('Acesso direto ao script não permitido'); 

class Listasegresso extends MX_Security{

    function __construct() {
        parent::__construct();
        $this->parser->setModule('site');
        $this->params = $this->uri->segment_array();
        $this->model = $this->load->model('m_listasegresso');
    }

    public function index(){
        $this->parser->parse("listasegresso/index");
    }

    public function salvar(){
        header('Content-type: application/json');
        $this->load->helper("data");
        $dados = $this->params();
        $dados["colacao"] = Data_helper::inverter($dados["colacao"]);
        if(isset($params['arquivos'])){
                                $arquivos = FCPATH . "public/arquivos/";
                                $tmp = FCPATH . "public/arquivos/tmp/";
                                //print_r($params["arquivos"]);
                                //exit();
                                foreach ($params["arquivos"] as $linha){
                                if(!isset($linha["arquivos"]["id"])){
                                //$dados_anexos[""]
                                $dados_anexos["objeto_id"]= $dados['id'];
                                $dados_anexos["nome"] = $linha["arquivos"]["nome"];
                                $dados_anexos["md5_nome"] = $linha["arquivos"]["md5_nome"];
                                $dados_anexos['criado_por'] = $_SESSION['logado']->login;
                                $dados_anexos['data'] = date("Y-m-d H:i:s");
                                //print_r($dados_anexos);
                                $m_arquivos = $this->load->model('m_arquivos');
                                $m_arquivos->salvar($dados_anexos);

                                rename($tmp . $dados_anexos["md5_nome"], $arquivos . $dados_anexos["md5_nome"]);
                                }}
            }
        $result = $this->model->salvar($dados);
        echo json_encode($result);
    }

    public function excluir(){
        header('Content-type: application/json');
        echo json_encode($this->model->excluir($this->params[3]));
    }

    public function total(){
        header('Content-type: application/json');
        echo json_encode($this->model->total());
    }

    public function listar(){
        header('Content-type: application/json');
        $dados = $this->model->lista($this->params[3], $this->params[4], $this->params[5], $this->params[6]);
        echo json_encode($dados);
    }
    
    public function listar_listasegresso(){
        $id = $this->params[3];
        $dados["cursos_id"] = $id; 
        $this->parser->parse("listasegresso/lista_listasegresso", $dados);
    }
    
    public function carregar(){
        header('Content-type: application/json');
        $dados = $this->model->carregar($this->params[3]);
        echo json_encode($dados);
    }
    
    public function listar_listasegresso_json(){//cria um json dos dados extraídos a partir da função lista_da_instituicao contida na model no arquivo /models/m_cursos.php
        header('Content-type: application/json');
        $dados = $this->model->lista_listasegresso($this->params[3]);
        echo json_encode($dados);
    }
    
    public function ver_listasegresso(){
        $dados["id"] = $this->params[3];
        $this->parser->parse("listasegresso/ver",$dados);
     }
     
     public function ver_nomecurso(){//cria um json dos dados extraídos a partir da função lista_da_instituicao contida na model no arquivo /models/m_cursos.php
        header('Content-type: application/json');
        $dados = $this->model->Nome_do_curso($this->params[3]);
        echo json_encode($dados);
    }
    
    public function ver_nomeinstituicao(){//cria um json dos dados extraídos a partir da função lista_da_instituicao contida na model no arquivo /models/m_cursos.php
        header('Content-type: application/json');
        $dados = $this->model->Nome_da_instituicao($this->params[3]);
        echo json_encode($dados);
    }

}