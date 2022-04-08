<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Colaborador extends CI_Controller {

	public function index()
	{
		$this->load->model("usuario");
		$dados["usuario"] = $this->usuario->index();
		$dados["title"] = 'Colaborador/Fornecedor - Manyminds';

		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/colaborador_view', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);

	}

	public function adicionar()
	{
		$dados["title"] = 'Adicionar colaborador - Manyminds';

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

	public function editar($id)
	{
		$this->load->model("usuario");
		$dados["usuario"] = $this->usuario->mostrar($id);
		$dados["title"] = "Editar colaborador";

		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/form-colaborador_view', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);

	}

	public function update($id) 
	{
		$this->load->model("usuario");
		$usuario = $_POST;
		$this->usuario->update($id, $usuario);
	

		redirect("colaborador");
	}

}