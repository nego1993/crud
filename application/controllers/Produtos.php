<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {


		public function index()
		{
			$this->load->model("produto");
			$dados["produtos"] = $this->produto->index();
			$dados["title"] = 'Produtos - Manyminds';
			
			$this->load->view('templates/header', $dados);
			$this->load->view('templates/nav-top', $dados);
			$this->load->view('pages/produtos_view', $dados);
			$this->load->view('templates/footer', $dados);
			$this->load->view('templates/js', $dados);

		}

		public function adicionar()
		{
			$dados["title"] = 'Adicionar produtos - Manyminds';
	
			$this->load->view('templates/header', $dados);
			$this->load->view('templates/nav-top', $dados);
			$this->load->view('pages/form-produtos-view', $dados);
			$this->load->view('templates/footer', $dados);
			$this->load->view('templates/js', $dados);
	
		}
		public function dados_produto()
		{
			$produtos = $_POST;
			$this->load->model("produto");
			$this->produto->dados_produto($produtos);
	
			redirect("produtos");	
		}
	
		public function editar($id)
		{
			permissao();
			$this->load->model("produto");
			$dados["produtos"] = $this->produto->mostrar($id);
			$dados["title"] = "Editar produtos";
	
			$this->load->view('templates/header', $dados);
			$this->load->view('templates/nav-top', $dados);
			$this->load->view('pages/form-produtos-view', $dados);
			$this->load->view('templates/footer', $dados);
			$this->load->view('templates/js', $dados);
	
		}
	
		public function update($id) 
		{
			$this->load->model("produto");
			$produtos = $_POST;
			$this->produto->update($id, $produtos);
		
	
			redirect("produtos");
		}
		
	}
	


