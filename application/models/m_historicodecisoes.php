<?php

class M_historicodecisoes extends CI_Model {

    public function salvar($data) {
        if (isset($data['$$hashKey'])) {
            unset($data['$$hashKey']);
        }
        
        if(isset($data['arquivos'])){
            $files = $data['arquivos'];
            unset($data['arquivos']);
        }
        
        unset($data['arquivos']);
        
        if (isset($data['nomecursol'])) {
            unset($data['cursosconfea_id']);
            unset($data['titulosconfea_id']);
        }
        
        if (isset($data['id'])) {
            
            $this->db->where('id', $data['id']);
            
            unset($data['nome_instituicao'],$data['titulo'],$data['nome']);
            $data['alterado_por'] = $_SESSION['logado']->login;
            $data['data_alteracao'] = date("Y-m-d H:i:s");
            
             //Atribui ao array log a data e hora atual, os dados antes da 
            //alteração, os dados após e o usuário atual da sessão.
            $log = array("data" => date("Y-m-d H:i:s"),
                "operacao" => "alterou histórico de decisão ".json_encode($data),
                "criado_por" => $_SESSION['logado']->login);
            
            $result = $this->db->update('historicodecisoes', $data);
            
            if(isset($files)){
                                $arquivos = FCPATH . "public/arquivos/";
                                $tmp = FCPATH . "public/arquivos/tmp/";
                                //print_r($params["arquivos"]);
                                //exit();
                                foreach ($files as $linha){
                                if((!isset($linha["arquivos"]["id"]))&&(isset($linha["arquivos"]["nome"]))){
                                //$dados_anexos[""]
                                $dados_anexos["objeto_id"]= $data['id'];
                                $dados_anexos["nome"] = $linha["arquivos"]["nome"];
                                $dados_anexos["md5_nome"] = $linha["arquivos"]["md5_nome"];
                                $dados_anexos['criado_por'] = $_SESSION['logado']->login;
                                $dados_anexos['data'] = date("Y-m-d H:i:s");
//                                print_r($dados_anexos);
//                                exit();
//                                
                                $m_arquivos = $this->load->model('m_arquivos');
                                $m_arquivos->salvar($dados_anexos);

                                rename($tmp . $dados_anexos["md5_nome"], $arquivos . $dados_anexos["md5_nome"]);
                                }}
            }
            
            //Registra o array log na tabela log.
            $result = $this->db->insert('log', $log);
        }else{
            $m_cursos = $this->load->model('m_cursos');
            $curso = $m_cursos->carregar($data['cursos_id']);
            
            if($curso[0]->cursosconfea_id=="2974"){
                $data['cursosconfea_id']="2974";
                $data['titulosconfea_id'] ="4150100";
                $data['atribuicoes'] = "Artigo 4º da Resolução 359/91 do Confea.";
            }
            
            if (!isset($data['data_validade'])){
                unset($data['data_validade_ini'],$data['data_validade']);
            }
            $data['alterado_por'] = $_SESSION['logado']->login;
            $data['data_alteracao'] = date("Y-m-d H:i:s");
            $data['criado_por'] = $_SESSION['logado']->login;
            $data['data_criacao'] = date("Y-m-d H:i:s");
            
            $log = array("data" => date("Y-m-d H:i:s"),
                "operacao" => "cadastrou curso ".json_encode($data),
                "criado_por" => $_SESSION['logado']->login);
            
            $result = $this->db->insert('historicodecisoes', $data);
            
            $last_id = $this->db->insert_id();
            $data['id'] = $last_id;
            if(isset($files)){
                                $arquivos = FCPATH . "public/arquivos/";
                                $tmp = FCPATH . "public/arquivos/tmp/";
                                //print_r($params["arquivos"]);
                                //exit();
                                foreach ($files as $linha){
                                if((!isset($linha["arquivos"]["id"]))&&(isset($linha["arquivos"]["nome"]))){
                                //$dados_anexos[""]
                                $dados_anexos["objeto_id"]= $last_id;
                                $dados_anexos["nome"] = $linha["arquivos"]["nome"];
                                $dados_anexos["md5_nome"] = $linha["arquivos"]["md5_nome"];
                                $dados_anexos['criado_por'] = $_SESSION['logado']->login;
                                $dados_anexos['data'] = date("Y-m-d H:i:s");
//                                print_r($dados_anexos);
//                                exit();
//                                
                                $m_arquivos = $this->load->model('m_arquivos');
                                $m_arquivos->salvar($dados_anexos);

                                rename($tmp . $dados_anexos["md5_nome"], $arquivos . $dados_anexos["md5_nome"]);
                                }}
            }
            
            
            $result = $this->db->insert('log', $log);

        }
        $id = $data['id'];
        return array('result' => $result, 'message' => $result ? 'Registro gravado' : 'Erro ao gravar o registro', 'error' => $this->db->_error_message(), 'id' => $id);
    }

