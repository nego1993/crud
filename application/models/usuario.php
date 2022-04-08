<?php

 class Usuario extends CI_Model {

    //Só pra lembrar, tu ta usando ORM, e não a query
    public function index()
    {

        return $this->db->get("usuario")->result_array();
    }

    public function dados_colaborador($usuario)
    {
        /*
          A QUERY COMPLETA PARA REALIZAR ESTA OPERAÇÃO
          INSERT INTO `usuario`('nome', 'usuario', 'email', 'endereco', 'cpf', 'tipo', 'senha')
          VALUES (?, ?, ?, ?, ?, ?, ?)
         */
        $this->db->insert("usuario", $usuario);
    }

    public function mostrar($id)
    {
        return $this->db->get_where("usuario", array(
            "id" => $id
        ))->row_array();
    }

    public function update($id, $usuario)
    {
        $this->db->where("id", $id);

        return $this->db->update("usuario", $usuario);
        
    }

}