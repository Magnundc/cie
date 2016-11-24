<?php

class M_contatos extends CI_Model {

    public function salvar($data) {
        if (isset($data['$$hashKey'])) {
            unset($data['$$hashKey']);
        }
        if (isset($data['id'])) {
            $this->db->where('id', $data['id']);
            $result = $this->db->update('contatos', $data);
        }else{
            $result = $this->db->insert('contatos', $data);
        }
        return array('result' => $result, 'message' => $result ? 'Registro gravado' : 'Erro ao gravar o registro', 'error' => $this->db->_error_message());
    }

    public function excluir($id) {
        $this->db->where('id', $id);
        $result = $this->db->delete('contatos');
        return array('result' => $result, 'message' => $result ? 'Registro excluído' : 'Erro ao excluir o registro', 'error' => $this->db->_error_message());
    }

    public function total() {
        $this->db->select('count(id) as total');
        $this->db->from('contatos');
        $query = $this->db->get();
        return $query->result();
    }

    public function lista($limite, $inicio, $coluna, $ordem) { 
        $this->db->select("co.*");
        $this->db->from("contatos co");
        $this->db->join("instituicoes ins","ins.id = co.instituicoes_id", "left");
        $this->db->limit($limite, $inicio);
        $this->db->order_by($ordem, $coluna);
        $query = $this->db->get();
        return is_object($query)?$query->result():array();
    }

    public function carregar($id) { 
        $this->db->select("co.*");
        $this->db->from("contatos co");
        $this->db->join("instituicoes in","in.id = co.instituicoes_id", "left");
        $this->db->where("co.id = ",$id);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function pesquisa($nome) { 
        $this->db->select("co.*");
        $this->db->from("contatos co");
        $this->db->where("co.nome like '".$nome."%' ");
        $query = $this->db->get();
        return is_object($query)?$query->result():array();
    }

}