<?php

(defined('BASEPATH')) OR exit('Acesso direto ao script não permitido'); 

class Titulosconfea extends MX_Security{

    function __construct() {
        parent::__construct();
        $this->parser->setModule('site');
        $this->params = $this->uri->segment_array();
        $this->model = $this->load->model('m_titulosconfea');
    }

    public function index(){
        $this->parser->parse("titulosconfea/index");
    }

    public function salvar(){
        header('Content-type: application/json');
        $dados = $this->params();
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
    
    public function pesquisa() {//função para pesquisar títulos do confea        
        header('Content-type: application/json');
        header('Access-Control-Allow-Origin: *');//pode ser retirado
        $termo = $this->params();
        $dados = $this->model->pesquisa($termo["pesquisa"]);
        echo json_encode($dados);
    }

}