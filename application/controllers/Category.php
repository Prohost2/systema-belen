<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Category_model');
	}

	public function index()
	{
		$this->load->view('guest/head');
		$this->load->view('guest/header');
		$data['category'] = $this->Category_model->getCategory();
		$this->load->view('category/home',$data);	
		$this->load->view('guest/footer');	
	}
	public function formaddCategory()
	{
		$data['category'] = $this->Category_model->getTypeCategory();
		$this->load->view('guest/head');
		$this->load->view('guest/header');
		$this->load->view('category/addCategory',$data);	
		$this->load->view('guest/footer');	
	}
	public function formupdateCategory($id)
	{
		$data['category'] = $this->Category_model->simpleTypeCategory($id);
		$this->load->view('guest/head');
		$this->load->view('guest/header');
		$this->load->view('category/updateCategory',$data);	
		$this->load->view('guest/footer');	
	}
	public function addCategory()
	{

		$sql = $this->Category_model->insertCategory();
		if ($sql = TRUE) {
			return TRUE;
			redirect(base_url('index.php/Category'),'refresh');
		}else{
			return FALSE;
			redirect(base_url('index.php/Category/addCategory'),'refresh');
		}
	}
	public function updateCategory($id)
	{

		$sql = $this->Category_model->updateCategory($id);
		if ($sql = TRUE) {
			return TRUE;
			redirect(base_url('index.php/Category'),'refresh');
		}else{
			return FALSE;
			redirect(base_url('index.php/Category/addCategory'),'refresh');
		}
	}

}

/* End of file Category.php */
/* Location: ./application/controllers/Category.php */