<?php

class M_diplomasnaoreconhecidos extends CI_Model {

    public function salvar($data) {
        if (isset($data['$$hashKey'])) {
            unset($data['$$hashKey']);
        }
        if (isset($data['id'])) {
            $this->db->where('id', $data['id']);
            $result = $this->db->update('diplomasnaoreconhecidos', $data);
        }else{
            $result = $this->db->insert('diplomasnaoreconhecidos', $data);
        }
        return array('result' => $result, 'message' => $result ? 'Registro gravado' : 'Erro ao gravar o registro', 'error' => $this->db->_error_message());
    }

    public function excluir($id) {
        $this->db->where('id', $id);
        $result = $this->db->delete('diplomasnaoreconhecidos');
        return array('result' => $result, 'message' => $result ? 'Registro excluído' : 'Erro ao excluir o registro', 'error' => $this->db->_error_message());
    }

    public function total() {
        $this->db->select('count(id) as total');
        $this->db->from('diplomasnaoreconhecidos');
        $query = $this->db->get();
        return $query->result();
    }

    public function lista($limite, $inicio, $coluna, $ordem) { 
        $this->db->select("di.*");
        $this->db->from("diplomasnaoreconhecidos di");
        $this->db->join("cursos cu","cu.id = di.curso", "left");
        $this->db->join("arquivos ar","ar.id = di.arquivos_id", "left");
        $this->db->limit($limite, $inicio);
        $this->db->order_by($ordem, $coluna);
        $query = $this->db->get();
        return is_object($query)?$query->result():array();
    }

    public function carregar($id) { 
        $this->db->select("di.*");
        $this->db->from("diplomasnaoreconhecidos di");
        $this->db->join("cursos cu","cu.id = di.curso", "left");
        $this->db->join("arquivos ar","ar.id = di.arquivos_id", "left");
        $this->db->where("di.id = ",$id);
        $query = $this->db->get();
        return $query->result();
    }

}