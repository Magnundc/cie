<?php

(defined('BASEPATH')) OR exit('Acesso direto ao script não permitido'); 

class Instituicoes extends MX_Security{

    function __construct() {
        parent::__construct();
        $this->parser->setModule('site');
        $this->params = $this->uri->segment_array();
        $this->model = $this->load->model('m_instituicoes');
    }

    public function index(){
       $this->parser->parse("instituicoes/index");
    }

    public function salvar(){
        if(parent::ismaster() or parent::isadmin()){
            header('Content-type: application/json');
            $this->load->helper("data");
            $dados = $this->params();
            $params = $this->params();
            $dados["data_registro"] = Data_helper::inverter($dados["data_registro"]);
//            print_r($params['arquivos']);
//            exit();
            $result = $this->model->salvar($dados);
            echo json_encode($result);
            
        }
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
    
    public function carregar(){
        header('Content-type: application/json');
        $dados = $this->model->carregar($this->params[3]);
        echo json_encode($dados);
    }
    
    public function verinstituicao(){
        $dados["id"] = $this->params[3];
        $this->parser->parse("instituicoes/ver",$dados);
    }
    
    public function pesquisa(){
        header('Content-type: application/json');
        header('Access-Control-Allow-Origin: *');//pode ser retirado
        $termo = $this->params();
        $dados = $this->model->pesquisa($termo["pesquisa"]);
        echo json_encode($dados);
        
    }
    
    public function traducao() {
        header('Content-type: application/json');
        $dados = $this->model->getNivel();
        echo json_encode($dados);
    }
    
    public function logout() {
        session_destroy();
        $this->parser->parse("layout/template");
    }
    
    public function getLastid() {
        return $this->db->insert_id();
    }
}