<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Category_model');
		$this->load->model('Product_model');
		$this->load->model('Provider_m');
	}

	public function index()
	{
		$this->load->view('guest/head');
		$this->load->view('guest/header');
		$this->load->view('guest/home');
		$this->load->view('guest/footer');
	}
	public function add_product()
	{
		$this->load->model('filed_product');
		$data['category'] = $this->Category_model->getCategory();
		$data['chart'] = $this->filed_product->getChart();		
		$data['filed'] = $this->filed_product->getFiled();
		$data['supplier'] = $this->Provider_m->getPovider();
		$this->load->view('guest/head');
		$this->load->view('guest/header');
		$this->load->view('guest/add_product',$data);
		$this->load->view('guest/footer');
	}
	function saveProduct()
	{
		$this->Product_model->insertcode();
		$this->Product_model->insertCategory();
		$this->Product_model->insertProduct();
		$this->Product_model->insertPrice();
		$this->Product_model->insertChart();
		$this->Product_model->insertBullet();
		$this->Product_model->insertproviderProduct();
		$this->Product_model->insertKeyword();
		

	}
	public function updateProduct()
	{
		$this->load->view('guest/head');
		$this->load->view('guest/header');
		$this->load->view('guest/updateProduct');
		$this->load->view('guest/footer');
	}

	function consultAjaxPoduct(){
		$sql = $this->Product_model->consultFilter();
		if ($sql > 0) {
			echo json_encode($sql);
		}else{
			return FALSE;
		}
	}

	function insertFiled()
	{
		$this->load->model('filed_product');
		$sql = $this->filed_product->insertFiled();
		if ($sql = TRUE) {
			echo "Todo fue un exito";
			redirect(base_url('index.php/home/add_product'),'refresh');
		}else{
			echo "hemos tenido un error";
		}
	}
	function insertChart()
	{
		$this->load->model('filed_product');
		$sql = $this->filed_product->insertChart();
		if ($sql = TRUE) {
			echo "Todo fue un exito";
			redirect(base_url('index.php/home/add_product'),'refresh');
		}else{
			echo "hemos tenido un error";
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */