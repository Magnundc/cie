<?php

(defined('BASEPATH')) OR exit('Acesso direto ao script não permitido'); 

class Historicodecisoes extends MX_Security{

    function __construct() {
        parent::__construct();
        $this->parser->setModule('site');
        $this->params = $this->uri->segment_array();
        $this->model = $this->load->model('m_historicodecisoes');
    }

    public function index(){
        $this->parser->parse("historicodecisoes/index");
    }

    public function salvar(){
        header('Content-type: application/json');
        $this->load->helper("data");
        $dados = $this->params();
        $dados["data_rec_mec"] = Data_helper::inverter($dados["data_rec_mec"]);
        $dados["data_deferimento"] = Data_helper::inverter($dados["data_deferimento"]);
        
        $m_cursos = $this->load->model('m_cursos');
        $curso = $m_cursos->carregar($dados['cursos_id']);
//        print_r($curso[0]->nivel);
//        exit();
        if($curso[0]->nivel!='S' && $curso[0]->nivel!='M'){
            unset($dados['data_validade_ini'],$dados['data_validade'], $dados['cadastramento']);
        }
        
        if(isset($dados['data_validade_ini']))
            $dados["data_validade_ini"] = Data_helper::inverter($dados["data_validade_ini"]);
        if(isset($dados['data_validade']))
            $dados["data_validade"] = Data_helper::inverter($dados["data_validade"]);
        
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
    
    public function listar_historicodecisoes(){
        $id = $this->params[3];
        $dados["cursos_id"] = $id; 
        $this->parser->parse("historicodecisoes/lista_historicodecisoes", $dados);
    }
    
    public function carregar(){
        header('Content-type: application/json');
        $dados = $this->model->carregar($this->params[3]);
        echo json_encode($dados);
    }
    
    public function listar_historicodecisoes_json(){//cria um json dos dados extraídos a partir da função lista_da_instituicao contida na model no arquivo /models/m_cursos.php
        header('Content-type: application/json');
        $dados = $this->model->lista_historicos_decisoes($this->params[3]);
        echo json_encode($dados);
    }
    
    public function ver_historicodecisoes(){
        $dados["id"] = $this->params[3];
        $this->parser->parse("historicodecisoes/ver",$dados);
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