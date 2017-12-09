<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OrderShop extends CI_Controller {

	public function index()
	{
		$this->load->view('guest/head');
		$this->load->view('guest/header');
		$this->load->view('shop/index');
		$this->load->view('guest/footer');
	}

}

/* End of file orderShop.php */
/* Location: ./application/controllers/orderShop.php */