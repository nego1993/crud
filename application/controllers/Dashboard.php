<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->model("usuario");
		$dados["usuario"] = $this->usuario->index();
		$dados["title"] = 'Dashboard - Manyminds';
		$this->load->view('pages/dashboard', $dados);
	}
}
