<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	public function index()
	{
		$this->load->view('guest/head');
		$this->load->view('guest/header');
		$this->load->view('Showcase/home');	
		$this->load->view('guest/footer');				
	}

}

/* End of file Shop.php */
/* Location: ./application/controllers/Shop.php */