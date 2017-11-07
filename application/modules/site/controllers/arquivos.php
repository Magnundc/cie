<?php

(defined('BASEPATH')) OR exit('Acesso direto ao script não permitido'); 

class Arquivos extends MX_Security{

    function __construct() {
        parent::__construct();
        $this->parser->setModule('site');
        $this->params = $this->uri->segment_array();
        $this->model = $this->load->model('m_arquivos');
    }

    public function index(){
        $this->parser->parse("arquivos/index");
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
    
    public function listar_arquivos(){
        header('Content-type: application/json');
        $dados = $this->model->listar_arquivos($this->params[3]);
        echo json_encode($dados);
    }
    
    public function upload(){
        header('Content-type: application/json');
        $md5_nome = md5($_FILES["file"]["tmp_name"]).'.pdf';
        $nome = $_FILES["file"]["name"];
        $dir = FCPATH."public/arquivos/tmp/";
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $dir.$md5_nome)){
            echo json_encode(array("result"=>TRUE, "message"=>"Upload realizado com sucesso.", "arquivos"=> array("md5_nome"=>$md5_nome, "nome"=>$nome)));
        } else {
            echo json_encode(array("result"=>FALSE, "message"=>"Upload não realizado.", "arquivos"=> array()));   
        }
    }
    
    public function remover(){
        header('Content-type: application/json');
        $filetmp = FCPATH."public/arquivos/tmp/".$this->params[3];
        $file = FCPATH."public/arquivos/".$this->params[3];
        if (file_exists($file)){
            unlink($file);
            echo json_encode(array("result"=>TRUE, "message"=>"Anexo removido com sucesso."));
            return $this->model->excluir($this->params[3]);
        }
        if(file_exists($filetmp)){
            unlink($filetmp);
            echo json_encode(array("result"=>TRUE, "message"=>"Anexo removido com sucesso."));
        }
        else{
            echo json_encode(array("result"=>FALSE, "message"=>"Arquivo não encontrado"));
        }
    }
}