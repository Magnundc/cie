<?php

class M_cursos extends CI_Model {

    public function salvar($data) {
        if (isset($data['$$hashKey'])) {
            unset($data['$$hashKey']);
        }
        
        if(isset($data['arquivos'])){
            $files = $data['arquivos'];
            unset($data['arquivos']);
        }
        unset($data['arquivos']);
        
        if(isset($data['seg'])){
            if ((!isset($data['cursosconfea_id']))&&($data['seg']=="S")) {
                $data['cursosconfea_id'] = "2974";
                $data['titulosconfea_id'] = "4150100";
                $data['atribuicoes'] = "Artigo 4º da Resolução 359/91 do Confea.";
            }
        }
        if(isset($data['cursosconfea_id'])){
            unset($data['nomecursol']);
        }
        
        if (!isset($data['cursosconfea_id'])&&(isset($data['nomecursol']))) {
            unset($data['cursosconfea_id']);
            unset($data['titulosconfea_id']);
        }
        
        if(isset($data['seg'])){
            unset($data['seg']);
        }
        
        if (isset($data['id'])) {
            $this->db->where('id', $data['id']);
            if($data['titulosconfea_id']==""){
                unset($data['titulosconfea_id'],$data['cursosconfea_id']);
            }
            if(($data['nivel']!="S")||($data['nivel']!="M")){
                unset($data['data_validade_ini'],$data['data_validade'],$data['cadastramento']);
            }
            unset($data['nome_instituicao'],$data['titulo'],$data['nome']);
            $data['alterado_por'] = $_SESSION['logado']->login;
            $data['data_alteracao'] = date("Y-m-d H:i:s");
            
            //Atribui ao array log a data e hora atual, os dados antes da 
            //alteração, os dados após e o usuário atual da sessão.
            $log = array("data" => date("Y-m-d H:i:s"),
                "operacao" => "alterou curso ".json_encode($data),
                "criado_por" => $_SESSION['logado']->login);
            
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
            $this->db->where('id', $data['id']);
            $result = $this->db->update('cursos', $data);
            
           
            
            //Registra o array log na tabela log.
            $result = $this->db->insert('log', $log);
        }else{
            unset($data['nome_instituicao'],$data['titulo'],$data['nome']);
            $data['alterado_por'] = $_SESSION['logado']->login;
            $data['data_alteracao'] = date("Y-m-d H:i:s");
            $data['criado_por'] = $_SESSION['logado']->login;
            $data['data_criacao'] = date("Y-m-d H:i:s");
            
            $log = array("data" => date("Y-m-d H:i:s"),
                "operacao" => "cadastrou curso ".json_encode($data),
                "criado_por" => $_SESSION['logado']->login);
            
            $result = $this->db->insert('cursos', $data);
            
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
            
            if((($data['nivel']!="S")||($data['nivel']!="M"))&&(isset($data['cursosconfea_id']))){
                $hist = array("cursosconfea_id" => $data['cursosconfea_id'], 
                    "titulosconfea_id" => $data['titulosconfea_id'],
                    "atribuicoes" => $data['atribuicoes'],
                    "data_rec_mec" => $data['data_rec_mec'],
                    "data_deferimento" => $data['data_deferimento'],
                    "portaria_reconhecimento" => $data['portaria_reconhecimento'],
                    "orgao_exp" => $data['orgao_exp'],
                    "processo" => $data['processo'],
                    "criado_por" => $data['criado_por'],
                    "data_criacao" => $data['data_criacao'],
                    "alterado_por" => $data['alterado_por'],
                    "data_alteracao" => $data['data_alteracao'],
                    "cursos_id" => $last_id);   
            }
            
            if((($data['nivel']!="S")||($data['nivel']!="M"))&&(isset($data['nomecursol']))){
                $hist = array("nomecursol" => $data['nomecursol'],
                    "atribuicoes" => $data['atribuicoes'],
                    "data_rec_mec" => $data['data_rec_mec'],
                    "data_deferimento" => $data['data_deferimento'],
                    "portaria_reconhecimento" => $data['portaria_reconhecimento'],
                    "orgao_exp" => $data['orgao_exp'],
                    "processo" => $data['processo'],
                    "criado_por" => $data['criado_por'],
                    "data_criacao" => $data['data_criacao'],
                    "alterado_por" => $data['alterado_por'],
                    "data_alteracao" => $data['data_alteracao'],
                    "cursos_id" => $last_id);   
            }
            
            if(($data['nivel']=="S")||($data['nivel']=="M")){
                $hist = array("cursosconfea_id" => $data['cursosconfea_id'], 
                    "titulosconfea_id" => $data['titulosconfea_id'],
                    "atribuicoes" => $data['atribuicoes'],
                    "data_rec_mec" => $data['data_rec_mec'],
                    "data_deferimento" => $data['data_deferimento'],
                    "data_validade_ini" => $data['data_validade_ini'],
                    "data_validade" => $data['data_validade'],
                    "cadastramento" => $data['cadastramento'],
                    "portaria_reconhecimento" => $data['portaria_reconhecimento'],
                    "orgao_exp" => $data['orgao_exp'],
                    "processo" => $data['processo'],
                    "criado_por" => $data['criado_por'],
                    "data_criacao" => $data['data_criacao'],
                    "alterado_por" => $data['alterado_por'],
                    "data_alteracao" => $data['data_alteracao'],
                    "cursos_id" => $last_id);
            }
            
            $result = $this->db->insert('historicodecisoes', $hist);
            
            $result = $this->db->insert('log', $log);
        }
        $id = $data['id'];
        return array('result' => $result, 'message' => $result ? 'Registro gravado' : 'Erro ao gravar o registro', 'error' => $this->db->_error_message(), 'id' => $id);
    }

