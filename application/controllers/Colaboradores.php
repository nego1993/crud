<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Colaboradores extends CI_Controller {

		public function index()
		{
			$this->load->model("usuario");
			$dados["colaboradores"] = $this->usuario->index();
			$dados["title"] = 'Colaboradores - Manyminds';

            $this->load->view('templates/header', $dados);
            $this->load->view('templates/nav-top', $dados);
           // $this->load->view('templates/footer', $dados);
            //$this->load->view('templates/js', $dados);
			$this->load->view('pages/colaboradores', $dados);

		}
		
	}
	


