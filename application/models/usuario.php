<?php

class Usuario extends CI_Model {

    public function index()
    {
        return $this->db->get("colaborador")->result_array();
    }
}