    public function excluir($id) {
        $this->db->where('id', $id);
        $result = $this->db->delete('historicodecisoes');
        return array('result' => $result, 'message' => $result ? 'Registro excluído' : 'Erro ao excluir o registro', 'error' => $this->db->_error_message());
    }

    public function total() {
        $this->db->select('count(id) as total');
        $this->db->from('historicodecisoes');
        $query = $this->db->get();
        return $query->result();
    }

    public function lista($limite, $inicio, $coluna, $ordem) { 
        $this->db->select("hi.*");
        $this->db->from("historicodecisoes hi");
        $this->db->join("cursosconfea cu","cu.id = hi.cursosconfea_id", "left");
        $this->db->join("titulosconfea ti","ti.id = hi.titulosconfea_id", "left");
        $this->db->join("cursos cu","cu.id = hi.cursos_id", "left");
        $this->db->limit($limite, $inicio);
        $this->db->order_by($ordem, $coluna);
        $query = $this->db->get();
        return is_object($query)?$query->result():array();
    }

    public function carregar($id) { 
        $this->db->select("hi.*, ti.titulo, cursosconfea.nome, ins.nome as nome_instituicao");
        $this->db->from("historicodecisoes hi");
        $this->db->join("cursosconfea","cursosconfea.id = hi.cursosconfea_id", "left");
        $this->db->join("titulosconfea ti","ti.id = hi.titulosconfea_id", "left");
        $this->db->join("cursos cu","cu.id = hi.cursos_id", "left");
        $this->db->join("instituicoes ins","ins.id = cu.instituicao_id", "left");
        $this->db->where("hi.id = ", $id);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function lista_historicos_decisoes($id) {
        $this->db->select("hist.*, ti.titulo, cursosconfea.nome, ins.nome as nome_instituicao");
        $this->db->from("historicodecisoes hist");
        $this->db->join("titulosconfea ti","ti.id = hist.titulosconfea_id", "left");
        $this->db->join("cursosconfea","cursosconfea.id = hist.cursosconfea_id", "left");
        $this->db->join("cursos cu","cu.id = hist.cursos_id", "left");
        $this->db->join("instituicoes ins","ins.id = cu.instituicao_id", "left");
        $this->db->where("hist.cursos_id = ", $id);
        $query = $this->db->get();
        return is_object($query)?$query->result():array();
    }
    
    public function Nome_da_instituicao($id) {
        $this->db->select("ins.nome as nome_instituicao");
        $this->db->from("instituicoes ins");
        $this->db->join("cursos","cursos.instituicao_id = ins.id", "left");
        $this->db->where("cursos.id = ",$id);
        $query = $this->db->get();
        return $query->result();
     }
   
    public function Nome_do_curso($id) {
        $this->db->select("cursosconfea.nome");
        $this->db->from("cursosconfea");
        $this->db->join("cursos","cursos.cursosconfea_id = cursosconfea.id", "left");
        $this->db->where("cursos.id = ",$id);
        $query = $this->db->get();
        return $query->result();
     }

}