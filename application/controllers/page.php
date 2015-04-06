<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		$data['current_page'] = ($this->uri->segment(1))? $this->uri->segment(1): 'home';
		$method = '_';
		$method .= ((int)strpos($data['current_page'], '-') > 0)? str_replace('-', '_', $data['current_page']): $data['current_page'];
		if (! method_exists($this, $method)) {
// 			$this->http_404();
		}
		$option = array('option_type' => 'menu', 'active_flag' => 'y');
		$data['menu_list'] = $this->utility_model->get_option($option);
		$option = array('option_type' => 'main_contact', 'active_flag' => 'y');
		$data['main_contact_list'] = $this->utility_model->get_option($option);
		$option = array('option_type' => 'social_network', 'active_flag' => 'y');
		$data['social_network_list'] = $this->utility_model->get_option($option);
		$temp_array = $this->$method();
		if (count($temp_array) > 0) {
			foreach ($temp_array as $key => $value) {
				$data[$key] = $value;
			}
		}
		$this->load->view('header_view', $data);
		$this->load->view($data['view'], $data);
		$this->load->view('footer_view', $data);
	}
	
	public function _home() {
		$temp_array = array('view' => 'home_view');
		return $temp_array;
	}
	
	public function _about_us() {
		$temp_array = array('page_title' => 'เกี่ยวกับเรา', 'view' => 'tabs_view');
		$content = array('content_type' => 'about-us', 'active_flag' => 'y');
		$temp_array['content_list'] = $this->contents_model->get_content($content);
		return $temp_array;
	}
	
	public function _mobile_number() {
		$temp_array = array('page_title' => 'เบอร์', 'view' => 'mobile_number_view');
		$product_category = array('parent_row_id' => 0, 'active_flag' => 'y');
		$temp_array['product_category_list'] = $this->product_category_model->get_product_category($product_category);
		return $temp_array;
	}
	
	public function _article() {
		$temp_array = array('page_title' => 'บทความ', 'view' => 'article_view');
		$thai_month = array(
			'Jan' => 'มกราคม',
			'Feb' => 'กุมภาพันธ์',
			'Mar' => 'มีนาคม',
			'Apr' => 'เมษายน',
			'May' => 'พฤษภาคม',
			'Jun' => 'มิถุนายน',
			'Jul' => 'กรกฎาคม',
			'Aug' => 'สิงหาคม',
			'Sep' => 'กันยายน',
			'Oct' => 'ตุลาคม',
			'Nov' => 'พฤศจิกายน',
			'Dec' => 'ธันวาคม'
		);
		$thai_year = 543;
		$content = array('content_type' => 'article', 'active_flag' => 'y');
		$result_array = $this->contents_model->get_archive($content);
		foreach ($result_array as $row) {
			$sidebar_list[$row['article_alias']] = $thai_month[$row['article_m']].' '.($row['article_y'] + $thai_year);
		}
		$temp_array['sidebar_list'] = $sidebar_list;
		$content = array('content_type' => 'article', 'active_flag' => 'y');
		$result_array = $this->contents_model->get_content($content);
		foreach ($result_array as $row) {
			$date = explode('-', $row['created']);
			$row['created'] = $date[0].' '.$thai_month[$date['1']].' '.($date[2] + $thai_year);
			$content_list[] = $row;
		}
		$temp_array['content_list'] = $content_list;
		return $temp_array;
	}
	
	public function _order_and_payment() {
		$temp_array = array('page_title' => 'สั่งซื้อและชำระเงิน', 'view' => 'tabs_view');
		$content = array('content_type' => 'order-and-payment', 'active_flag' => 'y');
		$temp_array['content_list'] = $this->contents_model->get_content($content);
		return $temp_array;
	}
	
	public function _contact_us() {
		$temp_array = array('page_title' => 'ติดต่อเรา', 'view' => 'contact_us_view');
		return $temp_array;
	}
	
	public function http_404() {
		//
	}
	
	public function _to_string($args) {
		echo '<pre>';
		print_r($args);
		echo '</pre>';
	}
}

/* End of file page.php */
/* Location: ./application/controllers/page.php */