<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Provider extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Provider_m');
	}

	public function index()
	{
		$data['supplier'] = $this->Provider_m->getPovider();
		$this->load->view('guest/head');
		$this->load->view('guest/header');
		$this->load->view('provider/home',$data);	
		$this->load->view('guest/footer');
	
	}
	public function addProvider()
	{
		$data['terms'] = $this->Provider_m->getTerms();
		$this->load->view('guest/head');
		$this->load->view('guest/header');
		$this->load->view('provider/addSupplier',$data);	
		$this->load->view('guest/footer');
	}
	public function updateProvider($id)
	{
		$data['terms'] = $this->Provider_m->getTerms();
		$data['provider'] = $this->Provider_m->singlePovider($id);
		$this->load->view('guest/head');
		$this->load->view('guest/header');
		$this->load->view('provider/updateSupplier',$data);	
		$this->load->view('guest/footer');
	}
	function saveProvider()
	{
		$sql = $this->Provider_m->insertProvider();
			
			if ($sql) {
				redirect(base_url('index.php/Provider'),'refresh');
			}else{
				redirect(base_url('index.php/Provider/addProvider'),'refresh');
			}
	}
	function updateProviderdata($id)
	{
		$sql = $this->Provider_m->updateProvider($id);
			
			if ($sql) {
				redirect(base_url('index.php/Provider'),'refresh');
			}else{
				redirect(base_url('index.php/Provider/addProvider'),'refresh');
			}
	}

}

/* End of file Provider.php */
/* Location: ./application/controllers/Provider.php */