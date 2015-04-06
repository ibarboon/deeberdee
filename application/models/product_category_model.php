<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_Category_Model extends CI_Model {

	public function __construct() {
		parent::__construct();
	} # __construct
	
	public function get_product_category($product_category) {
		$sql = "select * ";
		$sql .= "from app_product_category ";
		foreach($product_category as $key => $value) {
			if (strpos($sql, 'where') === FALSE) {
				$sql .= "where $key = ? ";
			} else {
				$sql .= "and $key = ? ";
			}
		}
		$query = $this->db->query($sql, $product_category);
		return $query->result_array();
	} # get_content
	
} # product_category_model

/* End of file product_category_model.php */
/* Location: ./application/models/product_category_model.php */