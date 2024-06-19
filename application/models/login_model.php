<?php

Class Login_model extends CI_Model
{
    function recuperarlogin($usuario, $senha)
    {
        $sql = "SELECT usuario, senha FROM usuario";
        $data = array($senha, $usuario);
        $this->db->query($sql, $data)->result();

   
    }
} 