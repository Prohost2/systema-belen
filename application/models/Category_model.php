<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model{


	function getCategory()
	{
		$sql = $this->db->where('fk_type_category = id_type_category')->get('category,type_category');
		return $sql;
	}
	function getTypeCategory()
	{
		$sql = $this->db->get('type_category');
		return $sql;
	}
	function simpleTypeCategory($id)
	{
		$sql = $this->db->where('id_type_category = fk_type_category and id_category ='.$id)->get('type_category,category');
		return $sql;
	}
	function insertCategory()
	{
		$data = array(
			'name_category' => $this->input->post('filed_name'),
			'fk_type_category' => $this->input->post('filed_type') 
		);
		$sql = $this->db->insert('category', $data);
		
		if ($sql) {
			return true;
		}else{
			return false;
		}
	}	
	function updateCategory($id)
	{
		$data = array(
			'name_category' => $this->input->post('category')
		);
		$sql = $this->db->where('id_category',$id)->update('category', $data);
		
		if ($sql) {
			return true;
		}else{
			return false;
		}
	}	

}

/* End of file Category.php */
/* Location: ./application/models/Category.php */