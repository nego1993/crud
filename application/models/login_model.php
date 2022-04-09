<?php

Class Login_model extends CI_Model
{
    function recuperarlogin($usuario, $senha)
    {
        $sql = "SELECT * FROM usuario_master WHERE senha AND usuario ";
        $data = array($senha, $usuario);
        return $this->db->query($sql, $data)->result();

   
    }
} 