<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user');
	}

	public function index()
	{

		$data['title'] = "Bienvenido a System Admin";
		$this->load->view('guest/head',$data);
		$this->load->view('front/login');
		$this->load->view('guest/footer');
					
	}
	public function signIn()
		{

			$user = $this->input->post('user');
			$password = $this->input->post('password');
			$fila = $this->user->login();
				if ($fila != null) {
					foreach ($fila->result() as $row) {
						if ($row->password = $password) {
							$dato = array(
								'email'   => $row->first_name,
								'id'	   => $row->id_user,
								'nombre'   => $row->email,
        						'logged_in' => TRUE
								);
							$this->session->set_userdata($dato);
							redirect(base_url(),'refresh');
						}
					}
				} else {
					echo "<script>alert('Alguno de los datos ingresado son incorrectos')<script>";
					return false;
				}
		}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */