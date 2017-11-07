<?php

class M_instituicoes extends CI_Model {

    public function salvar($data) {
        if (isset($data['$$hashKey'])) {
            unset($data['$$hashKey']);
        }
        if(isset($data['arquivos'])){
            $files = $data['arquivos'];
            unset($data['arquivos']);
        }
        unset($data['arquivos']);
        if (isset($data['id'])) {
            
            $this->db->where('id', $data['id']);
            $data['alterado_por'] = $_SESSION['logado']->login;
            
            //Atribui ao array log a data e hora atual, os dados antes da 
            //alteração, os dados após e o usuário atual da sessão.            
            
            $log = array("data" => date("Y-m-d H:i:s"),
                "operacao" => "alterou instituicao ".json_encode($data),
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
            $result = $this->db->update('instituicoes', $data);
            
            //Registra o array log na tabela log.
            $result = $this->db->insert('log', $log);
            
        }else{
            $data['alterado_por'] = $_SESSION['logado']->login;
            $data['criado_por'] = $_SESSION['logado']->login;
            $result = $this->db->insert('instituicoes', $data);
            $data['id'] = $this->db->insert_id();
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
            
            $log = array("data" => date("Y-m-d H:i:s") , "operacao" => "criou instituicao " . json_encode($data), "criado_por" => $_SESSION['logado']->login);
            $result = $this->db->insert('log', $log);
            
        }
        $id = $data['id'];
        return array('result' => $result, 'message' => $result ? 'Registro gravado' : 'Erro ao gravar o registro', 'error' => $this->db->_error_message(), 'id' => $id);
    }

    public function excluir($id) {
        $log = array("data" => date("Y-m-d H:i:s") ,
                "operacao" => "excluiu instituicao " .
                json_encode($this->carregar($id)),
                "criado_por" => $_SESSION['logado']->login);
        $result = $this->db->insert('log', $log);
        $this->db->where('id', $id);
        $result = $this->db->delete('instituicoes');
        return array('result' => $result, 'message' => $result ? 'Registro excluído' : 'Erro ao excluir o registro', 'error' => $this->db->_error_message());
    }

    public function total() {
        $this->db->select('count(id) as total');
        $this->db->from('instituicoes');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function totalcursos() {
        $this->db->select('count(id) as totalcursos');
        $this->db->from('cursos');
        $query = $this->db->get();
        return $query->result();
    }

    public function lista($limite, $inicio, $coluna, $ordem) { 
        $this->db->select("ins.*, COUNT(instituicao_id) as totalcursos");
        $this->db->from("instituicoes ins");
        $this->db->join("cursos cur","ins.id = cur.instituicao_id", "left");
        $this->db->limit($limite, $inicio);
        $this->db->group_by("ins.id");
        $this->db->order_by($ordem, $coluna);
        $query = $this->db->get();
        return is_object($query)?$query->result():array();
    }
    
    public function lista_por_curso($limite, $inicio, $coluna, $ordem) { 
        $this->db->select("ins.nome as nomeins, cur.id, cur.nivel,"
                . " cursosconfea.nome, ins.cidade, cur.nomecursol, cur.data_rec_mec");
        $this->db->from("cursos cur");
        $this->db->join("instituicoes ins","ins.id = cur.instituicao_id", "left");
        $this->db->join("cursosconfea","cursosconfea.id = cur.cursosconfea_id", "left");
        $this->db->limit($limite, $inicio);
        $this->db->order_by($ordem, $coluna);
        $query = $this->db->get();
        return is_object($query)?$query->result():array();
    }

    public function carregar($id) { 
        $this->db->select("ins.*");
        $this->db->from("instituicoes ins");
        $this->db->where("ins.id = ",$id);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function carregar_curso($id) { 
        $this->db->select("cur.*");
        $this->db->from("cursos cur");
        $this->db->where("cur.id = ",$id);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function pesquisa($nome) { 
        $this->db->select("id, nome");
        $this->db->from("instituicoes ins");
        $this->db->where("ins.nome like '%".$nome."%' "
                . "or ins.rni like '%".$nome."%' "
                . "or ins.cnpj like '%".$nome."%' "
                . "or ins.nome_abreviado like '%".$nome."%' "
                . "or ins.cidade like '%".$nome."%' ORDER BY nome ASC");
        $query = $this->db->get();
        return is_object($query)?$query->result():array();
    }
    
    public function pesquisa_curso($nome) { 
        $this->db->select("cursosconfea.nome, cursosconfea.id");
        $this->db->from("cursos");
        $this->db->join("cursosconfea","cursos.cursosconfea_id = cursosconfea.id", "left");
        $this->db->join("instituicoes","cursos.instituicao_id = instituicoes.id", "left");
        $this->db->where("cursosconfea.nome like '%".$nome."%'");
        $this->db->group_by("id");
        $this->db->order_by("nome");
        $query = $this->db->get();
        return is_object($query)?$query->result():array();
    }
    
    public function getNivel() {
        $arr["S"] = "SUPERIOR";
        $arr["M"] = "MÉDIO";
        $arr["H"] = "HÍBRIDO";
        return $arr;
    }
    
    public function lista_cursos_por_cursosconfea($id) {
        $this->db->select("ti.titulo, cursosconfea.nome, cursos.nomecursol, "
                . "cursos.id as cursoid, ins.nome as nomeins, ins.cidade, cursos.nivel");
        $this->db->from("cursosconfea");
        $this->db->join("cursos","cursos.cursosconfea_id = cursosconfea.id", "left");
        $this->db->join("titulosconfea ti","ti.id = cursos.titulosconfea_id", "left");
        $this->db->join("instituicoes ins","ins.id = cursos.instituicao_id", "left");
        $this->db->where("cursosconfea.id = ", $id);
        $query = $this->db->get();
        return is_object($query)?$query->result():array();
     }
     
     public function graf_cursosconfea_cursos() {
        $this->db->select("cf.nome as name, COUNT(cur.cursosconfea_id) as y");
        $this->db->from("cursosconfea cf");
        $this->db->join("cursos cur","cur.cursosconfea_id = cf.id", "left");
        $this->db->having("y > 0");
        $this->db->order_by("y", "DESC");
        $this->db->limit("10, 0");
        $this->db->group_by("name");
        $query = $this->db->get();
        return is_object($query)?$query->result():array();
     }

}