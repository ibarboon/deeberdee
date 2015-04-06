<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contents_Model extends CI_Model {

	public function __construct() {
		parent::__construct();
	} # __construct
	
	public function get_content($content) {
		$sql = "select row_id as content_id, date_format(created, '%d-%b-%Y') created, created_by, floor(rand() * 100) views, content_header, content_body, content_media ";
		$sql .= "from app_contents ";
		foreach($content as $key => $value) {
			if (strpos($sql, 'where') === FALSE) {
				$sql .= "where $key = ? ";
			} else {
				$sql .= "and $key = ? ";
			}
		}
		$query = $this->db->query($sql, $content);
		return $query->result_array();
	} # get_content
	
	public function get_archive($content) {
		$sql = "select distinct date_format(created,'%m-%Y') article_alias, date_format(created,'%b') article_m, date_format(created,'%Y') article_y ";
		$sql .= "from app_contents ";
		foreach($content as $key => $value) {
			if (strpos($sql, 'where') === FALSE) {
				$sql .= "where $key = ? ";
			} else {
				$sql .= "and $key = ? ";
			}
		}
		$sql .= "order by created desc";
		$query = $this->db->query($sql, $content);
		return $query->result_array();
	} # get_archive
} # contents_model

/* End of file contents_model.php */
/* Location: ./application/models/contents_model.php */