<?php

class M_arquivos extends CI_Model {

    public function salvar($data) {
        if (isset($data['$$hashKey'])) {
            unset($data['$$hashKey']);
        }
        if (isset($data['id'])) {
            $this->db->where('id', $data['id']);
            $result = $this->db->update('arquivos', $data);
        }else{
            $result = $this->db->insert('arquivos', $data);
        }
        return array('result' => $result, 'message' => $result ? 'Registro gravado' : 'Erro ao gravar o registro', 'error' => $this->db->_error_message());
    }

    public function excluir($id) {
        $this->db->where('md5_nome', $id);
        $result = $this->db->delete('arquivos');
        return array('result' => $result, 'message' => $result ? 'Registro excluído' : 'Erro ao excluir o registro', 'error' => $this->db->_error_message());
    }

    public function total() {
        $this->db->select('count(id) as total');
        $this->db->from('arquivos');
        $query = $this->db->get();
        return $query->result();
    }

    public function lista($limite, $inicio, $coluna, $ordem) { 
        $this->db->select("ar.*");
        $this->db->from("arquivos ar");
        $this->db->limit($limite, $inicio);
        $this->db->order_by($ordem, $coluna);
        $query = $this->db->get();
        return is_object($query)?$query->result():array();
    }
    
    public function listar_arquivos($id) {
        $this->db->select("arq.*");
        $this->db->from("arquivos arq");
        $this->db->where("arq.objeto_id",$id);
        $query = $this->db->get();        
        return is_object($query)?$query->result():array();
    }

    public function carregar($id) { 
        $this->db->select("ar.*");
        $this->db->from("arquivos ar");
        $this->db->where("ar.id = ",$id);
        $query = $this->db->get();
        return $query->result();
    }
}