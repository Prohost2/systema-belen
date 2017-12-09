<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Provider_m extends CI_Model {

	/*Esta función llama lo queria los terminos del Proveedor*/
	function getTerms()
	{
		$sql = $this->db->select('*')->get('terms_provider');
		if ($sql->num_rows() > 0) {
			return $sql;
		}else{
			return FALSE;
		}
	}
	function getPovider()
	{
		$sql = $this->db->select('id_supplier,name_supplier,contact_name,contact_last_name,contact_email,City')->order_by('name_supplier', 'asc')->get('supplier');
		if ($sql->num_rows() > 0) {
			return $sql;
		}else{
			return FALSE;
		}
	}	

	function singlePovider($id)
	{
		$sql = $this->db->select('*')->where('id_supplier = id_bank and payment_terms = id_terms and id_bank = id_data_supplier and id_supplier ='.$id)->get('supplier,data_supplier,data_bank,terms_provider');
		if ($sql->num_rows() > 0) {
			return $sql;
		}else{
			return FALSE;
		}
	}	

	function insertProvider()
	{
		$data = array(
			'name_supplier' => $this->input->post('name_supplier'),
			'contact_name'	=> $this->input->post('contact'),
			'contact_last_name' => $this->input->post('last_name'),
			'contact_email'		=> $this->input->post('email'),
			'contact_phone'		=> $this->input->post('phone'),
			'addres'			=> $this->input->post('address'),
			'City'				=> $this->input->post('city'),
			'zip_code'			=> $this->input->post('zip'),
		 	'country'			=> $this->input->post('country'),
		 	'china_zone'		=> 'NULL'
		 );
		$sql = $this->db->insert('supplier', $data);

		if ($sql == TRUE) {
				
				$data = array(
					'verified' => $this->input->post('verified'),
					'manufacturing_time' => $this->input->post('manufacturing'),
					'alibaba'  => $this->input->post('alibaba'),
					'paypal_acount' => $this->input->post('paypal'),
					'intermediary_bank' => $this->input->post('intermediary_bank'),
					'payment_terms' => $this->input->post('payment_terms'),
					'skype_1'	=> $this->input->post('skype'),
					'skype_2'	=> $this->input->post('skype2'),
					'boss_name' => $this->input->post('boos_name'),
					'boss_email'=> $this->input->post('boos_email'),
					'boss_phone'=> $this->input->post('boos_number'),
					'incoterms' => $this->input->post('incoterms'),
					'terms_payment' => $this->input->post('terms_provider')
				);

				$sql = $this->db->insert('data_supplier', $data);

				if ($sql == TRUE) {
					
					$data = array(
							'bank_name' => $this->input->post('bank_name'),
							'bank_addres_1' => $this->input->post('bank_address'),
							'bank_addres_2' => $this->input->post('bank_address2'),
							'bank_country' => $this->input->post('bank_country'),
							'bank_indentifier' => $this->input->post('bank_identifier'),
							'bank_id' => $this->input->post('bank_id'),
							'bank_account' => $this->input->post('bank_number')
						);
					$sql = $this->db->insert('data_bank', $data);
						if ($sql == TRUE ) {
							return $sql;
						}else{
							return FALSE;
						}
				}else{
					return FALSE;
				}
		}else{
			return FALSE;
		}

	}

	# Modificar el provider

	function updateProvider($id)
	{
		$data = array(
			'name_supplier' => $this->input->post('name_supplier'),
			'contact_name'	=> $this->input->post('contact'),
			'contact_last_name' => $this->input->post('last_name'),
			'contact_email'		=> $this->input->post('email'),
			'contact_phone'		=> $this->input->post('phone'),
			'addres'			=> $this->input->post('address') ,
			'City'				=> $this->input->post('city'),
			'zip_code'			=> $this->input->post('zip'),
		 	'country'			=> $this->input->post('country'),
		 	'china_zone'		=> 'NULL'
		 );
		$sql = $this->db->where("id_supplier",$id)->update('supplier', $data);

		if ($sql == TRUE) {
				
				$data = array(
					'verified' => $this->input->post('verified'),
					'manufacturing_time' => $this->input->post('manufacturing'),
					'alibaba'  => $this->input->post('alibaba'),
					'paypal_acount' => $this->input->post('paypal'),
					'intermediary_bank' => $this->input->post('intermediary_bank'),
					'payment_terms' => $this->input->post('payment_terms'),
					'skype_1'	=> $this->input->post('skype'),
					'skype_2'	=> $this->input->post('skype2'),
					'boss_name' => $this->input->post('boos_name'),
					'boss_email'=> $this->input->post('boos_email'),
					'boss_phone'=> $this->input->post('boos_number'),
					'incoterms' => $this->input->post('incoterms'),
					'terms_payment' => $this->input->post('terms_provider')
				);

				$sql = $this->db->where("id_data_supplier",$id)->update('data_supplier', $data);

				if ($sql == TRUE) {
					
					$data = array(
							'bank_name' => $this->input->post('bank_name'),
							'bank_addres_1' => $this->input->post('bank_address'),
							'bank_addres_2' => $this->input->post('bank_address2'),
							'bank_country' => $this->input->post('bank_country'),
							'bank_indentifier' => $this->input->post('bank_identifier'),
							'bank_id' => $this->input->post('bank_id'),
							'bank_account' => $this->input->post('bank_number')
						);
					$sql = $this->db->where("id_bank",$id)->update('data_bank', $data);
						if ($sql == TRUE ) {
							return $sql;
						}else{
							return FALSE;
						}
				}else{
					return FALSE;
				}
		}else{
			return FALSE;
		}

	}	

}

/* End of file Provider_m.php */
/* Location: ./application/models/Provider_m.php */