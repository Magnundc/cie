<?php

(defined('BASEPATH')) OR exit('Acesso direto ao script não permitido'); 

class Colaboradores extends MX_Security{

    function __construct() {
        parent::__construct();
        $this->parser->setModule('site');
        $this->params = $this->uri->segment_array();
        $this->model = $this->load->model('m_colaboradores');
    }

    public function index(){
        $this->parser->parse("colaboradores/index");
    }
    
    public function perfil(){
        $this->parser->parse("colaboradores/perfil");
    }

    public function checar() {                
        $dados = $this->model->checar($_SESSION['logado']->login);
        $_SESSION['logado'] = $dados;
        header("location:" . base_url . "/instituicoes");
    }


    public function salvar(){
        header('Content-type: application/json');
        $dados = $this->params();
        $result = $this->model->salvar($dados);
        echo json_encode($result);
    }

    public function carregarPerfil(){
        header('Content-type: application/json');
        $dados = $_SESSION['logado'];
        echo json_encode($dados);
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
    
    public function obterFoto() {
        header('Content-type: application/json');
        $aniversariante = json_decode(file_get_contents(base_url_aniversariantes."?usuario=".$this->params[3]));
        echo json_encode(array('foto'=>isset($aniversariante->dados->foto)?$aniversariante->dados->foto:'default.png'));
    }

    public function getLogado() {
        header('Content-type: application/json');        
        $user = $_SESSION['logado'];                
        echo json_encode($_SESSION['logado']);
    }
    
     public function pesquisa(){
        header('Content-type: application/json');
        header('Access-Control-Allow-Origin: *');//pode ser retirado
        $termo = $this->params();
        $dados = $this->model->pesquisa($termo["pesquisa"]);
        echo json_encode($dados);
        
    }

}