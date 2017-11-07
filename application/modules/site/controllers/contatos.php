<?php

(defined('BASEPATH')) OR exit('Acesso direto ao script não permitido'); 

class Contatos extends MX_Security{

    function __construct() {
        parent::__construct();
        $this->parser->setModule('site');
        $this->params = $this->uri->segment_array();
        $this->model = $this->load->model('m_cursos');
    }

    public function index(){
        $this->parser->parse("contatos/index");
    }

    public function pesquisains(){
        header('Content-type: application/json');
        $dados = $this->model->pesquisains($this->params[3]);
        echo json_encode($dados);
    }
    
    public function pesquisacur(){
        header('Content-type: application/json');
        $dados = $this->model->pesquisacur($this->params[3]);
        echo json_encode($dados);
    }
    
    public function pesquisacoordi(){
        header('Content-type: application/json');
        $dados = $this->model->pesquisacoordi($this->params[3]);
        echo json_encode($dados);
    }
}