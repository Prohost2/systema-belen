<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {


	function consulta()
	{
		$sql = $this->db->select('id_product')->get('product')->result();
		if ($sql->num_rows() > 0) {
			return $sql;
		}else{
			return FALSE;
		}
	}
	function consultFilter()
	{
		$sql = $this->db->select('*')->get('code_product')->result();
		if ($sql > 0) {
			return $sql;
		}else{
			return FALSE;
		}
	}
	/*Funcion para insertar productos nuevos*/

	function insertcode()
	{
		$data = array(
			'sku' => $this->input->post('sku'),
			'upc' => $this->input->post('upc'),
			'upc_13' => $this->input->post('upc_13'),
			'asin' => $this->input->post('asin'),
			'model' => $this->input->post('model'),
			'hs_code_origin' => $this->input->post('code_origin'),
			'hs_code_destination' => $this->input->post('code_destination'),
			'duty' => $this->input->post('duty'),
			'brand' => $this->input->post('brand'),
			'Fnsku' => $this->input->post('fksnku'),
			'fk_sku_code' => $this->input->post('sku')
		);
		$this->db->insert('code_product', $data);
	}
	function insertCategory()
	{
		$data = array(
			'category_product' => $this->input->post('category'), 
			'sub_category_product' => $this->input->post('sub_category'),
			'category_web_product' => $this->input->post('category_web'),
			'category_ebay'		   => $this->input->post('category_ebay'),
			'category_wallmart'	   => $this->input->post('category_walmart'),
			'category_amazon_product' => $this->input->post('category_amazon'),
			'sub_category_amazon_product' => $this->input->post('sub_amazon'),
			'refinamiento'		  => $this->input->post('refinamiento'),
			'fk_sku_category'	  => $this->input->post('sku')
		);
		$this->db->insert('category_product', $data);
	}
	function insertProduct()
	{
		$data = array(
				'description_2000' => $this->input->post('description_2000'),
				'description_2000_html' => $this->input->post('description_2000_html'),
				'description_4000' => $this->input->post('description_4000'),
				'description_4000_html' => $this->input->post('description_4000_html'),
				'title_80'		   => $this->input->post('title_80'),
				'title_80_html'	   => $this->input->post('title_80_html'),
				'title_200'		   => $this->input->post('title_200'),
				'title_200_html'   => $this->input->post('title_200_html'),
				'fk_product_sku'   => $this->input->post('sku'),


		);
		$this->db->insert('product', $data);
	}
	function insertPrice()
	{
		$data = array(
			'origin_cost' => $this->input->post('origin_cost'),
			'usa_cost' => $this->input->post('usa_cost'),
			'eu_cost' => $this->input->post('eu_cost'),
			'percentage_1' => $this->input->post('percentage_1'),
			'percentage_2' => $this->input->post('percentage_2'), 
			'percentage_3' => $this->input->post('percentage_3'),
			'percentage_4' => $this->input->post('percentage_4'),
			'price_1' => $this->input->post('price_1'),
			'price_2' => $this->input->post('price_2'),
			'price_3' => $this->input->post('price_3'),
			'price_4' => $this->input->post('price_4'),
			'price_5' => $this->input->post('price_5'),
			'fk_sku_cost' => $this->input->post('sku')
		);
		$this->db->insert('cost_price', $data);
	}
	function insertChart()
	{
		$data = array(
			'real_product' => $this->input->post('real'),
			'listing_product' => $this->input->post('listing'),
			'map_product'	=> $this->input->post('map_product'),
			'size_product'  => $this->input->post('size_product'),
			'size_map_product' => $this->input->post('size_map'),
			'fk_sku_chart'	=> $this->input->post('sku')
		);
		$this->db->insert('chart_product', $data);
	}
	function insertBullet()
	{
		$data = array(
			'bullet_point1' => $this->input->post('bullet1'),
			'bullet_point2' => $this->input->post('bullet2'),
			'bullet_point3' => $this->input->post('bullet3'),
			'bullet_point4' => $this->input->post('bullet4'),
			'bullet_point5' => $this->input->post('bullet5'), 
			'bullet_point1_html' => $this->input->post('bullet1_html'),
			'bullet_point2_html' => $this->input->post('bullet2_html'),
			'bullet_point3_html' => $this->input->post('bullet3_html'),
			'bullet_point4_html' => $this->input->post('bullet4_html'),
			'bullet_point5_html' => $this->input->post('bullet5_html'),
			'warranty_1' => $this->input->post('warranty1'),
			'warranty_2'	=> $this->input->post('warranty2')		
		);
		$this->db->insert('bullet_warranty', $data);
	}
	function insertKeyword()
	{
		$data = array(
					'keyword1' => $this->input->post('keyword1'),
					'keyword2' => $this->input->post('keyword2'),
					'keyword3' => $this->input->post('keyword3'),
					'keyword4' => $this->input->post('keyword4'),
					'keyword5' => $this->input->post('keyword5'), 
					'fk_sku_keyword' => $this->input->post('sku')
				);
		$this->db->insert('keyword', $data);
	}
	function insertproviderProduct()
	{
		$data = array(
				
				'sku_product_supplier' => $this->input->post('sku'),
				'fk_product_supplier'  => $this->input->post('provider') 
		);
		$this->db->insert('product_supplier', $data);
	}
	#Función para consultar toda la información de un mismo producto

	function singleProduct()
	{
		$this->db->select('*')->where('');
	}
	

}

/* End of file Product_model.php */
/* Location: ./application/models/Product_model.php */