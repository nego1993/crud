<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Colaborador extends CI_Controller {

	public function index()
	{
		$this->load->model("usuario");
		$dados["usuario"] = $this->usuario->index();
		$dados["title"] = 'Colaborador - Manyminds';

		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/colaborador_view', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);

	}

	public function adicionar()
	{
		$dados["title"] = 'Colaborador - Manyminds';

		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/form-colaborador_view', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);

	}

	public function dados_colaborador()
	{
		$usuario = $_POST;
		$this->load->model("usuario");
		$this->usuario->dados_colaborador($usuario);

		redirect("colaborador");	
	}
}
