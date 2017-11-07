<?php

class M_colaboradores extends CI_Model {

    public function salvar($data) {
        if (isset($data['$$hashKey'])) {
            unset($data['$$hashKey']);
        }
        if (isset($data['id'])) {
            $this->db->where('id', $data['id']);
            $result = $this->db->update('colaboradores', $data);
        }else{
            $result = $this->db->insert('colaboradores', $data);
        }
        return array('result' => $result, 'message' => $result ? 'Registro gravado' : 'Erro ao gravar o registro', 'error' => $this->db->_error_message());
    }

    public function excluir($id) {
        $this->db->where('id', $id);
        $result = $this->db->delete('colaboradores');
        return array('result' => $result, 'message' => $result ? 'Registro excluído' : 'Erro ao excluir o registro', 'error' => $this->db->_error_message());
    }

    public function total() {
        $this->db->select('count(id) as total');
        $this->db->from('colaboradores');
        $query = $this->db->get();
        return $query->result();
    }

    public function lista($limite, $inicio, $coluna, $ordem) { 
        $this->db->select("co.*");
        $this->db->from("colaboradores co");
        $this->db->limit($limite, $inicio);
        $this->db->order_by("login","ASC", $coluna);
        $query = $this->db->get();
        return is_object($query)?$query->result():array();
    }

    public function carregar($id) { 
        $this->db->select("co.*");
        $this->db->from("colaboradores co");
        $this->db->where("co.id = ",$id);
        $query = $this->db->get();
        return $query->result();
    }
  
    public function checar($login) {  
        $this->db->select("co.*"); 
        $this->db->from("colaboradores co"); 
        $this->db->where("co.login = '{$login}'"); 
        $query = $this->db->get();         
        return $query->row(); 
    } 
     
    public function getAdmin() { 
        $this->db->select("co.*"); 
        $this->db->from("colaboradores co"); 
        $this->db->where("co.admin = 1"); 
        $query = $this->db->get(); 
        return $query->result(); 
    }
    
    public function getMaster() { 
        $this->db->select("co.*"); 
        $this->db->from("colaboradores co"); 
        $this->db->where("co.admin = 1"); 
        $query = $this->db->get(); 
        return $query->result(); 
    }
    
    public function getLista_egresso() { 
        $this->db->select("co.*"); 
        $this->db->from("colaboradores co"); 
        $this->db->where("co.admin = 1"); 
        $query = $this->db->get(); 
        return $query->result(); 
    }
    
    public function pesquisa($nome) { 
        $this->db->select("co.*");
        $this->db->from("colaboradores co");
        $this->db->where("co.login like '".$nome."%' "
                . "or co.matricula like '".$nome."%' "
                . "or co.email like '".$nome."%'");
        $query = $this->db->get();
        return is_object($query)?$query->result():array();
    }


}