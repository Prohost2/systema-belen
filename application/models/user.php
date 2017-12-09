<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	public function login()
		{
			$query = $this->db->select('user,password,first_name,last_name,email')->where('user',$this->input->post('user'))->where('password',$this->input->post('password'))->get('user');
			if ($query->num_rows() > 0) {
				return $query;
			}else{
				return FALSE;
			}
		}	

}

/* End of file user.php */
/* Location: ./application/models/user.php */