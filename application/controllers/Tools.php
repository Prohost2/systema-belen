<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tools extends CI_Controller {

	public function index()
	{
		$data['title'] = "Tools";
		$this->load->view('guest/head');
		$this->load->view('guest/header');
		$this->load->view('Tools/home');
		$this->load->view('guest/footer');				
	}

}

/* End of file Tools.php */
/* Location: ./application/controllers/Tools.php */