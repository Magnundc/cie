<?php

class M_recadastramentos extends CI_Model {

    public function salvar($data) {
        unset($data['nome_instituicao']);
        if (isset($data['$$hashKey'])) {
            unset($data['$$hashKey']);
        }
        if(isset($data['arquivos'])){
            $files = $data['arquivos'];
            unset($data['arquivos']);
        }
        if (isset($data['id'])) {
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
            $result = $this->db->update('recadastramentos', $data);
        }else{
            $result = $this->db->insert('recadastramentos', $data);
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
        }
        $id = $data['id'];
        return array('result' => $result, 'message' => $result ? 'Registro gravado' : 'Erro ao gravar o registro', 'error' => $this->db->_error_message(), 'id' => $id);
    }

    public function excluir($id) {
        $this->db->where('id', $id);
        $result = $this->db->delete('recadastramentos');
        return array('result' => $result, 'message' => $result ? 'Registro excluído' : 'Erro ao excluir o registro', 'error' => $this->db->_error_message());
    }

    public function total() {
        $this->db->select('count(id) as total');
        $this->db->from('recadastramentos');
        $query = $this->db->get();
        return $query->result();
    }

    public function lista($limite, $inicio, $coluna, $ordem) { 
        $this->db->select("re.*");
        $this->db->from("recadastramentos re");
        $this->db->join("instituicoes ins","ins.id = re.instituicao_id", "left");
        $this->db->limit($limite, $inicio);
        $this->db->order_by($ordem, $coluna);
        $query = $this->db->get();
        return is_object($query)?$query->result():array();
    }

    public function carregar($id) { 
        $this->db->select("re.*");
        $this->db->from("recadastramentos re");
        $this->db->join("instituicoes ins","ins.id = re.instituicao_id", "left");
        $this->db->where("re.id = ",$id);
        $query = $this->db->get();
        return $query->result();
    }
    
     public function lista_da_instituicao($id) {
        $this->db->select("re.*");
        $this->db->from("recadastramentos re");
        $this->db->join("instituicoes ins","ins.id = re.instituicao_id", "left");
        $this->db->where("re.instituicao_id = ", $id);
        $query = $this->db->get();
        return is_object($query)?$query->result():array();
     }
     
     public function Ver_nome_instituicao($id) {
        $this->db->select("ins.nome as nome_instituicao");
        $this->db->from("instituicoes ins");
        $this->db->where("ins.id = ",$id);
        $query = $this->db->get();
        return $query->result();
     }

}