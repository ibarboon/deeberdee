<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Utility_Model extends CI_Model {

	public function __construct() {
		parent::__construct();
	} # __construct
	
	public function get_option($option) {
		$sql = "select row_id as option_id, option_type, option_key, option_value ";
		$sql .= "from sys_options ";
		foreach($option as $key => $value) {
			if (strpos($sql, 'where') === FALSE) {
				$sql .= "where $key = ? ";
			} else {
				$sql .= "and $key = ? ";
			}
		}
		$sql .= "order by option_sequence asc";
		$query = $this->db->query($sql, $option);
		return $query->result_array();
	} # get_option
} # utility_model

/* End of file utility_model.php */
/* Location: ./application/models/utility_model.php */