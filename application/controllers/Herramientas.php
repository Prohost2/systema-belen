<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Herramientas extends CI_Controller {

	public function index()
	{
		$this->load->view('guest/head');
		$this->load->view('guest/header');
		$this->load->view('guest/header_product');
		$this->load->view('he/home');
		$this->load->view('guest/footer');		
	}

}

/* End of file Herramientas.php */
/* Location: ./application/controllers/Herramientas.php */