    public function excluir($id) {
        $this->db->select("cur.*");
        $this->db->from("cursos cur");
        $this->db->where('cur.id', $id);
        $data = 
        $log = array("data" => date("Y-m-d H:i:s"),
                "operacao" => "excluiu curso ".json_encode($this->db->get()),
                "criado_por" => $_SESSION['logado']->login);
        $result = $this->db->insert('log', $log);
        
        $this->db->where('id', $id);
        $result = $this->db->delete('cursos');
        return array('result' => $result, 'message' => $result ? 'Registro excluído' : 'Erro ao excluir o registro', 'error' => $this->db->_error_message());
    }

    public function total() {
        $this->db->select('count(id) as total');
        $this->db->from('cursos');
        $query = $this->db->get();
        return $query->result();
    }

    public function lista($limite, $inicio, $coluna, $ordem) { 
        $this->db->select("cu.*, ti.titulo");
        $this->db->from("cursos cu");
        $this->db->join("instituicoes ins","ins.id = cu.instituicao_id", "left");
        $this->db->join("cursosconfea cuf","cuf.id = cu.cursosconfea_id", "left");
        $this->db->join("titulosconfea ti","ti.id = cu.titulosconfea_id", "left");
        $this->db->limit($limite, $inicio);
        $this->db->order_by($ordem, $coluna);
        $query = $this->db->get();
        return is_object($query)?$query->result():array();
    }

    public function carregar($id) { 
        $this->db->select("cu.*, ti.titulo, cursosconfea.nome, ins.nome as nome_instituicao");
        $this->db->from("cursos cu");
        $this->db->join("instituicoes ins","ins.id = cu.instituicao_id", "left");
        $this->db->join("cursosconfea","cursosconfea.id = cu.cursosconfea_id", "left");
        $this->db->join("titulosconfea ti","ti.id = cu.titulosconfea_id", "left");
        $this->db->where("cu.id = ",$id);
        $query = $this->db->get();
        return $query->result();
    }

     public function lista_da_instituicao($id) {
        $this->db->select("cur.*, ti.titulo, cursosconfea.nome");
        $this->db->from("cursos cur");
        $this->db->join("titulosconfea ti","ti.id = cur.titulosconfea_id", "left");
        $this->db->join("cursosconfea","cursosconfea.id = cur.cursosconfea_id", "left");
        $this->db->where("cur.instituicao_id = ", $id);
        $query = $this->db->get();
        return is_object($query)?$query->result():array();
     }
     
     public function Nome_da_instituicao($id) {
        $this->db->select("ins.nome as nome_instituicao");
        $this->db->from("instituicoes ins");
        $this->db->where("ins.id = ",$id);
        $query = $this->db->get();
        return $query->result();
     }
    
    public function pesquisa($nome) { 
        $this->db->select("cur.*");
        $this->db->from("cursos cur");
        $this->db->where("cur.nome_curso like '".$nome."%' "
                . "or cur.titulo like '".$nome."%' "
                . "or cur.atribuicoes like '".$nome."%'");
        $query = $this->db->get();
        return is_object($query)?$query->result():array();
    }
    
    public function pesquisains($nome) { 
        $this->db->select("ins.*");
        $this->db->from("instituicoes ins");
        $this->db->join("cursos cur","cur.instituicao_id = ins.id", "left");
        $this->db->join("titulosconfea ti","ti.id = cur.titulosconfea_id", "left");
        $this->db->join("cursosconfea","cursosconfea.id = cur.cursosconfea_id", "left");
        $this->db->where("ins.nome like '".$nome."%' "
                . "or ins.cidade like '".$nome."%' "
                . "or cursosconfea.nome like '".$nome."%' "
                . "or ti.nome like '".$nome."%' "
                . "or cur.nome_cursol like '".$nome."%'");
        $query = $this->db->get();
        return is_object($query)?$query->result():array();
    }
    
}