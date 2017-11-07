<?php

(defined('BASEPATH')) OR exit('Acesso direto ao script não permitido'); 

class Cursos extends MX_Security{

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
        $this->load->helper("data");
        $dados = $this->params();
        if(!isset($dados['seg'])&&(($dados['nivel']=="S")||($dados['nivel']=="M"))){
            $dados["data_validade_ini"] = Data_helper::inverter($dados["data_validade_ini"]);
            $dados["data_validade"] = Data_helper::inverter($dados["data_validade"]);
        }
        $dados["data_rec_mec"] = Data_helper::inverter($dados["data_rec_mec"]);
        $dados["data_deferimento"] = Data_helper::inverter($dados["data_deferimento"]);
        
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

    public function listar_cursos(){
        $id = $this->params[3];
        $dados["instituicao_id"] = $id; 
        $this->parser->parse("cursos/lista_por_inst", $dados);
        
    }
    
    public function listar_cursos_json(){//cria um json dos dados extraídos a partir da função lista_da_instituicao contida na model no arquivo /models/m_cursos.php
        header('Content-type: application/json');
        $dados = $this->model->lista_da_instituicao($this->params[3]);
        echo json_encode($dados);
    }
    
    public function Ver_nome_instituicao(){//cria um json dos dados extraídos a partir da função lista_da_instituicao contida na model no arquivo /models/m_cursos.php
        header('Content-type: application/json');
        $dados = $this->model->Nome_da_instituicao($this->params[3]);
        echo json_encode($dados);
    }
    
    public function carregar(){
        header('Content-type: application/json');
        $dados = $this->model->carregar($this->params[3]);
        echo json_encode($dados);
    }
    
    public function vercurso(){
        $dados["id"] = $this->params[3];
        $this->parser->parse("cursos/ver",$dados);
     }
    
    public function pesquisar(){
        header('Content-type: application/json');
        $dados = $this->model->pesquisa($this->params[3]);
        echo json_encode($dados);
    }
}