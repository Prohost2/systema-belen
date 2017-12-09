<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filed_product extends CI_Model {

	function insertFiled()
	{
		$data = array(
			'filed_name' => $this->input->post('filed_name'),
			'filed_type' => $this->input->post('filed_type') 
		);
		$this->db->insert('codeproduct', $data);
	}
	function getFiled()
	{
		$sql = $this->db->get('codeproduct');
		if ($sql->num_rows() > 0) {
			return $sql;
		}else{
			return FALSE;
		}
	}	

	function insertChart()
	{
		$data = array(
			'name_chart' => $this->input->post('filed_name'),
			'type_chart' => $this->input->post('filed_type') 
		);
		$sql = $this->db->insert('chart', $data);
	}
	function getChart()
	{
		$sql = $this->db->get('chart');
		if ($sql->num_rows() > 0) {
			return $sql;
		}else{
			return FALSE;
		}
	}		
}

/* End of file filed_product.php */
/* Location: ./application/models/filed_product.php */