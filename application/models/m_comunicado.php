<?php

class M_comunicado extends CI_Model {

    public function salvar($data) {
        if (isset($data['$$hashKey'])) {
            unset($data['$$hashKey']);
        }
        if (isset($data['id'])) {
            $this->db->where('id', $data['id']);
            $result = $this->db->update('comunicado', $data);
        }else{
            $result = $this->db->insert('comunicado', $data);
        }
        return array('result' => $result, 'message' => $result ? 'Registro gravado' : 'Erro ao gravar o registro', 'error' => $this->db->_error_message());
    }

    public function excluir($id) {
        $this->db->where('id', $id);
        $result = $this->db->delete('comunicado');
        return array('result' => $result, 'message' => $result ? 'Registro excluído' : 'Erro ao excluir o registro', 'error' => $this->db->_error_message());
    }

    public function total() {
        $this->db->select('count(id) as total');
        $this->db->from('comunicado');
        $query = $this->db->get();
        return $query->result();
    }

    public function lista($limite, $inicio, $coluna, $ordem) { 
        $this->db->select("co.*");
        $this->db->from("comunicado co");
        $this->db->join("diplomasnaoreconhecidosgo di","di.id = co.diplomasnaoreconhecidosgo_id", "left");
        $this->db->limit($limite, $inicio);
        $this->db->order_by($ordem, $coluna);
        $query = $this->db->get();
        return is_object($query)?$query->result():array();
    }

    public function carregar($id) { 
        $this->db->select("co.*");
        $this->db->from("comunicado co");
        $this->db->join("diplomasnaoreconhecidosgo di","di.id = co.diplomasnaoreconhecidosgo_id", "left");
        $this->db->where("co.id = ",$id);
        $query = $this->db->get();
        return $query->result();
    }

}