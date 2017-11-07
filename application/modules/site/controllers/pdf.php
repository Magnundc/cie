<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class pdf extends MX_Controller {

    function __construct() {
        parent::__construct();
        
        $this->parser->setModule('site');
        $this->params = $this->uri->segment_array();
      }
    
    public function cursosPdf() {
        //header('Content-type: application/pdf');  
        $this->load->helper("data");
        $this->model = $this->load->model("m_cursos");
        $this->load->helper("data");
        $curso = $this->model->carregar($this->params[3]);
        $curso = $curso[0];
        $html = "<p class='center'><img width='100px' src='".base_url."/public/imagens/wYllSe.jpg'/><br>";        
        $html .= "SERVIÇO PÚBLICO FEDERAL<br>CONSELHO REGIONAL DE ENGENHARIA E AGRONOMIA DE GOIÁS<br>CREA-GO</p>";
        
        $html .= "<p class='head'>CIE - Cadastro de Instituições de Ensino</p>";
        $html .= "<p><p><b>Instituição de ensino:</b> " . $curso->nome_instituicao . "</p>";
        $html .= "<p><b>Curso:</b> ". $curso->nome ."</p>";
        $html .= "<p><b>Título:</b> " . $curso->titulo . "</p>";
        $html .= "<p style='text-align: justify'><b>Atribuições:</b> " . $curso->atribuicoes . "</p>";
        $html .= "<p><b>Data do deferimento no Crea:</b> " . Data_helper::inverter($curso->data_deferimento) . "</p>";
        $html .= "<p><b>Data de reconhecimento:</b> " . Data_helper::inverter($curso->data_rec_mec) . "</p>";
        if(isset($curso->data_validade)){
            if($curso->data_validade !="0000-00-00"){
                $html .= "<p><b>Válido para ingressos"; 
                if(isset($curso->data_validade_ini)){
                    $html .= " de </b>". Data_helper::inverter($curso->data_validade_ini) ."";
                }     
                $html .= " <b>até:</b> " . Data_helper::inverter($curso->data_validade) . "</p>";
            }
        }
        if($curso->nivel == "S"){
            $curso->nivel = "SUPERIOR";
        }
        if($curso->nivel == "M"){
            $curso->nivel = "MÉDIO";
        }
        if($curso->nivel == "H"){
            $curso->nivel = "HÍBRIDO";
        }
        if($curso->nivel == "E"){
            $curso->nivel = "ESPECIALIZAÇÃO";
        }
        if($curso->nivel == "A"){
            $curso->nivel = "APERFEIÇOAMENTO";
        }
        if($curso->nivel == "T"){
            $curso->nivel = "MESTRADO";
        }
        if($curso->nivel == "D"){
            $curso->nivel = "DOUTORADO";
        }
        
        if($curso->cadastramento=='1'){
            $curso->cadastramento='DEFINITIVO';
        }
        if($curso->cadastramento=='0'){
            $curso->cadastramento='PROVISÓRIO';
        }
        
        if($curso->modalidade=='1'){
            $curso->modalidade='PRESENCIAL';
        }
        if($curso->modalidade=='0'){
            $curso->modalidade='À DISTÂNCIA';
        }
        
        $html .= "<p><b>Curso de nível </b> ".$curso->nivel."";
        
        if(isset($curso->modalidade)){
            $html .= "<b> na modalidade </b>".$curso->modalidade."";
        }
        
        if(isset($curso->cadastramento)){
            $html .= "<b> com cadastro </b>".$curso->cadastramento."</p>";
        }
        if((isset($curso->processo)&&($curso->processo!=""))){
            $html .= "<p><b>Processo:</b> " . $curso->processo . "</p>";
        }
        $html .= "<hr>";
        
        $html .= "<p>A autenticidade deste documento por ser conferida no endereço: http://www.crea-go.org.br/cie/cursos/pdf/".$curso->id."</p>";
        
        $html .= "</ul>";
        $html .= "</fieldset>";
        
        $pdf = new Creapdf(FCPATH."/public/arquivos/{$curso->nome_instituicao}.pdf");
        $pdf = new Creapdf();
        $pdf->setBody($html); 
        $pdf->setCss(FCPATH . "/public/css/pdf.css");
        $pdf->gerar();
    }
    
    public function cursoshistPdf() {
        //header('Content-type: application/pdf');  
       
        $this->model = $this->load->model("m_historicodecisoes");
        $this->load->helper("data");
        $historicodecisoe = $this->model->carregar($this->params[3]);
        $historicodecisoe = $historicodecisoe[0];
        
        $this->load->helper("data");
        $this->model = $this->load->model("m_cursos");
        $this->load->helper("data");
        $curso = $this->model->carregar($historicodecisoe->cursos_id);
        $curso = $curso[0];
//        print_r($curso);
//        print_r($historicodecisoe);
        $html = "<p class='center'><img width='100px' src='".base_url."/public/imagens/wYllSe.jpg'/><br>";        
        $html .= "SERVIÇO PÚBLICO FEDERAL<br>CONSELHO REGIONAL DE ENGENHARIA E AGRONOMIA DE GOIÁS<br>CREA-GO</p>";
        
        $html .= "<p><p><p class='head'>CIE - Cadastro de Instituições de Ensino</p>";
        $html .= "<p><p><b>Instituição de ensino:</b> " . $historicodecisoe->nome_instituicao . "</p>";
        if(isset($historicodecisoe->nome)){
            $html .= "<p><b>Curso:</b> ". $historicodecisoe->nome ."</p>";
        }
        if($historicodecisoe->nomecursol!=''){
            $html .= "<p><b>Curso:</b> ". $historicodecisoe->nomecursol ."</p>";
        }
        if(isset($historicodecisoe->titulo)){
            $html .= "<p><b>Título:</b> " . $historicodecisoe->titulo . "</p>";
        }
        if($curso->nivel == "S"){
            $curso->nivel = "SUPERIOR";
        }
        if($curso->nivel == "M"){
            $curso->nivel = "MÉDIO";
        }
        if($curso->nivel == "H"){
            $curso->nivel = "HÍBRIDO";
        }
        if($curso->nivel == "E"){
            $curso->nivel = "ESPECIALIZAÇÃO";
        }
        if($curso->nivel == "A"){
            $curso->nivel = "APERFEIÇOAMENTO";
        }
        if($curso->nivel == "T"){
            $curso->nivel = "MESTRADO";
        }
        if($curso->nivel == "D"){
            $curso->nivel = "DOUTORADO";
        }
        
        if($historicodecisoe->cadastramento=='1'){
            $historicodecisoe->cadastramento='DEFINITIVO';
        }
        if($historicodecisoe->cadastramento=='0'){
            $historicodecisoe->cadastramento='PROVISÓRIO';
        }
        
        if($curso->modalidade=='1'){
            $curso->modalidade='PRESENCIAL';
        }
        if($curso->modalidade=='0'){
            $curso->modalidade='À DISTÂNCIA';
        }
        
        $html .= "<p><b>Curso de nível </b> ".$curso->nivel."";
        
        if(isset($curso->modalidade)){
            $html .= "<b> na modalidade </b>".$curso->modalidade."";
        }
        
        if(isset($curso->cadastramento)){
            $html .= "<b> com cadastro </b>".$historicodecisoe->cadastramento."</p>";
        }
        
        if(isset($historicodecisoe->atribuicoes)){
            $html .= "<p style='text-align: justify'><b>Atribuições:</b> " . $historicodecisoe->atribuicoes . "</p>";
        }
        $html .= "<p><b>Processo </b> ".$historicodecisoe->processo."<b>  deferido no Crea-GO em</b> " . Data_helper::inverter($historicodecisoe->data_deferimento) . "</p>";
        
        if(isset($historicodecisoe->data_validade)){
            $html .= "<p><b>Válido para ingressos"; 
            if(isset($historicodecisoe->data_validade)){
                $html .= "de </b>". Data_helper::inverter($historicodecisoe->data_validade_ini) ."";
            }     
           $html .= " <b>até:</b> " . Data_helper::inverter($historicodecisoe->data_validade) . "</p>";
        }
        
        if(isset($historicodecisoe->desc_validade)){
        $html .= "<p><b>Descrição da validade: </b>".$historicodecisoe->desc_validade."</p>";
        }
        $html .= "<p><b>Portaria de autorização/reconhecimento: </b> ".$historicodecisoe->portaria_reconhecimento."<b> expedido por </b> ".$historicodecisoe->orgao_exp."<b> em </b>". Data_helper::inverter($historicodecisoe->data_rec_mec) . "</p>";
        
        $html .= "<hr>";
        
        $html .= "<p>A autenticidade deste documento por ser conferida no endereço: http://www.crea-go.org.br/cie/cursoshist/pdf/".$curso->id."</p>";
        
        $html .= "</ul>";
        $html .= "</fieldset>";
        
        $pdf = new Creapdf(FCPATH."/public/arquivos/{$curso->nome_instituicao}.pdf");
        $pdf = new Creapdf();
        $pdf->setBody($html); 
        $pdf->setCss(FCPATH . "/public/css/pdf.css");
        $pdf->gerar();
    }
    
    public function historicodecisoesPdf() {
        //header('Content-type: application/pdf');  
        $this->load->helper("data");
        $this->model = $this->load->model("m_historicodecisoes");
        $this->load->helper("data");
        $historicodecisoe = $this->model->carregar($this->params[3]);
        $historicodecisoe = $historicodecisoe[0];
        $html = "<p class='center'><img width='100px' src='".base_url."/public/imagens/wYllSe.jpg'/><br>";        
        $html .= "SERVIÇO PÚBLICO FEDERAL<br>CONSELHO REGIONAL DE ENGENHARIA E AGRONOMIA DE GOIÁS<br>CREA-GO</p>";
        
        $html .= "<p><p><p class='head'>CIE - Cadastro de Instituições de Ensino</p>";
        $html .= "<p><p><p class='head'>Histórico de decisão</p>";
        $html .= "<p><b>Data e hora do cadastro da decisão: " . Data_helper::inverter($historicodecisoe->data_criacao) . "</p>";
        $html .= "<p><b>Instituição de ensino:</b> " . $historicodecisoe->nome_instituicao . "</p>";
        $html .= "<p><b>Curso:</b> ". $historicodecisoe->nome ."</p>";
        $html .= "<p><b>Título:</b> " . $historicodecisoe->titulo . "</p>";
        $html .= "<p><b>Atribuições:</b> " . $historicodecisoe->atribuicoes . "</p>";
        $html .= "<p><b>Data do deferimento no Crea:</b> " . Data_helper::inverter($historicodecisoe->data_deferimento) . "</p>";
        $html .= "<p><b>Data de reconhecimento no MEC:</b> " . Data_helper::inverter($historicodecisoe->data_rec_mec) . "</p>";
        $html .= "<p><b>Válido para ingressos de até:</b> " . strlen($historicodecisoe->data_validade) > 6 ? Data_helper::inverter($historicodecisoe->data_validade) : NULL. "</p>";
       
        $html .= "<hr>";
        
        $html .= "<p>A autenticidade deste documento por ser conferida no endereço: http://www.crea-go.org.br/cie/historicodecisoe/pdf/".$historicodecisoe->id."</p>";
        
        $html .= "</ul>";
        $html .= "</fieldset>";
        
        $pdf = new Creapdf(FCPATH."/public/arquivos/{$historicodecisoe->nome_instituicao}.pdf");
        $pdf = new Creapdf();
        $pdf->setBody($html); 
        $pdf->setCss(FCPATH . "/public/css/pdf.css");
        $pdf->gerar();
    }
    
    public function instituicoesPdf() {
        //header('Content-type: application/pdf');  
        $this->load->helper("data");
        $this->model = $this->load->model("m_instituicoes");
        $this->load->helper("data");
        $instituicoe = $this->model->carregar($this->params[3]);
        $instituicoe = $instituicoe[0];
        print_r($instituicoe);
        $html = "<p class='center'><img width='100px' src='".base_url."/public/imagens/wYllSe.jpg'/><br>";        
        $html .= "SERVIÇO PÚBLICO FEDERAL<br>CONSELHO REGIONAL DE ENGENHARIA E AGRONOMIA DE GOIÁS<br>CREA-GO</p>";
        
        $html .= "<p><p><p class='head' style='text-align: center'>CIE - Cadastro de Instituições de Ensino</p>";
        $html .= "<p><p class='head'>Comprovante de cadastro</p>";
        $html .= "<p><b>Instituição de ensino:</b> " . $instituicoe->nome . "</p>";
        if(isset($instituicoe->nome_abreviado)){
            $html .= "<p><b>Nome abreviado:</b> ". $instituicoe->nome_abreviado ."</p>";
        }
        if(isset($instituicoe->CNPJ)){
            $html .= "<p><b>CNPJ:</b> ". $instituicoe->CNPJ ."</p>";
        }
        if(isset($instituicoe->RNI)){
            $html .= "<p><b>Registro Nacional:</b> ". $instituicoe->RNI ."</p>";
        }
        if(isset($instituicoe->data_registro)){
            $html .= "<p><b>Data de registro:</b> " . Data_helper::inverter($instituicoe->data_registro) . "</p>";
        }
        if($instituicoe->nivel_ensino == 'S')
            $instituicoe->nivel_ensino = 'SUPERIOR';
        if($instituicoe->nivel_ensino == 'M')
            $instituicoe->nivel_ensino = 'MÉDIO';
        if($instituicoe->nivel_ensino == 'H')
            $instituicoe->nivel_ensino = 'HÍBRIDO';
        $html .= "<p><b>Nível:</b> " . $instituicoe->nivel_ensino . "</p>";
        $html .= "<p><b>Endereço:</b> " . $instituicoe->endereco . ", " . $instituicoe->complemento_endereco . "</p>";
        $html .= "<p><b>Bairro:</b> " . $instituicoe->bairro . ", CEP:" . $instituicoe->cep . ", " . $instituicoe->cidade . "-" . $instituicoe->estado ."</p>";
        $html .= "<p><b>Telefone:</b> " . $instituicoe->telefone . "</p>";
        if(isset($instituicoe->email)){
            $html .= "<p><b>E-mail:</b> " . $instituicoe->email . "</p>";
        }
        if(isset($instituicoe->reitor_diretor)){
            $html .= "<p><b>Reitor/Diretor:</b> " . $instituicoe->reitor_diretor . "</p>";
        }
        if(isset($instituicoe->telefone_reitor)){
            $html .= "<p><b>Telefone Reitor/Diretor:</b> " . $instituicoe->telefone_reitor . "</p>";
        }
        if(isset($instituicoe->email_reitor)){
            $html .= "<p><b>Email Reitor/Diretor:</b> " . $instituicoe->email_reitor . "</p>";
        }
        
        $html .= "<hr>";
        $html .= "<p>A autenticidade deste documento por ser conferida no endereço: http://www.crea-go.org.br/cie/instituicoes/pdf/" . $instituicoe->id . "</p>";
        $html .= "</ul>";
        $html .= "</fieldset>";
         
        $pdf = new Creapdf(FCPATH."/public/arquivos/{$instituicoe->nome}.pdf");
        $pdf = new Creapdf();
        $pdf->setBody($html); 
        $pdf->setCss(FCPATH . "/public/css/pdf.css");
        $pdf->gerar();
    }
    
    public function recadastramentosPdf() {
        //header('Content-type: application/pdf');  
        $this->load->helper("data");
        $this->model = $this->load->model("m_recadastramentos");
        $this->load->helper("data");
        $recadastramento = $this->model->carregar($this->params[3]);
        $recadastramento = $recadastramento[0];
        $html = "<p class='center'><img width='100px' src='".base_url."/public/imagens/wYllSe.jpg'/><br>";        
        $html .= "SERVIÇO PÚBLICO FEDERAL<br>CONSELHO REGIONAL DE ENGENHARIA E AGRONOMIA DE GOIÁS<br>CREA-GO</p>";
        
        $html .= "<p><p><p class='head'>CIE - Cadastro de Instituições de Ensino</p>";
        $html .= "<p><p><p class='head'>Registro de recadastramento</p>";
        $html .= "<p><b>Data do recadastramento: " . Data_helper::inverter($recadastramento->data_recadastro) . "</p>";
        $html .= "<p><b>Instituição de ensino:</b> " . $recadastramento->nome . "</p>";
        $html .= "<p><b>Processo:</b> ". $recadastramento->processo ."</p>";
        $html .= "<p><b>Alterações:</b> " . $recadastramento->alteracoes . "</p>";
        
        $html .= "<hr>";
        
        $html .= "<p>A autenticidade deste documento por ser conferida no endereço: http://www.crea-go.org.br/cie/recadastramentos/pdf/".$recadastramento->id."</p>";
        
        $html .= "</ul>";
        $html .= "</fieldset>";
        
        $pdf = new Creapdf(FCPATH."/public/arquivos/{$recadastramento->nome}.pdf");
        $pdf = new Creapdf();
        $pdf->setBody($html); 
        $pdf->setCss(FCPATH . "/public/css/pdf.css");
        $pdf->gerar();
    }
    
    public function getNivel() {
        $arr["S"] = "SUPERIOR";
        $arr["M"] = "MÉDIO";
        $arr["H"] = "HÍBRIDO";
        return $arr;
    }

}
