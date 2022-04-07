<?php

class Usuario extends CI_Model {

    public function index()
    {
        return $this->db->get("colaborador")->result_array();
    }

    public function dados_colaborador($usuario)
    {
        $this->db->insert("colaborador", $usuario);
    }

    public function mostrar($id)
    {
        return $this->db->get_where("colaborador", array(
            "id" => $id
        ))->row_array();
    }

    public function update($id, $usuario)
    {
        $this->db->where("id", $id);

        return $this->db->update("colaborador", $usuario);
    }

    public function deletar($id)
    {
        return TRUE;
    }

}
