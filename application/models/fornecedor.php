<?php

class Fornecedor extends CI_Model {

    public function index()
    {
        return $this->db->get("fornecedor")->result_array();
    }
}