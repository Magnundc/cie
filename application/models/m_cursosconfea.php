<?php

class M_cursosconfea extends CI_Model {

    public function salvar($data) {
        if (isset($data['$$hashKey'])) {
            unset($data['$$hashKey']);
        }
        if (isset($data['id'])) {
            $this->db->where('id', $data['id']);
            $result = $this->db->update('cursosconfea', $data);
        }else{
            $result = $this->db->insert('cursosconfea', $data);
        }
        return array('result' => $result, 'message' => $result ? 'Registro gravado' : 'Erro ao gravar o registro', 'error' => $this->db->_error_message());
    }

    public function excluir($id) {
        $this->db->where('id', $id);
        $result = $this->db->delete('cursosconfea');
        return array('result' => $result, 'message' => $result ? 'Registro excluído' : 'Erro ao excluir o registro', 'error' => $this->db->_error_message());
    }

    public function total() {
        $this->db->select('count(id) as total');
        $this->db->from('cursosconfea');
        $query = $this->db->get();
        return $query->result();
    }

    public function lista($limite, $inicio, $coluna, $ordem) { 
        $this->db->select("cu.*");
        $this->db->from("cursosconfea cu");
        $this->db->limit($limite, $inicio);
        $this->db->order_by($ordem, $coluna);
        $query = $this->db->get();
        return is_object($query)?$query->result():array();
    }

    public function carregar($id) { 
        $this->db->select("cu.*");
        $this->db->from("cursosconfea cu");
        $this->db->where("cu.id = ",$id);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function pesquisa($termo) {
        $this->db->select("id, nome");
        $this->db->from("cursosconfea");
        $this->db->where("cursosconfea.nome like '%$termo%' ORDER BY nome ASC");
        $query = $this->db->get();
        return is_object($query)?$query->result():array();
    }

}