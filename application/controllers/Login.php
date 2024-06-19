<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


		public function index()
		{			
			$dados["title"] = 'Entrar - Manyminds';
			$this->load->view('pages/login', $dados);
			
		}

		public function store()
		{

			$this->load->model("login_model");
			
			$senha = $this->input->post("senha");
			$usuario = $this->input->post("usuario");

			$this->load->model("login_model");
			$user = $this->login_model->recuperarlogin($senha, $usuario);
		
			

			if ($user) {
			return $this->session->set_userdata("usuario", $user);
				redirect("dashboard");
			}else{
				redirect("login");
			}
			
		}
 
				
	}
	


