<?php

class M_listasegresso extends CI_Model {

    public function salvar($data) {
        if (isset($data['$$hashKey'])) {
            unset($data['$$hashKey']);
        }
        if (isset($data['id'])) {
            $this->db->where('id', $data['id']);
            $result = $this->db->update('listasegresso', $data);
        }else{
            $result = $this->db->insert('listasegresso', $data);
        }
        return array('result' => $result, 'message' => $result ? 'Registro gravado' : 'Erro ao gravar o registro', 'error' => $this->db->_error_message());
    }

    public function excluir($id) {
        $this->db->where('id', $id);
        $result = $this->db->delete('listasegresso');
        return array('result' => $result, 'message' => $result ? 'Registro excluído' : 'Erro ao excluir o registro', 'error' => $this->db->_error_message());
    }

    public function total() {
        $this->db->select('count(id) as total');
        $this->db->from('listasegresso');
        $query = $this->db->get();
        return $query->result();
    }

    public function lista($limite, $inicio, $coluna, $ordem) { 
        $this->db->select("li.*");
        $this->db->from("listasegresso li");
        $this->db->join("cursos cu","cu.id = li.cursos_id", "left");
        $this->db->join("arquivos ar","ar.id = li.arquivos_id", "left");
        $this->db->limit($limite, $inicio);
        $this->db->order_by($ordem, $coluna);
        $query = $this->db->get();
        return is_object($query)?$query->result():array();
    }

    public function carregar($id) { 
        $this->db->select("li.*");
        $this->db->from("listasegresso li");
        $this->db->join("cursos cu","cu.id = li.cursos_id", "left");
        $this->db->where("li.id = ", $id);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function lista_listasegresso($id) {
        $this->db->select("li.*");
        $this->db->from("listasegresso li");
        $this->db->join("cursos cu","cu.id = li.cursos_id", "left");
        $this->db->where("li.cursos_id = ", $id);
        $query = $this->db->get();
        return is_object($query)?$query->result():array();
    }
    
    public function Nome_da_instituicao($id) {
        $this->db->select("ins.nome as nome_instituicao");
        $this->db->from("instituicoes ins");
        $this->db->join("cursos","cursos.instituicao_id = ins.id", "left");
        $this->db->join("listasegresso","listasegresso.cursos_id = cursos.id", "left");
        $this->db->where("listasegresso.cursos_id = ",$id);
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