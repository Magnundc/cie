<?php

(defined('BASEPATH')) OR exit('Acesso direto ao script não permitido'); 

class Cursos extends MX_Controller{

    function __construct() {
        parent::__construct();
        $this->parser->setModule('site');
        $this->params = $this->uri->segment_array();
        $this->model = $this->load->model('m_cursos');
    }

    public function index(){
        $this->parser->parse("cursos/index");
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

}