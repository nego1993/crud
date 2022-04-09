<?php

 class Produto extends CI_Model {

    public function index()
    {

        return $this->db->get("produtos")->result_array();
    }

    public function dados_produto($produtos)
    {
        /*
          A QUERY COMPLETA PARA REALIZAR ESTA OPERAÇÃO
          INSERT INTO `usuario`('nome', 'descricao', 'preco')
          VALUES (?, ?, ?)
         */
        $this->db->insert("produtos", $produtos);
    }

    public function mostrar($id)
    {
        return $this->db->get_where("produtos", array(
            "id" => $id
        ))->row_array();
    }

    public function update($id, $produtos)
    {
        $this->db->where("id", $id);

        return $this->db->update("produtos", $produtos);
        
    }
}