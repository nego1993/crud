<?php

class Produtos extends CI_Model {

    public function index()
    {
        return $this->db->get("produtos")->result_array();
    }
}