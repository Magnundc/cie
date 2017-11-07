<?php

(defined('BASEPATH')) OR exit('Acesso direto ao script não permitido'); 

class Publico extends MX_Controller{

    function __construct() {
        parent::__construct();
        $this->parser->setModule('publico');
        $this->params = $this->uri->segment_array();
        $this->model = $this->load->model('m_instituicoes');
    }

    public function index(){
        $this->parser->parse("instituicoes/index");
       
    }

    public function total(){
        header('Content-type: application/json');
        echo json_encode($this->model->total());
    }
    
    public function totalcursos(){
        header('Content-type: application/json');
        echo json_encode($this->model->totalcursos());
    }

    public function listar(){
        header('Content-type: application/json');
        $dados = $this->model->lista($this->params[3], $this->params[4], $this->params[5], $this->params[6]);
        echo json_encode($dados);
    }
    
    public function listar_por_curso(){
        header('Content-type: application/json');
        $dados = $this->model->lista_por_curso($this->params[3], $this->params[4], $this->params[5], $this->params[6]);
        echo json_encode($dados);
    }
    
    public function carregar(){
        header('Content-type: application/json');
        $dados = $this->model->carregar($this->params[3]);
        echo json_encode($dados);
    }
    
    public function carregar_curso(){
        header('Content-type: application/json');
        $dados = $this->model->carregar_curso($this->params[3]);
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
    
    public function pesquisa_curso(){
        header('Content-type: application/json');
        header('Access-Control-Allow-Origin: *');//pode ser retirado
        $termo = $this->params();
        $dados = $this->model->pesquisa_curso($termo["pesquisa"]);
        echo json_encode($dados);
        
    }
    
    public function traducao() {
        header('Content-type: application/json');
        $dados = $this->model->getNivel();
        echo json_encode($dados);
    }
    
    //Cursos
    
    public function listar_cursos(){
        $id = $this->params[3];
        $dados["instituicao_id"] = $id; 
        $this->parser->parse("instituicoes/lista_por_inst", $dados);
    }
    
    public function listar_cursos_json(){//cria um json dos dados extraídos a partir da função lista_da_instituicao contida na model no arquivo /models/m_cursos.php
        header('Content-type: application/json');
        $this->model = $this->load->model('m_cursos');
        $dados = $this->model->lista_da_instituicao($this->params[3]);
        echo json_encode($dados);
    }
    
        
    public function lista_cursos_por_cursosconfea(){//cria um json dos dados extraídos a partir da função lista_da_instituicao contida na model no arquivo /models/m_cursos.php
        header('Content-type: application/json');
        $this->model = $this->load->model('m_instituicoes');
        $dados = $this->model->lista_cursos_por_cursosconfea($this->params[3]);
        echo json_encode($dados);
    }
    
    public function graf_cursosconfea_cursos(){//cria um json dos dados extraídos a partir da função lista_da_instituicao contida na model no arquivo /models/m_cursos.php
        header('Content-type: application/json');
        $this->model = $this->load->model('m_instituicoes');
        $dados = $this->model->graf_cursosconfea_cursos();
        echo json_encode($dados);
    }
    
    //Historicos de decisoes
    
     public function listar_historicodecisoes_json(){//cria um json dos dados extraídos a partir da função lista_da_instituicao contida na model no arquivo /models/m_cursos.php
        header('Content-type: application/json');
        $this->model = $this->load->model('m_historicodecisoes');
        $dados = $this->model->lista_historicos_decisoes($this->params[3]);
        echo json_encode($dados);
    }
    
    //Arquivos
    
     public function listar_arquivos(){
        header('Content-type: application/json');
        $this->model = $this->load->model('m_arquivos');
        $dados = $this->model->listar_arquivos($this->params[3]);
        echo json_encode($dados);
    }
}